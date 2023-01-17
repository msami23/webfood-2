<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservation  = $request->session()->get('reservation');
        $tables = Table::where('status','avaliable')
            // ->where('guest_number', '>=', $reservation->guest_number)
            ->get();
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('front.reservation', compact('reservation' ,'min_date' , 'max_date' , 'tables'));
    }


        public function create()
    {
        $tables = Table::where('status','avaliable')->get();
        return view('front.reservation', compact('tables'));

    }
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'first_name' => ['required'],
    //         // 'last_name' => ['required'],
    //         'email' => ['required','email'],
    //         'phone' => ['required'],
    //         'res_date' => ['required', 'date', new DateBetween , new TimeBetween],
    //         'table_id' => ['required'],
    //         'guest_number' => ['required'],
    //     ]);

    //     $reservation = $request->session()->get('reservation');
    //     dd($reservation);
    //     if(empty($request->session()->get('reservation'))){
    //         $reservation = new Reservation();
    //         $reservation->file($validated);
    //         $request->session()->put('reservation', $reservation);


    //     }else{
    //         $reservation = $request->session()->get('reservation');
    //         $reservation->file($validated);
    //         $request->session()->put('reservation', $reservation);
    //     }

    //     $reservation->save();

    //     return redirect(route('reservations.index'));
    // }







    public function store(ReservationRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'please choose the table base on guests ');
        }

        // $request_date = Carbon::parse($request->res_date);
        // foreach ($table->reservations as $res) {
        //     if (!$res->$request->format('Y-m-d') == $request_date->format('Y-m-d')) {
        //         return back()->with('warning', 'This table is reserved for this date.');
        //     }
        // }
        $reservation =  Reservation::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'res_date'=> $request->res_date,
            'table_id'=> $request->table_id,
            'guest_number'=> $request->guest_number,


        ]);
        // return redirect(route('front.thank_you',compact('reservation')))->with('success', 'Reservation Created Successfully!!');
    }

}
