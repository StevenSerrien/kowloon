<?php

namespace App\Http\Controllers;
use App\Faqpost;

use Illuminate\Http\Request;

class FaqpostController extends Controller
{
  public function show(Request $request)
  {
    // return Faqpost::paginate(5);
    $posts = Faqpost::paginate(25);
    //
    if ($request->ajax()) {
      $view = view('includes.faqposts',compact('posts'))->render();
          return response()->json(['html'=>$view]);
      }

    return view('pages.home',compact('posts'));
  }
}
