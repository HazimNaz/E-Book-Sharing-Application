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

     /*  class Books{
        public $title;
        public $ISBN;
        public $BookCategory;
        public $NoPages;
        
        function __construct($title,$ISBN,$BookCategory,$NoPages) {
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->BookCategory = $BookCategory;
        $this->NoPages = $NoPages;
        }
    }
    $Books = array(
    "Book 1" => array(
        "Title" => "Peter Parker",
        "ISBN" => "peterparker@mail.com",
        "Category"=>"",
        "NoPages"=>"",
    ),
    "Book 2" => array(
        "Title" => "Peter Parker",
        "ISBN" => "peterparker@mail.com",
        "Category"=>"",
        "NoPages"=>"",
    ),
    "Book 3" => array(
        "Title" => "Peter Parker",
        "ISBN" => "peterparker@mail.com",
        "Category"=>"",
        "NoPages"=>"",
    ),
   
);*/
     return view('subview.list');
   
    }
}


 
 
    
   
