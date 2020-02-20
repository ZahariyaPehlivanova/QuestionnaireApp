<?php

namespace App\Http\Controllers\Survey;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class SurveyController extends BaseController
{
    use ValidatesRequests;

    public function index()
    {
        return View::make('survey.question');
    }
}
