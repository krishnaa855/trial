<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use DB;
use Image;

use App\First;
class Profile extends Controller


{ 
    function index()
    {
    //passing data in view
        return view('welcome',['t'=>'Welcome To','name' => 'Login Form']);
    }
    //storing file with validation
    function user(Request $request){
        
        return $request->input();
    }


   
    public function submit(Request $request)
    {
      $this->validate($request, array(
        'name' => 'required',
        'number' => 'required|size:10',
      ));
     
      
      //save the data to the database
        $person  = new first ;
        $person->name = $request->name;
        $person->number = $request->number;
       
            
        if($request->file('img')) 
        {
       
        //get filname with Extnsion
        $fileNameWithExt=$request->file('img')->getClientOriginalName();
        //get just file name
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        
        //get just extension
        $ext = $request->file('img')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore = $fileName.'_'.time().".".$ext;
        
        $path=$request->file('img')->storeAs('public/slider/',$fileNameToStore);
        
        
            $person->image=$fileNameToStore;
            $person->save();
          
        }
            
            return redirect ('/show');      
          
    }


    //function to  view data on database user
    function show(){
    //passing data in view from database using variable
        $data =First::all();
        return view('viewdata',[    
            'data'=>$data
        ]);
    }

    //function to edit data in database
    function Edit($id)
    {
       
        //storing data of respective id in variable
        $data =First::find($id);
        return view('edit',[
            'data'=>$data
        ]);
    }

    //function to store data in database
    public function update(Request $request,$id)
    {
        //validation for update

    $validatedData = $request->validate([
        'name' => 'required',
        'number'=>'required|size:10',
    ]);
        
    //selecting respective field in database creating a variable
        $data =First::find($id);
    //passing changed value of selected id to database 
        $data->update($request->all());
        return redirect ('/show');
    }

    public function delete(Request $request,$id)
    {
    //selecting respective field in database creating a variable
        $data =First::find($id);
    //deleting data of selected id in database 
        $data->delete($request->all());
        return redirect ('/show');
    }
   
   
    function trial()
    {
    //passing data in view
        return view('trial');
    }

   function savedata(Request $request){
    if($request->file('img')) 
    {
   
    //get filname with Extnsion
    $fileNameWithExt=$request->file('img')->getClientOriginalName();
    //get just file name
    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
    
    //get just extension
    $ext = $request->file('img')->getClientOriginalExtension();
    //filename to store
    $fileNameToStore = $fileName.'_'.time().".".$ext;
    $path=$request->file('img')->storeAs('public/slider/',$fileNameToStore);
    return ['path'=>$fileName,'uploaded'];
    }
   
   }

}
