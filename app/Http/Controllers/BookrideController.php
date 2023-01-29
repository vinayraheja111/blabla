<?php

namespace App\Http\Controllers;

use App\Models\bookride;
use App\Models\PostRide;
use Illuminate\Http\Request;

class BookrideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id='')
    {
        //if($id>0){
        $data = PostRide::where(['id'=>$id])->get();
        //echo "<pre>";
        //print_r($data);
        //die;
    //}
        return view('bookride',['arr'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->post();
        $data = new bookride();
        $data->origin = $request->origin;
        $data->destination = $request->destination;
        $data->post_id = $request->id;
        $data->date = $request->date;
        $data->price = $request->price;
        $data->seat = $request->seat;
        $data->save();

         $seats = Postride::find($request->id);
         $seats->seats = $seats->seats - $request->seat;
         $seats->save();

         if($seats->seat == 0)
         {
            $request->session()->flash('msg','Cab fully Booked');
            return redirect('rides');
         }

         
        if($data)

        {
             $request->session()->flash('success','Booking Created Succfully');
               return redirect('mybooking'); 
        }
        else
        {
            return session()->flash('error','Some Error in Booking creation');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bookride  $bookride
     * @return \Illuminate\Http\Response
     */
    public function show(bookride $bookride)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bookride  $bookride
     * @return \Illuminate\Http\Response
     */
    public function edit(bookride $bookride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bookride  $bookride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookride $bookride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bookride  $bookride
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookride $bookride)
    {
        //
    }
}
