@extends('template.default')
@section('header', 'ตารางสูตรคูณ')
@section('content')
   <form action = "/request" method="post">
    @csrf
       <?php //echo isset($_GET['mynumber']) ? $_GET['mynumber'] : ''; ?>
       <input class= "form-control" name= " mynumber" type="number">
       <br>
         <button class="btn btn-success">Submit</button>
   </form>
   @endsection
       