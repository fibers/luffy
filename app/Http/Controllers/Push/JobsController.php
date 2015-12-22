<?php
/**
 * Created by PhpStorm.
 * User: fibers
 * Date: 15/12/22
 * Time: 上午11:25
 */

namespace App\Http\Controllers\Push;

use App\Http\Controllers\Controller;
use App\Jobs\SendPushJob;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    use DispatchesJobs;

    public function index(){
        return view('push.jobs');
    }

    public function store(Request $request){
        $target = $request->input('target');
        $type = $request->input('type');
        $action = $request->input('action');
        $actionInfo = $request->input('actionInfo');

        $userIds = array();
        if( $target == 0){
            $userIdsResponse = file_get_contents(env('PUSH_ENDPOINT') . '/registered_users');
            $userIdsResponseJson = json_decode($userIdsResponse);
            $userIds = $userIdsResponseJson['user_ids'];
        }

        $payload = array('t' => $type, 'a' => $action . ':' . $actionInfo);

    }

    public function push()
    {
        $data = new Object();
        $data->a = 'aa';
        for($i=0; $i<100; $i++){
            $data['text'] = $i;
            $data['time'] = time();
            $job = (new SendPushJob($data))->onQueue('push_jobs');
            $this->dispatch($job);
        }
    }
}