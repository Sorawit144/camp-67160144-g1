@extends('template.default')

@section('title', 'My view')
@section('content')
    <h1>My view </h1>
    <?php
        echo "Hello view content";
        echo "<br>";
        echo "Line 2";
    ?>
    <br>
    <?php
    $myval = "Hello";
    ?>
    <br>
    <?php

    $myval = 1 ;
    echo $myval;

    $myarry = Array(1,2,3,4,5);
    $myarry2 = [1,2,3,4,5];
    $myarry3[] = 1 ;
    $myarry3[] = 2 ;
    $myarry3[2] = 3 ;
    $myarry3[] = 4 ;

    echo $myarry[0];
    echo "<br>";
    print_r($myarry2);
    echo "<br>";
    var_dump($myarry3);
    ?>

    <?php
    $myarry4 = [
        "name" => "John",
        "age" => 30,
        "city" => "New York",
        0,
        1    
    ];
    print_r($myarry4);
    foreach($myarry4 as $key => $value){
        echo "<br>Key: " . $key . " Value: " . $value;
    }
    foreach ($myarry4 as $key => $value) {
        echo "<br> Value: " . $value;
    }
    $myval = "A";
    for($i=0; $i<5; $i++){
        echo $myval++;
        echo "<br>";
    }
    function myfunction(){
        return "My function called";
    }

    echo myfunction();

    $a = 10;
    if($a > 10){
        echo "a < 10";
    }
    elseif($a == 10){
        echo "a = 10";
    }
    else{
        echo "a > 10";
    }
    ?>
    
        @endsection