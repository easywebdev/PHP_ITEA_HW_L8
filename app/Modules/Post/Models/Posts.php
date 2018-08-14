<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 12:22
 */

namespace App\Modules\Post\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Class Posts
 * @package App\Modules\Post\Models
 */
class Posts extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'post',
        'user_id'
    ];
}