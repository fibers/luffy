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

    public function index()
    {
        return view('push.jobs');
    }

    public function store(Request $request)
    {
        $target = $request->input('target');
        $type = $request->input('type');
        $displayTitle = $request->input('displayTitle');
        $displayText = $request->input('displayText');
        $action = $request->input('action');
        $actionInfo = $request->input('actionInfo');

        $userIds = array();
        if ($target == 0) {
            $userIdsResponse = file_get_contents(env('PUSH_ENDPOINT') . '/registered_users');
            $userIdsResponseJson = json_decode($userIdsResponse);
            $userIds = $userIdsResponseJson->user_ids;
        }

        $payload = array('t' => $type, 'a' => $action . ':' . $actionInfo);

        while (count($userIds)) {
            $spliceUserIds = array_splice($userIds, 0, 60);
            $data = array('userIds' => $spliceUserIds, 'title' => $displayTitle,
                'text' => $displayText, 'payload' => $payload);

            $job = (new SendPushJob($data))->onQueue('push_jobs');
            $this->dispatch($job);
        }

        return 'OK';
    }
}