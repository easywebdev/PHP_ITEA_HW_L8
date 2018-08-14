<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 15:37
 */

namespace App\Modules\Post\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Post\Actions\CreatePostAction;
use App\Modules\Post\Actions\DeletePostAction;
use App\Modules\Post\Actions\UpdatePostAction;
use App\Modules\Post\PostTransformer;
use App\Modules\Post\Tasks\ListAllPostsTask;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Modules\Post\Controllers
 */
class PostController extends Controller
{
    /**
     * @param ListAllPostsTask $task
     * @return \Dingo\Api\Http\Response
     */
    public function getPosts(ListAllPostsTask $task)
    {
        $posts = $task->run();

        return $this->response->collection($posts, new PostTransformer());
    }

    /**
     * @param Request $request
     * @param CreatePostAction $action
     * @return \Dingo\Api\Http\Response
     */
    public function createPost(Request $request, CreatePostAction $action)
    {
        $action->run($request->name, $request->post);

        return $this->response->created(null, [
            'Post' => 'Created'
        ]);
    }

    /**
     * @param Request $request
     * @param UpdatePostAction $action
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function updatePost(Request $request, UpdatePostAction $action, $id)
    {
        $action->run($request->name, $request->post, $id);

        return $this->response->created(null, [
            'Post' => 'Updated'
        ]);
    }

    /**
     * @param DeletePostAction $action
     * @param $id
     * @return \Dingo\Api\Http\Response
     */
    public function deletePost(DeletePostAction $action, $id)
    {
        $action->run($id);

        return $this->response->created(null, [
            'Post' => 'Deleted'
        ]);
    }
}