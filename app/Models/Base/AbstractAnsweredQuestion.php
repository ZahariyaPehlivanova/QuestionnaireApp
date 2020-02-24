<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12.11.2019 г.
 * Time: 22:19
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @property  int id
 * @property  string name
 * @property  string password
 * @method static Builder firstOrCreate($attributes)
 * @method static Builder whereUserId($userId)
 */
class AbstractAnsweredQuestion extends Model
{
    protected $guarded = ['id'];

    public $timestamps = true;

    public $table = 'answered_questions';
}