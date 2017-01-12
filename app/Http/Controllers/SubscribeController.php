<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Support\Facades\Validator;

class SubscribeController extends Controller
{
    // Store subscriber into database
      public function store(Request $request){

      // Rules to check if email is unique
      $input = array('email' => $request->email);
      $rules = array('email' => 'unique:subscribers,email');

      $validator = Validator::make($input, $rules);

      if ($validator->passes()) {
        $subscriber = new Subscriber();
        $subscriber->email = $request->email;


        if (!$subscriber->save()) {
          return redirect('/')->with('message', 'ERROR! You were not added.');


        }
        else {
          return redirect('/')->with('message', 'Success!');
        }
      }
      else {
        return redirect('/')->with('message', 'You are already in.');
      }


      //   $subscribe_email = Subscriber::create([
      //     'email' => $request->get('email')
      // ]);




      }
}
