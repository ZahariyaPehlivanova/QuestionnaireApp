<?php

namespace App\Http\Controllers\Survey;

use App\Models\AnsweredQuestion;
use App\Models\Question;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SurveyController extends BaseController
{
    use ValidatesRequests;

    /**
     * @param null $id
     * @return \Illuminate\Contracts\View\View
     */
    public function index($id = null)
    {
        $query = Question::with('answers');
        if (!$id) {
            $question = $query->where('sort_order', 1)->first();
        } else {
            $question = $query->find($id);
        }

        return View::make('survey.question', [
            'question' => $question
        ]);
    }

    /**
     * @param $questionId
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveAnswers($questionId)
    {
        foreach (request()->input('answers') as $answerId) {
            AnsweredQuestion::firstOrCreate([
                'user_id' => Auth::user()->getAuthIdentifier(),
                'question_id' => $questionId,
                'answer_id' => $answerId,
            ]);
        }

        $currentQuestion = Question::find($questionId);
        if (Question::whereSortOrder($currentQuestion->sort_order + 1)->exists()) {

        } else {
            return redirect(route('summary'));
        }

        return redirect(route('home'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function summary()
    {
        $answeredQuestions = AnsweredQuestion::whereUserId(Auth::user()->getAuthIdentifier())
            ->with(['question', 'answer'])
            ->get()
            ->groupBy('question_id');

        return View::make('survey.summary', [
            'answeredQuestions' => $answeredQuestions
        ]);
    }
}
