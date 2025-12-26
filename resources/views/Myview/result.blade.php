
@extends('template.default')
@section('title', 'Result')

@section('content')
<h2>ข้อมูลที่คุณกรอก</h2>

<ul>
    <li>ชื่อ: {{ $fname }}</li>
    <li>สกุล: {{ $lname }}</li>
    <li>วันเกิด: {{ $dob }}</li>
    <li>อายุ: {{ $age }}</li>
    <li>เพศ: {{ $gender }}</li>
    <li>ที่อยู่: {{ $address }}</li>
    <li>สีที่ชอบ: {{ $color }}</li>
    <li>แนวเพลง: {{ $genre }}</li>
    <li>การยินยอม: {{ $consent }}</li>
</ul>

<a href="/workshop" class="btn btn-secondary">กลับหน้าฟอร์ม</a>
@endsection
