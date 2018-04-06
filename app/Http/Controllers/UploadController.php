<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Session;
use Redirect;
use App\FileModel;


class UploadController extends Controller
{
    


    public function getView(){
    	return view('uploadfile');
    }

    public function insertFile(){



    	$filetitle=Input::get('file_title');
    	$file= Input::file('filename');



    	$rules = array(
            'file_title' => 'required',
            'filename' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg,pdf'
            ); 

    	// 'image' => 'required|mimes:jpeg,png,jpg,gif,svg,csv,xls,xlsx,doc,docx|m‌​ax:2048'



        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);

		  if ($validator->fails()) {

            // redirect our user back with error messages       
            $messages = $validator->messages();
		    // send back to the page with the input data and errors
		    return Redirect::to('uploadfile')->withInput()->withErrors($validator);

		  }else if ($validator->passes()){

		    // checking file is valid.
		    if (Input::file('filename')->isValid()) {

		      //$destinationPath = 'images/profile/'; // upload path
		     $extension = Input::file('filename')->getClientOriginalExtension(); // getting image extension
		    $filename = rand(11111,99999).'.'.$extension; // renameing image


		  // uploading file to given path

		    	//$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'up_file';//its refers proj/public/up_file directry


                $data=array(
                    'file_title' => $filetitle,
                    'file_name' => $filename,
                );


                FileModel::insert($data);


                $upload_success = $file->move($destinationPath, $filename);
                $notification = array(
                    'message' => 'File Uploaded successfully!', 
                    'alert-type' => 'success'
                );

                return Redirect::to('uploadfile')->with($notification);

       
		    }
		    else {
		      // sending back with error message.
		      

                $notification = array(
                        'message' => 'uploaded file is not valid!', 
                        'alert-type' => 'error'
                    );

                return Redirect::to('uploadfile')->with($notification);
		    }
  		}



    }
}
