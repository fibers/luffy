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

class JobsController extends Controller
{
    use DispatchesJobs;

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