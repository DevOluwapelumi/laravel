<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $name = "Instr. Miss Janet";
        $school = "SQI";

        // The with method
    // return view('index')->with('name', $name);

    // The compact method
     return view('index', compact('name', 'school'));

    // The direct method
    return view('index', [
        'name' => $name,
        'school' => $school
        ]);
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