<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Settings;
use App\Models\Slots;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class OtherController extends Controller
{
    
    public function index(): View
    {
        return view('otherdashboard',[
            'sidebar' => Settings::first()
        ]);
    }

    // product mybookings  controllers


    public function mybookings(): View
    {
        return view('mybookings',[
            'bookings' => Bookings::where('customer_id',Auth::user()->id)->orderBy('id','desc')->get(),
            'sidebar' => Settings::first()
        ]);
    }

    public function addUserBooking(Request $request){

        $attributes = $request->validate([            
            'customer_name' => 'required',
            'contact_number' => 'required',
            'vehicle_category' => 'required',
            'vehicle_number' => 'required',
            'slot_name' => 'required',
            // 'vehicle_in_time' => 'required',
            'parking_charge' => 'required',
            'booking_id' => 'required|unique:bookings',
        ]);

        $attributes['customer_id'] = Auth::user()->id;

        Bookings::create($attributes);
       
        return back()->with('success','New Booking Added Successfully')->with('booking_id',$attributes['booking_id']);

    }
    
    public function user_vehicle_category($vehicle_category)
    {
        $slot = Slots::where([['vehical_category',$vehicle_category],['status',0]])->get();

        return response()->json($slot);
    }
    
    public function user_get_slot($slot_name)
    {
        $slot = Slots::where([['slot_name',$slot_name],['status',0]])->get();

        return response()->json($slot);
    }


}
