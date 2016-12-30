<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribeController extends Controller
{
    // Store subscriber into database
      public function store(Request $request){

      $subscriber = new Subscriber();
      $subscriber->email = $request->email;

      if (!$subscriber->save()) {
        return "ERROR: Subscriber NOT added to list.";

      }
      else {
        return "Subscriber added to list.";
      }
      //   $subscribe_email = Subscriber::create([
      //     'email' => $request->get('email')
      // ]);




      }
}
