<?php

namespace App\Http\Controllers\Home;
use App\Events\News;
use App\Events\OrderShipped;
use App\Http\Controllers\Controller;
use App\Jobs\ProcessPodcast;

class TestController extends Controller
{
    public function index(){
//        ProcessPodcast::dispatch(['name'=>'lina'])->delay(now()->addSecond(10));
        event(new OrderShipped());
    }

}
