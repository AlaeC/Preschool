<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($categorie_id) : View {
        $DataFromDB = Data::where('categorie_id', $categorie_id)->get();
       


        return view('admin.data.index',['AllData'=> $DataFromDB,'categorie_id' => $categorie_id]);
    }

    public function create($categorie_id): View {

        return view('admin.data.create',compact('categorie_id'));
    }



  

    public function store($id) {
        $request = request();
  
        
        $explication = $request->explication;
        $file = $request->file('image');
        $file_audio = $request->file('audio');
        $name = $request->name;

    // Check if a file was uploaded
    if ($file && $file_audio) {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        $filename_audio = time() . '_' . $file_audio->getClientOriginalName();
        $file_audio->move(public_path('uploads'), $filename_audio);
    

        // Save path in DB (example: for a User model)
       Data::create([
         'data_name' => $name,
         'categorie_id' => $id,
          'image' =>  'uploads/' . $filename,
          'audio'  => 'uploads/'.$filename_audio,
          'explication' => $explication
       ]);

       
    }



        return to_route('admin.data.index',$id);
    }


    
    public function edit($categorie_id, $data_id)
{
    $data = Data::findOrFail($data_id); // Find the Data object by ID

    return view('admin.data.edit', [
        'data' => $data,
        'categorie_id' => $categorie_id,
    ]);
}

    

public function update($categorie_id, $data_id)
{
  
    $request = request();

    $file = $request->file('image');
    $file_audio = $request->file('audio');
    $name = $request->name;
    $explication = $request->explication;

    $singleDataFromDB = Data::findOrFail($data_id);

    $updateData = [];

    if ($name) {
        $updateData['data_name'] = $name;
    }

    if ($explication) {
        $updateData['explication'] = $explication;
    }

    if ($file) {
        if ($singleDataFromDB->image && File::exists(public_path($singleDataFromDB->image))) {
            File::delete(public_path($singleDataFromDB->image));
        }

        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        $updateData['image'] = 'uploads/' . $filename;
    }

    if ($file_audio) {
        if ($singleDataFromDB->audio && File::exists(public_path($singleDataFromDB->audio))) {
            File::delete(public_path($singleDataFromDB->audio));
        }

        $filename_audio = time() . '_' . $file_audio->getClientOriginalName();
        $file_audio->move(public_path('uploads'), $filename_audio);

        $updateData['audio'] = 'uploads/' . $filename_audio;
    }

    $singleDataFromDB->update($updateData);

    return redirect()->route('admin.data.index', $categorie_id)->with('success', 'Data updated successfully.');
}


    
public function destroy($categorie_id,$data_id) {
    $dataDB = Data::find($data_id);
    if ($dataDB->image && File::exists(public_path($dataDB->image))) {
        File::delete(public_path($dataDB->image));
    }

    // Delete video file if exists
    if ($dataDB->audio && File::exists(public_path($dataDB->audio))) {
        File::delete(public_path($dataDB->audio));
    }

    $dataDB->delete();



  

    return redirect()->route('admin.data.index', $categorie_id)->with('success', 'Data updated successfully.');
}

}
