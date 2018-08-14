<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 15:44
 */

namespace App\Modules\Post;


use App\Modules\Post\Models\Posts;
use League\Fractal\TransformerAbstract;

/**
 * Class PostTransformer
 * @package App\Modules\Post
 */
class PostTransformer extends TransformerAbstract
{
    /**
     * @param Posts $postModel
     * @return array
     */
    public function transform(Posts $postModel)
    {
        return [
            'name' => $postModel->name,
            'post' => $postModel->post,
        ];
    }
}