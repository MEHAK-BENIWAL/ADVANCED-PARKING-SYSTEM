<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Categories;
use App\Models\Settings;
use App\Models\Slots;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Termwind\Components\Dd;

class AdminController extends Controller
{

    // users controllers
    public function users(): View
    {
        return view('admin.data.users',[
            // 'users' => User::where('role','<>','admin')->paginate(10),
            'users' => User::orderBy('role','asc')->paginate(10),
            'sidebar' => Settings::first()
        ]);
    }

    public function addUser(Request $request){

        $attributes = $request->validate([
            "role" => "required",
            "name" => "required",
            "email" => "required",
            "password" => ['required',Rules\Password::defaults()],
        ]);

        $attributes['password'] = Hash::make($request->password);

        User::create($attributes);

        return back()->with('success','User added successfully');
    }

    
    public function updateUser(Request $request){

        $attributes = $request->validate([
            "role" => "required",
            "name" => "required",
            "email" => "required",
            "password" => ['required',Rules\Password::defaults()],
        ]);

        $attributes['password'] = Hash::make($request->password);

        User::where('id',$request['id'])->update($attributes);

        return back()->with('success','User updated successfully');
    }

    
    public function user($id)
    {
        $user = User::where('id',$id)->get();

        return response()->json([$user]);
    }

    public function removeUser(Request $request){
        
        $attributes = $request->validate([
            'id' => 'required'
        ]);

        User::where('id',$attributes['id'])->delete();

        return back()->with('success','User Records Deleted Successfully');

    }


    // categories controllers
    public function categories(): View
    {
        return view('admin.data.categories',[
            'categories' => Categories::all(),
            'sidebar' => Settings::first()
        ]);
        
    }

    public function addCategory(Request $request){

        $attributes = $request->validate([
            'category_name' => 'required|unique:categories',
        ]);

        $attributes['description'] = $request['description'];

        Categories::create($attributes);

        return back()->with('success','Category added successfully');
    }

    
    public function updateCategory(Request $request){

        $attributes['category_name'] = $request['category_name'];
        $attributes['description'] = $request['description'];

        Categories::where('id',$request['id'])->update($attributes);

        return back()->with('success','Category updated successfully');
    }

    
    public function category($id)
    {
        $category = Categories::where('id',$id)->get();

        return response()->json([$category]);
    }

    public function removeCategory(Request $request){
        
        $attributes = $request->validate([
            'id' => 'required'
        ]);

        Categories::where('id',$attributes['id'])->delete();

        return back()->with('success','Category Records Deleted Successfully');

    }

    // Slots controllers

    public function slots(): View
    {
        return view('admin.data.slots',[
            'slots' => Slots::orderBy('id','desc')->get(),
            'sidebar' => Settings::first()
        ]);
    }
    
    public function addSlot(Request $request){

        $attributes = $request->validate([
            'slot_name' => 'required|unique:slots',
            'slot_price' => 'required',
            'status' => 'required'
        ]);

        $category = Categories::where('id',$request['category_id'])->first('category_name');

        $attributes['vehical_category'] = $category->category_name;

        Slots::create($attributes);
       
        return back()->with('success','New Slot Record Added Successfully');

    }

    public function updateSlot(Request $request){

        
        $category = Categories::where('id',$request['category_id'])->first('category_name');   

        $attributes['vehical_category'] = $category->category_name;
        $attributes['slot_name'] = $request['slot_name'];
        $attributes['slot_price'] = $request['slot_price'];
        $attributes['status'] = $request['status'];

        Slots::where('id',$request['id'])->update($attributes);

        return back()->with('success','Slot Record Updated Successfully');

    }

    

    public function slot($id)
    {
        $slot = Slots::where('id',$id)->get();

        return response()->json([$slot]);
    }
    
    public function removeSlot(Request $request){
        
        Slots::where('id',$request['id'])->delete();

        return back()->with('success','Slot Records Deleted Successfully');


    }

    // bookings controllers

    
    public function bookings(): View
    {
        return view('admin.data.bookings',[
            'bookings' => Bookings::orderBy('id','desc')->get(),
            'sidebar' => Settings::first()
        ]);
    }

    public function addBooking(Request $request){

        $attributes = $request->validate([            
            'customer_name' => 'required',
            'contact_number' => 'required',
            'vehicle_category' => 'required',
            'vehicle_number' => 'required',
            'slot_name' => 'required',
            'vehicle_in_time' => 'required',
            'parking_charge' => 'required',
        ]);

        Bookings::create($attributes);
       
        return back()->with('success','New Booking Added Successfully');

    }

    
    public function updateBooking(Request $request){

        $attributes['customer_name'] = $request['customer_name'];
        $attributes['contact_number'] = $request['contact_number'];
        $attributes['vehicle_category'] = $request['vehicle_category'];
        $attributes['vehicle_number'] = $request['vehicle_number'];
        $attributes['slot_name'] = $request['slot_name'];
        $attributes['vehicle_in_time'] = $request['vehicle_in_time'];
        $attributes['parking_charge'] = $request['parking_charge'];

        Bookings::where('id',$request['id'])->update($attributes);
       
        return back()->with('success','Booking Updated Successfully');

    }

    public function booking($id)
    {
        $booking = Bookings::where('id',$id)->get();

        return response()->json([$booking]);
    }
   
}
