<?php

namespace Jiri\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function main(Request $request)
    {
        $apiRequest = Request::create('/api/events/1/students', 'GET', ['embed' => 'performances']);
        $request->replace($apiRequest->input());
        $event = Route::dispatch($apiRequest)->getOriginalContent();

        return view('dashboard', compact('event'));
    }
}
