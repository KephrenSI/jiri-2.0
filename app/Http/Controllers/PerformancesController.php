<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\StoreScore;
use App\Implementation;
use App\Meeting;
use App\Performance;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerformancesController extends Controller
{
    public function postEvaluate(Request $request, Performance $performance)
    {
        $student = $performance->student()->get()->first();
        $event = $performance->event()->get()->first();

        $performance = Performance::updateOrCreate(
            ['event_id' => $event->id, 'student_id' => $student->id],
            ['manual_score' => request('manual_score')]
        );

        return redirect('/students/'.$event->id.'/implementations');

    }
}