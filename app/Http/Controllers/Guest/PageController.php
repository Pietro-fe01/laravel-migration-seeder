<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index(){
        $mytime = Carbon::now();

        $all_trains = Train::all();

        $trains = Train::where('starting_time', '>=', $mytime->toDateTimeString()
        )->get();

        return view('homepage', compact('trains', 'all_trains'));    
    }
}
