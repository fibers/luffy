<?php
/**
 * Created by PhpStorm.
 * User: fibers
 * Date: 15/12/18
 * Time: 下午2:31
 */

namespace app\Http\Controllers\push;


use App\Http\Controllers\Controller;
use App\Models\Api\IMUser;

class RegisteredUsersController extends Controller
{
    public function index()
    {
        $user_ids_str = file_get_contents(env('PUSH_ENDPOINT') . '/registered_users');
        $user_ids = json_decode($user_ids_str);
        $users = IMUser::whereIn('id', $user_ids->user_ids)->paginate(50);

        return view('push.registered_users', ['users' => $users]);
    }
}