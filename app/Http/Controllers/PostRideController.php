<?php

namespace App\Http\Controllers;

use App\Models\PostRide;
use App\Models\city;
use App\Models\Car;
use Illuminate\Http\Request;

class PostRideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = city::all();
        $car_data = Car::all();
        //echo "<pre>";
        //print_r($data);
        //die;
        return view('post_ride',['arr'=>$data,'cdata'=>$car_data]);
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
        // $request->validate([
        //    'Origin' => 'required',
        //    'destinantion' => 'required',
        //    'type' => 'required',
        //    'brand'=> 'required',
        //    'model' => 'required',
        //    'color' => 'required',
        //    'year' => 'required',
        //    'licenese_number' => 'required',
        //    'luggage' => 'required',
        //    'people' => 'required',
        //    'seat' => 'required',
        //    'price' => 'required'
        // ]);

        $data = new PostRide();
        //echo "<pre>";
        //print_r($data);
        //die;
        $data->orgin = $request->post('Origin');
        $data->destination = $request->post('destinantion');
        $data->dates = $request->post('date');
        $data->time = $request->post('time');
        $data->droptime = $request->post('dtime');
        $data->type = $request->post('type');
        $data->brand = $request->post('brand');
        $data->model = $request->post('model');
        $data->color = $request->post('color');
        $data->year = $request->post('year');
        $data->license = $request->post('licenese_number');
        $data->luggage = $request->post('luggage');
        $data->image = $request->post('file');
        $data->back_sitting = $request->post('people');
        $data->seats = $request->post('seat');
        $data->price = $request->post('price');
        $data->save();
        if($data)
        {
            $request->session()->flash('success','Ride Created Succssfully');
            return redirect('rides');
        }
        else
        {
            print_r($data);
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostRide  $postRide
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = PostRide::all();
        return view('rides',['arr'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostRide  $postRide
     * @return \Illuminate\Http\Response
     */
    public function edit(PostRide $postRide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostRide  $postRide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRide $postRide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostRide  $postRide
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRide $postRide)
    {
        //
    }
}
