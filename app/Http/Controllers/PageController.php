<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HumcareForm;
class PageController extends Controller
{
   public function humcareform(Request $request)
   {
    $details= $request->session()->get('details');
    return view('humcareform-step-one', compact('details'));
   }

  public function postFormStepOne (Request $request){

  $validatedData = $request->validate([
  'firstName' => 'required',
  'lastName' => 'required',
  'address' => 'required',
  'postCode' => 'required',
  'telephoneNo' =>'required',
  'insuranceName' =>'required',
  'dayTimeTelephone'=>'required',
  'mobileTelephone' =>'required',
  'dob' =>'required',
  'email'=>'required',
  'takeEmployment' =>'required',
  'cleanLicense' =>'required',
        ]);

    if(empty($request->session()->get('details'))){
      $details = new HumcareForm();
      $details->fill($validatedData);
      $request->session()->put('details', $details);
  }else{
      $details = $request->session()->get('product');
      $details->fill($validatedData);
      $request->session()->put('details', $details);

  }
      return redirect('humcareform-step-two');
  }
  
  public function getFormStepTwo (Request $request){
    $details = $request->session()->get('details');

    return view ('humcareform-step-two',compact('details'));
  }
  
public function postFromStepTwo () {


  return redirect ('/humcareform-step-three');
}



  public function getFormStepThree (){


    return view ('humcareform-step-three');
  }

  public function postFormStepThree (){


    return redirect('/humcareform-step-four');
  }
  
  
  
  public function getFormStepFour(){


    return view ('humcareform-step-four');
  }
  
  public function postFormStepFour(){


    return redirect ('/humcareform-step-five');
  }
  
  
  public function getFormStepFive(){


    return view ('humcareform-step-four');
  }
  
  public function postFormStepFive(){


    return redirect ('humcareform-step-one');
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   public function humcarecleanform()
   {
     return view('humcarecleanform');
   }

}
