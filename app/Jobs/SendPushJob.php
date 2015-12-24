<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPushJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $pushEndpoint = env('PUSH_ENDPOINT') . '/push_to_users';

        $userIds = json_encode($this->data['userIds']);
        $text = $this->data['text'];
        $title = $this->data['title'];
        $payload = json_encode($this->data['payload']);

        $content = http_build_query(
            array('user_ids' => $userIds,
                'text' => $text,
                'title' => $title,
                'payload' => $payload
            )
        );

        $options = array(
            'http' => array(
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n" .
                    "Content-length:" . strlen($content) . "\r\n" .
                    "\r\n",
                'method' => 'POST',
                'content' => $content
            ),
        );

        $context = stream_context_create($options);
        file_get_contents($pushEndpoint, false, $context);
    }
}
