<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * change Sidebar colors
     */

    
    public function sidebarColors(Request $request){
        
        $attributes['sidebar'] = $request['sidebar'];

        Settings::where('id',1)->Update($attributes);

        return back();

    }

    
    public function sideNav(Request $request){
        
        $attributes['sidenav'] = $request['sidenav'];

        Settings::where('id',1)->Update($attributes);

        return back();

    }

    
    public function themechange(Request $request){
          
        $attributes['theme'] = $request['theme'];

        Settings::where('id',1)->Update($attributes);

        return back();

    }
}
