<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\DestroyCarRequest;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $parking = Parking::first();

        return view('Frontend.views.list' , compact('cars','parking'));
    }
    public function park()
    {
        return view('Frontend.views.park');
    }

    public function store(StoreCarRequest $request){
        return Car::create($request->validated());
    }

    public function unpark()
    {
        return view('Frontend.views.unpark');
    }

    public function destroy(DestroyCarRequest $request)
    {

        return  Car::where($request->validated())->delete();
    }

    public function search()
    {

        return  Car::filter()->get();
    }
}
