<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Data; //
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategorieController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    // index function
    public function index() : View {
        $categoriesFromDB = Category::all(); 


        return view('admin.categories.index',['categories'=> $categoriesFromDB]);
    }


    public function create(): View {
        return view('admin.categories.create');
    }

    public function store() {
        $request = request();
        
        $file = $request->file('icon');
        $file_video = $request->file('video');
        $name = $request->name;

    // Check if a file was uploaded
    if ($file && $file_video) {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        $filename_video = time() . '_' . $file_video->getClientOriginalName();
        $file_video->move(public_path('uploads'), $filename_video);
    

        // Save path in DB (example: for a User model)
       Category::create([
         'categorie_name' => $name,
          'icon' =>  'uploads/' . $filename,
          'video'  => 'uploads/'.$filename_video
       ]);

       
    }



        return to_route('admin.categories.index');
    }


    public function edit(Category $categorie) {
        
     
        $categorieDB = Category::all();
        return view('admin.categories.edit', ['categories'=>$categorieDB,'categorie'=>$categorie]);
    }

    public function show($categorie_id) {
        return to_route('admin.data.index',$categorie_id);
     }


    public function update($categorie) {
        $request = request();
    
       $file = $request->file('icon');
        $file_video = $request->file('video');
        $name = $request->categorie_name;
       


        $singleCategorieFromDB = Category::find($categorie);
        
        
    
        
    
        if ($name) {
            $singleCategorieFromDB->update([
                'categorie_name' => $name
                
            ]);
        }
    
        if ($file) {
            if ($singleCategorieFromDB->icon && File::exists(public_path($singleCategorieFromDB->icon))) {
                File::delete(public_path($singleCategorieFromDB->icon));
            }
        
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            
            $singleCategorieFromDB->update([
                'icon' => 'uploads/' . $filename
            ]);
        }
        
        if ($file_video) {
            if ($singleCategorieFromDB->video && File::exists(public_path($singleCategorieFromDB->video))) {
                File::delete(public_path($singleCategorieFromDB->video));
            }
        
            $filename_video = time() . '_' . $file_video->getClientOriginalName();
            $file_video->move(public_path('uploads'), $filename_video);
            
            $singleCategorieFromDB->update([
                'video' => 'uploads/' . $filename_video
            ]);
        }
    
        

   
        return to_route('admin.categories.index');
    }



    public function destroy($categorie_id) {

        $datas = Data::where('categorie_id', $categorie_id)->get();

        foreach ($datas as $data) {
            // Delete image if exists
            if ($data->image && File::exists(public_path($data->image))) {
                File::delete(public_path($data->image));
            }
    
            // Delete audio if exists
            if ($data->audio && File::exists(public_path($data->audio))) {
                File::delete(public_path($data->audio));
            }
    
            // Delete the data record
            $data->delete();
        }
    
        // Now delete the cat




        $categorieDB = Category::find($categorie_id);
        if ($categorieDB->icon && File::exists(public_path($categorieDB->icon))) {
            File::delete(public_path($categorieDB->icon));
        }
    
        // Delete video file if exists
        if ($categorieDB->video && File::exists(public_path($categorieDB->video))) {
            File::delete(public_path($categorieDB->video));
        }

        $categorieDB->delete();



      

        return to_route('admin.categories.index');
    }

}
