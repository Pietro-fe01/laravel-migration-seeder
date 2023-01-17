<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function index(){
        $new_train = new Train();
        $new_train->company = 'Italo-Nuovo Trasporto Viaggiatori';
        $new_train->starting_station = 'Milano Centrale';
        $new_train->arrival_station = 'Firenze Centrale';
        $new_train->starting_time = '2023-01-17 12:37:00';
        $new_train->arrival_time = '2023-01-17 14:58:00';
        $new_train->unique_code = '17824';
        $new_train->carriages_num = 3;
        $new_train->in_time = 1;
        $new_train->is_cancelled = 0;
        $new_train->save();

        $mytime = Carbon::now();

        $all_trains = Train::all();

        $trains = Train::where('starting_time', '>', $mytime->toDateTimeString()
        )->get();

        return view('homepage', compact('trains', 'all_trains'));    
    }
}
