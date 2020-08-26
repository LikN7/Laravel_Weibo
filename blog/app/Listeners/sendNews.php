<?php

namespace App\Listeners;

use App\Events\News;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendNews
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  News  $event
     * @return void
     */
    public function handle(News $event)
    {
        //
        print_r('122121');
    }
}
