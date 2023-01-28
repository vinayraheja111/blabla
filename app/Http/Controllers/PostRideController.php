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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostRide  $postRide
     * @return \Illuminate\Http\Response
     */
    public function show(PostRide $postRide)
    {
        //
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
