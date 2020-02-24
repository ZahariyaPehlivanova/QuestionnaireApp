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
 * @property int sort_order
 * @method static Builder whereSortOrder($sortOrder)
 */

class AbstractQuestion extends Model
{
    protected $guarded = ['id'];

    public $table = 'questions';
}