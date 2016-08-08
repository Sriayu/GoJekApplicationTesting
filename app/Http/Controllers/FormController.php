<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\FormVisitorsRequest;

use Response;
use View;


class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }
	
	public function signUp(Request $request)
{
	$NameInput = $request->input('name');
	$EmailInput = $request->input('email');
	$PhoneInput = $request->input('phone');
	$OccupationInput = $request->input('occupation');
	$message = "Mohon, ";
	
	$Body = "";
	$Body .= "Name: ";
	$Body .= $NameInput;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $EmailInput;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $PhoneInput;
	$Body .= "\n";
	$Body .= "Occupation: ";
	$Body .= $OccupationInput;
	$Body .= "\n";
	
	if ($NameInput == ""){
		$message = "isi kolom Name. ";
	}
	if ($EmailInput == "") {
		$message = $message. ", isi kolom Email";
	}
	if ($PhoneInput == "") {
		$message = $message. ", isi kolom Phone";
	}
	if ($OccupationInput == ""){
		$message = $message. ", isi kolom Occupation";
	}
	
	if ($NameInput != "" && $EmailInput != "" && $PhoneInput != "" && $OccupationInput != ""){
		mail($EmailInput, "Sign Up For New Visitors", $Body, "From:".$EmailInput);
		$message = "Email sudah dikirim";
		return Response::make($message);
	}else{
		return Response::make("Failed");
	}

	
}
}
