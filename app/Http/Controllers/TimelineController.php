<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewView;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): ViewView
    {
        //
        return view('timeline', [
            'tweets' => Tweet::latest('id')->get(),
        ]);
    }
}
