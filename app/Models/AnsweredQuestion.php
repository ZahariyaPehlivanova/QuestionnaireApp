<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12.11.2019 г.
 * Time: 22:19
 */

namespace App\Models;

use App\Models\Base\AbstractAnsweredQuestion;

class AnsweredQuestion extends AbstractAnsweredQuestion
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function question()
    {
        return $this->hasOne(Question::class, 'id', 'question_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer()
    {
        return $this->hasOne(Answer::class, 'id', 'answer_id');
    }
}