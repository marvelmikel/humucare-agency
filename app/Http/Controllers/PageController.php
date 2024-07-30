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

   public function about()
   {
     return view('about');
   }

   public function home()
   {
     return view('home');
   }

    public function service()
    {
      return view('service');
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
      $details = $request->session()->get('details');
      $details->fill($validatedData);
      $request->session()->put('details', $details);

  }
      return redirect('humcareform-step-two');
  }
  
  public function getFormStepTwo (Request $request){
    $details = $request->session()->get('details');

    return view ('humcareform-step-two',compact('details'));
  }
  
public function postFormStepTwo (Request $request) {

    $validatedData = $request->validate([
      'university' =>'required',
        'course'=>'required',
        'qualification'=>'required',
        'profQualification'=>'required',
        'courseDetails' =>'required',
        'membership'=>'required',
        'trainingProgram'=>'required',
        'courseDuration' =>'required',
        'personalStatement' =>'required',
        'conviction'=>'required',
        'convictionDetails'=>'sometimes',
        'underTaking'=>'required',
    ]);  
  
      $details = $request->session()->get('details');
      $details->fill($validatedData);
      $request->session()->put('details', $details);
  
  return redirect ('/humcareform-step-three');
}

  public function getFormStepThree (Request $request){

    $details = $request->session()->get('details');

    return view ('humcareform-step-three',compact('details'));
  }

  public function postFormStepThree (Request $request){
    $validatedData = $request->validate([
    'offence' =>'sometimes',
    'disability' =>'required',
  'sicknessAbsence' =>'required', 
  'refereeName1' =>'required',
  'refereePosition1' =>'required', 
  'refereeRelationship1' =>'required',
  'refereeOrganization1' =>'required',
  'refereeAddress1'=>'required',
  'refereePostCode1' =>'required',
  'refereeTelephone1'=>'required',
  'refereeEmail1' =>'required', 
  'refereeName2'=>'required', 
  'refereePosition2' =>'required',
  'refereeRelationShip2'=>'required',
  'refereeOrganization2'=>'required',
  'refereeAddress2'=>'required', 
  'refereePostCode2'=>'required', 
  'refereeTelephone2'=>'required',
  'refereeEmail2'=>'required',
  'approachReferee'=>'required',
    ]);
    $details = $request->session()->get('details');
      $details->fill($validatedData);
      $request->session()->put('details', $details);

    return redirect('/humcareform-step-four');
  }


  public function getFormStepFour(Request $request){

    $details = $request->session()->get('details');

    return view ('humcareform-step-four');
  }
  
  public function postFormStepFour(Request $request){
   $validatedData = request()->validate([
    'bankName'=>'required',
    'bankBranch'=>'required',
    'nameOnCard'=>'required',
    'accountNumber'=>'required',
    'sortCode'=>'required',
    'postApplication'=>'required',
    'ethnicGroup'=>'required',
    'gender'=>'required',
    'disabilityConfirm'=>'required',
    'presentStatus'=>'required',
    'age'=>'required',
   ]);
   $details = $request->session()->get('details');
   $details->fill($validatedData);
   $request->session()->put('details',$details);
    return redirect ('/humcareform-step-five');
  }
  
  
  public function getFormStepFive(Request $request){
    $details = $request->session()->get('details');

    return view ('humcareform-step-five');
  }
  
  public function postFormStepFive(Request $request){

    
    $request->validate([
      'passportBirth'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'proofOfWork'=>'required|mimes:png,jpg,jpeg,pdf|max:20488',
      'proofOfAddress'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'originalCertificate'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'certificateTraining'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'passportPhoto'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'bankSocietyDetails'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'dbsCertificate'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'nationalInsurance'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
      'curriculumVitae'=>'required|mimes:png,jpg,jpeg,pdf|max:2048',
     ]);

      $passportBirthName = now()->timestamp.".{$request->passportBirth->getClientOriginalName()}";
      $request->file('passportBirth')->storeAs('Documents', $passportBirthName);

      $proofOfWorkName = now()->timestamp.".{$request->proofOfWork->getClientOriginalName()}";
      $request->file('proofOfWork')->storeAs('Documents',  $proofOfWorkName);

      $proofOfAddressName = now()->timestamp.".{$request->proofOfAddress->getClientOriginalName()}";
      $request->file('proofOfAddress')->storeAs('Documents', $proofOfAddressName);

      $originalCertificateName = now()->timestamp.".{$request->originalCertificate->getClientOriginalName()}";
      $request->file('originalCertificate')->storeAs('Documents', $originalCertificateName);
      
      
      $certificateTrainingName = now()->timestamp.".{$request->certificateTraining->getClientOriginalName()}";
      $request->file('certificateTraining')->storeAs('Documents', $certificateTrainingName);
      
      
      $passportPhotoName = now()->timestamp.".{$request->passportPhoto->getClientOriginalName()}";
      $request->file('passportPhoto')->storeAs('Documents', $passportPhotoName);

      
      $bankSocietyDetailsName = now()->timestamp.".{$request->bankSocietyDetails->getClientOriginalName()}";
      $request->file('bankSocietyDetails')->storeAs('Documents', $bankSocietyDetailsName);
      
      $dbsCertificateName = now()->timestamp.".{$request->dbsCertificate->getClientOriginalName()}";
      $request->file('dbsCertificate')->storeAs('Documents', $dbsCertificateName);


      $nationalInsuranceName = now()->timestamp.".{$request->nationalInsurance->getClientOriginalName()}";
      $request->file('nationalInsurance')->storeAs('Documents', $nationalInsuranceName);

      $curriculumVitaeName = now()->timestamp.".{$request->curriculumVitae->getClientOriginalName()}";
      $request->file('curriculumVitae')->storeAs('Documents', $curriculumVitaeName);
     
      $imageDetails = [
        'passportBirth' => $passportBirthName,
        'proofOfWork'   => $proofOfWorkName,
        'proofOfAddress' => $proofOfAddressName,
        'originalCertificate' => $originalCertificateName,
        'certificateTraining' => $certificateTrainingName,
        'passportPhoto' =>  $passportPhotoName,
        'bankSocietyDetails'=>$bankSocietyDetailsName,
        'dbsCertificate' => $dbsCertificateName,
        'nationalInsurance' => $nationalInsuranceName,
        'curriculumVitae' => $curriculumVitaeName,
      ];
      $details = $request->session()->get('details');
      $details->fill($imageDetails);
      $request->session()->put('details', $details);
      $details->save();
      $request->session()->flush();
      
      $notify[] = ['success', 'Your submission was successful'];

      return redirect('humcareform')->withNotify($notify);
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   public function humcarecleanform()
   {
     return view('humcarecleanform');
   }

}
