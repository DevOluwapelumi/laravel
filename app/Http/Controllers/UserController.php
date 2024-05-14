<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // return view('index', [
        //     'name' => $name,
        //     'school' => $school
        // ]);
    }

    public function register(Request $request){
        return $request->name;
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