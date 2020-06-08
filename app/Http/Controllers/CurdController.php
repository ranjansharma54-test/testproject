<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurdModel as curdoperation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
 use Illuminate\Database\Eloquent\Model;

class CurdController extends Controller
{
    public function __construct(){

    }
    /*
    **@show data 
    */
    public function index(){
    	$view = 'list';
    	return view('home', compact('view'));
    }

    /*
    **@show data 
    */
    public function showRecord(){
    	$empRecord = curdoperation::get();
    	$view = 'list';
    	return view('home', compact('view'))->with('emprecord',$empRecord);
    }

     /*
    **@show data 
    */
    public function createRecord(Request $request){
    	$view = 'insert';
    	return view('home', compact('view'));
    }


     /*
    **@show data 
    */
    public function insertRecord(Request $request){
    	$validator = Validator::make($request->all(), [
           'emp_name' => 'required',
           'dob' => 'required',
           'address' => 'required'
       	]); 
    	if($validator->fails()) {
    		return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$requestData = $request->all();
			curdoperation::create($requestData);
			return redirect('show-record')->with('success', 'Data Inserted successfully!');
		}
    }

     /*
    **@edit record
    */
    public function editRecord($id){
    	$userRecord = curdoperation::find($id);
    	//dd($userRecord);
    	$view = 'edit';
    	return view('home', compact('view'))->with('emprecord',$userRecord);
    }
   

      /*
    **@edit record
    */
    public function updateRecord(Request $request,$id){

    	$validator = Validator::make($request->all(), [
           'emp_name' => 'required',
           'dob' => 'required',
           'address' => 'required'
       	]); 
    	if($validator->fails()) {
    		return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$requestData = $request->all();
			curdoperation::find($id)->update($requestData);
			return redirect('show-record')->with('success', 'Data Updated successfully!');
		}
    }


    /*
    **	@edit record
    */
    public function deleteRecord($id){
    	curdoperation::find($id)->delete();
      	return redirect('show-record')->with('success', 'Record successfully!');
    }	

     public function mobile()
    {
        dd($this->hasOne(emp_projects::class));
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }



}
