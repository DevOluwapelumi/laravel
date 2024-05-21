<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $name = "Instr. Miss Janet";
        $school = "SQI";

        // Use either one of the following methods to pass data to the view:

        // Method 1: Using the with method
        // return view('index')->with('name', $name);

        // Method 2: Using the compact method
        return view('index', compact('name', 'school'));

        // Method 3: Using the direct method
         return view('index', [
             'name' => $name,
             'school' => $school
         ]);
    }

    public function register(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->phoneNumber = ($request->phoneNumber);
        $user->password = Hash::make($request->password);
        $saveUser = $user->save();
        if($saveUser) {
            return view('index')->with('message', 'User saved successfully')->with('status', true);
        }else {
            return view('index')->with('message', 'Error occurred. Please try again')->with('status', false);
        }
    }
}





    //  properties and methods
    //  Acess modifiers = public, private, protected

   // public $name = "Janet";
   // private $school = "SQI";
   // protected $student = "Victor Oluwapelumi";
//}

  //  $newUserController = new UserController;
  //  $newUserController->student;

  //  class InheritedClass extends UserController {
     //   public function echoSchool() {
     //       echo $this->student;
     //   }
 //   }