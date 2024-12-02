<?php

namespace App\Http\Controllers;

use App\Models\admin\menu;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getMenu()
    {
        // Get all AboutUs data
        $menus = menu::all();

        // Return the data as a JSON response
        return response()->json([
            'status' => 'success',
            'data' => $menus
        ], 200);
    }

    public function getmenus($slug)
    {
        // Get AboutUs data based on the provided slug
        $Menus = menu::where('slug', $slug)->first();

        if (!$Menus) {
            return response()->json([
                'status' => 'error',
                'message' => 'About Us data not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $Menus
        ], 200);

    }
}