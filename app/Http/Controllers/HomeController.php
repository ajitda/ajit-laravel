<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public  function showWelcome(){
        return view('welcome');
    }

    public function processWelcome(Request $request){
        $data = [];
        $uploadedObject = $request->file('photo');
        $file_name = $uploadedObject->getFilename() . str_random(10);
        $file_ext = $uploadedObject->getClientOriginalExtension();
        $data['name'] = trim($request->input('name'));
        $data['age'] = trim($request->input('age'));
        if($uploadedObject->move(public_path(), $file_name . '.' . $file_ext)){
            $data['photo_file'] = $file_name . '.' . $file_ext;
        }else{
            return $uploadedObject->getErrorMessage();
        }
        return view('welcome', $data);

//        return view('welcome', [
//                'name' => $name,
//                'age' => $age,
//            ]);
//        return view('welcome')->with([
//                'name' => $name,
//                'age' => $age,
//            ]);
//        return view('welcome')->with('name', $name);
    }

    public function showAbout(){
        return view('about');
    }
    public function requestDetails(Request $request){
        return $request;
    }
}
