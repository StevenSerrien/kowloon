<?php

namespace App\Http\Controllers;
use App\Faqpost;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function about(Request $request)
  {
    $posts = Faqpost::paginate(2);
    if ($request->ajax()) {
      $view = view('includes.faqposts',compact('posts'))->render();
          return response()->json(['html'=>$view]);
      }
    return view('pages.about',compact('posts'));
  }

  public function home(Request $request)
  {
    $posts = Faqpost::paginate(2);
    if ($request->ajax()) {
      $view = view('includes.faqposts',compact('posts'))->render();
          return response()->json(['html'=>$view]);
      }
    return view('pages.home',compact('posts'));
  }

  public function productList(Request $request)
  {
    $posts = Faqpost::paginate(2);
    if ($request->ajax()) {
      $view = view('includes.faqposts',compact('posts'))->render();
          return response()->json(['html'=>$view]);
      }
    return view('pages.productlist',compact('posts'));
  }
}
