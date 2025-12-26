@extends('template.default')
@section('title', 'Workshop FORM')

@section('content')
<h1>Workshop HTML 101 - Forms</h1>

<form class="form-box"
      action="{{ route('workshop.store') }}"
      method="POST"
      enctype="multipart/form-data"
      onsubmit="return clickMe()">
    @csrf

    <div class="row mb-2">
        <div class="col-6"><label> ชื่อ </label></div>
        <div class="col">
            <input id="fname" name="fname" class="form-control">
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> สกุล </label></div>
        <div class="col">
            <input id="lname" name="lname" class="form-control">
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> วัน/เดือน/ปีเกิด </label></div>
        <div class="col">
            <input type="date" id="dateofbirth" name="dateofbirth" class="form-control">
            <div class="invalid-feedback">โปรดระบุวันเกิด</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> อายุ </label></div>
        <div class="col">
            <input id="age" name="age" class="form-control">
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> เพศ </label></div>
        <div class="col">
            <input type="radio" name="gender" value="ชาย"> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง
            <input type="radio" name="gender" value="ไม่ระบุ"> ไม่ระบุ
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> รูป </label></div>
        <div class="col">
            <input type="file" id="myfile" name="myfile" class="form-control">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> ที่อยู่ </label></div>
        <div class="col">
            <textarea id="address" name="address" class="form-control"></textarea>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> สีที่ชอบ </label></div>
        <div class="col">
            <select id="favoritecolor" name="favoritecolor" class="form-select">
                <option value="">เลือกสี</option>
                <option value="แดง">แดง</option>
                <option value="น้ำเงิน">น้ำเงิน</option>
                <option value="เขียว">เขียว</option>
            </select>
            <div class="invalid-feedback">โปรดเลือกสี</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> แนวเพลงที่ชอบ </label></div>
        <div class="col">
            <input type="radio" name="genre" value="เพื่อชีวิต"> เพื่อชีวิต
            <input type="radio" name="genre" value="ลูกทุ่ง"> ลูกทุ่ง
            <input type="radio" name="genre" value="ฮิปฮอป"> ฮิปฮอป
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <input id="consent_check" name="consent" value="1" type="checkbox">
            ยินยอมให้เก็บข้อมูล
        </div>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection

@push('scripts')
<script>
function clickMe(){
    let valid = true

    let fname = document.getElementById('fname')
    let lname = document.getElementById('lname')
    let age = document.getElementById('age')
    let address = document.getElementById('address')
    let color = document.getElementById('favoritecolor')

    if(fname.value === ""){
        fname.classList.add('is-invalid')
        valid = false
    }

    if(lname.value === ""){
        lname.classList.add('is-invalid')
        valid = false
    }

    if(age.value === ""){
        age.classList.add('is-invalid')
        valid = false
    }

    if(address.value === ""){
        address.classList.add('is-invalid')
        valid = false
    }

    if(color.value === ""){
        color.classList.add('is-invalid')
        valid = false
    }

    return valid
}
</script>
@endpush
