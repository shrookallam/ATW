<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Contact;

use Illuminate\Http\Request;

use \Validator;
class apiContactController extends Controller
{
  
    public function postContactus(Request $request)
    {
        $lang = $request->header('lang');
        $input = $request->all();
        if ($lang == 'en') {
            $validationMessages = [
                'name.required' => "Name is required",
                'message.required' => "Message is required",
            ];
            $validator = Validator::make($input, [
                'name' => 'required',
                'message' => 'required',
            ], $validationMessages);
            if ($validator->fails()) {
                return response($validator->messages()->first(), 401);
            }} elseif ($lang == 'ar') {
            $validationMessagesar = [
                'name.required' => "الاسم غير موجود",
                'message.required' => " الرساله غير موجود",
            ];

            $validator = Validator::make($input, [
                'name' => 'required',
                'message' => 'required',
            ], $validationMessagesar);

            if ($validator->fails()) {
                return response($validator->messages()->first(), 401);
            }
        }
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->text = $request->message;
        $contact->save();
        if ($lang == 'en') {
            return response('Sent Successfully', 200);
        } else {
            return response('تم الارسال بنجاح ', 200);
        }
    }

 
    public function getContactus(Request $request)
    {
       
        $Contact = Contact::orderBy('created_at', 'DESC')->get();
  
            return response( $Contact, 200);
       
    }
   
}
