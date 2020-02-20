<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12.11.2019 г.
 * Time: 22:19
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class AbstractAnswer extends Model
{
    protected $guarded = ['id'];

    public $table = 'answers';
}