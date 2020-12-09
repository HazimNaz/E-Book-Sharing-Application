<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class EBookController extends Controller
{
    public function master () {
    return view('subview.master');
    }

    public function nav () {
    return view('subview.nav');
    }

    public function about () {
    return view('subview.about');
    }

    public function list () {

    $Books = array(
    "Book 1" => array(
        "Title: " => "Percy Jackson & the Olympians: The Lightning Thief",
        "ISBN: " => "0-7868-5629-7",
        "Category: "=>"Action and Fantasy Novel",
        "NoPages: "=>"377",
    ),
    "Book 2" => array(
        "Title: " => "The Mystery of Universe",
        "ISBN: " => "1465499334",
        "Category: "=>"Science",
        "NoPages: "=>"186",
    ),
    "Book 3" => array(
        "Title: " => "Hormones, Metabolism and the Benefits of Exercise",
        "ISBN: " => "978-3-319-72790-5",
        "Category: "=>"Health",
        "NoPages: "=>"102",
    ),
   
);
      
    return view('subview.list', compact('Books'));
   
    }
}
