<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\menu;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Str;
class MenuController extends Controller
{
    public function index(): View
    {
        $menu = Menu::latest()->paginate(7);
        return view('admin.solutions.index', compact('menu'))
            ->with('i', (request()->input('menu', 1) - 1) * 7);
    }

  
    public function create(): view
    {
        return view('admin.solutions.create');
    }

   
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'label' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:menus,slug|max:255',
            'page_title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'questions' => 'nullable|string|max:255',
            'list' => 'nullable|array',            
            'answer_description' => 'nullable|string',            
        ]);
       
        $input = $request->all();

        $input['slug'] = Str::slug($input['title']);
        if ($request->hasFile('image1')) {
            $input['image1'] = $request->file('image1')->store('images1', 'public');
        }  

        if ($request->hasFile('image2')) {
            $input['image2'] = $request->file('image2')->store('images2', 'public');
        }  

        if ($request->hasFile('image3')) {
            $input['image3'] = $request->file('image3')->store('images3', 'public');
        }  

        Menu::create($input);       

        return redirect()->route('menu.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu ):View
    {      
        return view('admin.solutions.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'label' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:menus,slug|max:255',
            'page_title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'questions' => 'nullable|string|max:255',
            'list' => 'nullable|array',            
            'answer_description' => 'nullable|string',                           
        ]);

        
        $input = $request->all();    

        $input['slug'] = Str::slug($input['title']);          

        if ($request->hasFile('image1')) {
            $input['image1'] = $request->file('image1')->store('images1', 'public');
        }  

        if ($request->hasFile('image2')) {
            $input['image2'] = $request->file('image2')->store('images2', 'public');
        }  

        if ($request->hasFile('image3')) {
            $input['image3'] = $request->file('image3')->store('images3', 'public');
        }  

        $menu->update($input);

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully.');
    }
   
    public function destroy(Menu $menu)
    {      

        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu deleted successfully.');
    }

    /**
     * Display a specific menu by slug.
     */
    public function show($slug)
    {
        $menu = Menu::where('slug', $slug)->firstOrFail();
        return view('solutions.techsolutions.techsolutions', compact('menu'));
    }

}
