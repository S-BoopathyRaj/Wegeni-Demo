<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\menu;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class FrontMenuController extends Controller
{
    /**

     * Write code on Method

     *

     * @return response()

     */

     public function index($slug)
     {
         // Fetch the menu item by slug
         $menu = Menu::whereSlug($slug)->first();
     
         // Check if the menu exists to avoid potential errors
         if (!$menu) {
             abort(404, 'Menu not found');
         }
     
         // Return the view with the menu data
         return response()->view('solutions.techsolutions.techsolutions', compact('menu'));
     }
     
}
