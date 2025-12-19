@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')
            <form class="form-box">

    <div class="row mb-2">
        <div class="col-6"><label> ชื่อ </label></div>
        <div class="col">
            <input id="fname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label for="lname"> สกุล </label></div>
        <div class="col">
            <input id="lname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label for="dateofbirth"> วัน/เดือน/ปีเกิด </label></div>
        <div class="col">
            <input type="date" id="dateofbirth" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุวัน/เดือน/ปีเกิด</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <label for="age"> อายุ </label>
            </div>
        <div class="col">
            <input id="age" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <label> เพศ </label>
            </div>
        <div class="col">
            <input type="radio" id="man" name="gender" value="Man" class="form-check-input"> 
            <label for="man">ชาย</label>

            <input type="radio" id="woman" name="gender" value="Woman" class="form-check-input"> 
            <label for="woman">หญิง</label>

            <input type="radio" id="notprefer" name="gender" value="Notprefer" class="form-check-input"> 
            <label for="notprefer">ไม่ระบุ</label>

            <div class="invalid-feedback">
                โปรดระบุเพศ
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label for="myfile"> รูป </label></div>
        <div class="col">
            <input type="file" id="myfile" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกรูป</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label for="address"> ที่อยู่ </label></div>
        <div class="col">
            <textarea id="address" class="form-control" rows="2" cols="20"></textarea>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label for="favoritecolor"> สีที่ชอบ </label></div>
        <div class="col">
            <select id="favoritecolor" class="form-select">
                <option value="">เลือกสีที่ชอบ</option> 
                <option value="red">แดง</option>
                <option value="blue">น้ำเงิน</option>
                <option value="green">เขียว</option>
                <option value="yellow">เหลือง</option>
                <option value="black">ดำ</option>
            </select>
            <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6"><label> แนวเพลงที่ชอบ</label></div>
        <div class="col">
            <input type="radio" id="forlife" name="genre" value="forlife" class="form-check-input"> 
            <label for="forlife"> เพื่อชีวิต </label>

            <input type="radio" id="country" name="genre" value="country" class="form-check-input"> 
            <label for="country"> ลูกทุ่ง </label>

            <input type="radio" id="hiphop" name="genre" value="hiphop" class="form-check-input"> 
            <label for="hiphop"> ฮิปฮอป </label>

            <div class="invalid-feedback">โปรดระบุแนวเพลงที่ชอบ</div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-6">
            <input id="consent_check" type="checkbox" class="form-check-input">
            <label for="consent_check"> ยินยอมให้เก็บข้อมูล </label>
        </div>
    </div>

    <div class="row mb-2">
        <div style="text-align: left;">
            <button class="btn btn-secondary" type="reset">
                Reset
            </button>
        </div>
    </div>

    <div style="text-align: center;" class="mt-3">
        <button class="btn btn-primary" type="button" onclick="clickMe()">Submit</button>
    </div>
</form>
@endsection


@push('scripts')
    <script>
        let clickMe = function (){
            
            // 1. ตรวจสอบชื่อ (Name)
            let fname = document.getElementById('fname')
            if(fname.value == ""){
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }

            // 2. ตรวจสอบนามสกุล (Surname)
            let lname = document.getElementById('lname')
            if(lname.value == ""){
                lname.classList.remove('is-valid')
                lname.classList.add('is-invalid')
            }else{
                lname.classList.remove('is-invalid')
                lname.classList.add('is-valid')
            }

            // 3. ตรวจสอบวันเดือนปีเกิด (Date of Birth)
            let dateofbirth = document.getElementById('dateofbirth')
            if(dateofbirth.value == ""){
                dateofbirth.classList.remove('is-valid')
                dateofbirth.classList.add('is-invalid')
            }else{
                dateofbirth.classList.remove('is-invalid')
                dateofbirth.classList.add('is-valid')
            }

            // 4. ตรวจสอบอายุ (Age)
            let age = document.getElementById('age')
            if(age.value == ""){
                age.classList.remove('is-valid')
                age.classList.add('is-invalid')
            }else{
                age.classList.remove('is-invalid')
                age.classList.add('is-valid')
            }

            // 5. ตรวจสอบเพศ (Gender - Radio Button)
            let genders = document.getElementsByName('gender')
            let genderChecked = false
            // เช็คว่ามีการเลือกตัวใดตัวหนึ่งหรือไม่
            for(let i=0; i < genders.length; i++){
                if(genders[i].checked){
                    genderChecked = true
                    break
                }
            }
            // วนลูปเพื่อแสดงผล Valid/Invalid ให้ครบทุกตัวเลือก
            for(let i=0; i < genders.length; i++){
                if(genderChecked){
                    genders[i].classList.remove('is-invalid')
                    genders[i].classList.add('is-valid')
                }else{
                    genders[i].classList.remove('is-valid')
                    genders[i].classList.add('is-invalid')
                }
            }

            // 6. ตรวจสอบรูปภาพ (File)
            let myfile = document.getElementById('myfile')
            if(myfile.value == ""){
                myfile.classList.remove('is-valid')
                myfile.classList.add('is-invalid')
            }else{
                myfile.classList.remove('is-invalid')
                myfile.classList.add('is-valid')
            }

            // 7. ตรวจสอบที่อยู่ (Address)
            let address = document.getElementById('address')
            if(address.value == ""){
                address.classList.remove('is-valid')
                address.classList.add('is-invalid')
            }else{
                address.classList.remove('is-invalid')
                address.classList.add('is-valid')
            }

            // 8. ตรวจสอบสีที่ชอบ (Select Option)
            let favoritecolor = document.getElementById('favoritecolor')
            if(favoritecolor.value == ""){
                favoritecolor.classList.remove('is-valid')
                favoritecolor.classList.add('is-invalid')
            }else{
                favoritecolor.classList.remove('is-invalid')
                favoritecolor.classList.add('is-valid')
            }

            // 9. ตรวจสอบแนวเพลง (Genre - Radio Button)
            let genres = document.getElementsByName('genre')
            let genreChecked = false
            for(let i=0; i < genres.length; i++){
                if(genres[i].checked){
                    genreChecked = true
                    break
                }
            }
            for(let i=0; i < genres.length; i++){
                if(genreChecked){
                    genres[i].classList.remove('is-invalid')
                    genres[i].classList.add('is-valid')
                }else{
                    genres[i].classList.remove('is-valid')
                    genres[i].classList.add('is-invalid')
                }
            }

            // 10. ตรวจสอบการยินยอม (Checkbox)
            let consent = document.getElementById('consent_check')
            if(consent.checked){
                consent.classList.remove('is-invalid')
                consent.classList.add('is-valid')
            }else{
                consent.classList.remove('is-valid')
                consent.classList.add('is-invalid')
            }
        }

        // ส่วนทดสอบอื่นๆ ของคุณ (คงไว้เหมือนเดิม)
        let myfunc = (callback)=>{
            callback("in Callback")
        }

        callMe = (param) => {
            console.log(param)
        }

        myfunc(callMe)

        let myvar1 =  1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1 +"\n\n\n\nทดสอบ")
        console.log(1 === '1')
    </script>
@endpush