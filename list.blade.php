@extends('subview/nav')
@section('title', 'About')

@section('content')
 <h1>List</h1>

<?php

//foreach to loop the outer array
foreach($Books as $book) {
echo "<br>";
// foreach to loop the inner array
foreach($book as $key=>$value)
{
echo $key." ". $value. "<br>";
}
}
?>

@endsection
