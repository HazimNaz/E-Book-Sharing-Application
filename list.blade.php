@extends('subview/nav')
@section('title', 'About')

@section('content')
 <h1>List</h1>

<?php
echo "<h2>Book 1</h2>";
echo  "Title: "," Percy Jackson & the Olympians: The Lightning Thief<br>";
echo  "ISBN: ","0-7868-5629-7<br>";
echo  "Category: ","Action and Fantasy Novel<br>";
echo  "NoPages: ","377<br>";

echo "<h2>Book 2</h2>";
echo  "Title: ","The Mystery of Universe<br>";
echo  "ISBN: ","1465499334<br>";
echo  "Category: ","Science<br>";
echo  "NoPages: ","224<br>";

echo "<h2>Book 3</h2>";
echo  "Title: ","Tron<br>";
echo  "ISBN: ","0450055507 <br>";
echo  "Category: ","Science Fiction<br>";
echo  "NoPages: ","186<br>";

echo "<h2>Book 4</h2>";
echo  "Title: ","Hormones, Metabolism and the Benefits of Exercise<br>";
echo  "ISBN: ","978-3-319-72790-5<br>";
echo  "Category: ","Health<br>";
echo  "NoPages: ","102<br>";

echo "<h2>Book 5</h2>";
echo  "Title: ","C++ 20 Recipe<br>";
echo  "ISBN: ","978-1-4842-5712-8<br>";
echo  "Category: ","Computer Science<br>";
echo  "NoPages: ","645<br>";

?>

@endsection