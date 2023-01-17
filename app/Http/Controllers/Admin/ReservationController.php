<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::where('status','avaliable')->get();
        return view('admin.reservation.create', compact('tables'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect(route('admin.reservation.index',compact('reservation')))->with('success', 'Reservation Created Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $reservation = Reservation::findOrFail($id);
        $tables = Table::where('status','avaliable')->get();
        return  view('admin.reservation.edit', compact('reservation' , 'tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'please choose the table base on guests ');
        }
        $reservation->update([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'res_date'=> $request->res_date,
            'table_id'=> $request->table_id,
            'guest_number'=> $request->guest_number, 

        ]);
        return redirect(route('admin.reservation.index',compact('reservation')))->with('success', 'Reservation Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('admin.reservation.index'))->with('danger', 'Reservation Deleted Successfully!!');
    }
}
