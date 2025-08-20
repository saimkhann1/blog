<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PostCreatedMail;

class SendPostCreatedEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
      public function handle(PostCreated $event): void
    {
        $post = $event->post;
        $user = $post->user; // assuming Post belongsTo User

        // Send email
        Mail::to($user->email)->send(new PostCreatedMail($post));
    }
}
