<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มใบสมัคร (Modern)</title>
    <style>
        
        
        :root {
            --primary-color: #00897b; 
            --secondary-color: #4db6ac; 
            --bg-color: #f5fafd; 
            --text-color: #333;
            --light-gray: #eceff1;
            --border-radius: 12px;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--bg-color); 
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            min-height: 100vh;
            padding: 40px 20px;
            margin: 0;
        }

        /* คอนเทนเนอร์ฟอร์มหลัก */
        .form-container {
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px rgba(0, 50, 100, 0.08); 
            border: 1px solid #e0e0e0;
        }

        /* หัวข้อ */
        h2 {
            text-align: center;
            color: var(--primary-color); 
            margin-bottom: 35px;
            font-size: 2.5em;
            font-weight: 600;
        }

        /* Grid Layout */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px 35px; 
            margin-bottom: 25px;
        }
        
        .full-width {
            grid-column: 1 / -1;
        }

        /* Form Group */
        .form-group {
            position: relative;
        }

        /* Label  */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
            font-size: 1em;
            transition: color 0.3s;
        }

        /* Input Styles */php atisan surver
        input[type="text"], 
        input[type="date"], 
        input[type="file"],
        textarea {
            width: 100%;
            padding: 14px 12px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 1em;
            background-color: #ffffff;
        }

        input[type="text"]:focus, 
        input[type="date"]:focus, 
        textarea:focus {
            border-color: var(--secondary-color); 
            box-shadow: 0 0 0 3px rgba(77, 182, 172, 0.3);
            outline: none;
        }
        
        textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Input File */
        input[type="file"] {
            padding: 12px;
            border: 1px dashed var(--secondary-color);
            background-color: var(--bg-color);
            cursor: pointer;
        }


        /* กลุ่ม Radio (เพศ) */
        .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
            padding-top: 5px; /* จัดช่องว่างเพื่อให้สอดคล้องกับ input type text */
        }
        .radio-group input[type="radio"] + label {
            margin-bottom: 0;
            font-weight: normal;
            display: inline-block;
        }

        /* Checkbox ยินยอม */
        .consent-group {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--light-gray);
        }
        .consent-group label {
            font-weight: 400;
            color: var(--text-color);
            display: inline-flex;
            align-items: center;
        }
        
        /* Checkbox style */
        input[type="checkbox"] {
            margin-right: 8px;
            transform: scale(1.2);
            accent-color: var(--primary-color); /* เปลี่ยนสี checkbox */
        }

        /* กลุ่มปุ่ม */
        .button-group {
            text-align: right;
            margin-top: 40px;
        }

        .button-group button {
            padding: 12px 30px;
            margin-left: 15px;
            border: none;
            border-radius: 50px; 
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        /* ปุ่มบันทึก (Submit) */
        .button-group button[type="submit"] {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 4px 15px rgba(0, 137, 123, 0.4);
        }
        .button-group button[type="submit"]:hover {
            background: #00695c; 
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 137, 123, 0.6);
        }

        /* ปุ่ม Reset */
        .button-group button[type="reset"] {
            background-color: #f7f7f7; 
            color: #757575;
            border: 1px solid #ccc;
        }
        .button-group button[type="reset"]:hover {
            background-color: #e0e0e0;
        }

        /* Responsive */
        @media (max-width: 650px) {
            .form-grid {
                grid-template-columns: 1fr; 
                gap: 20px;
            }
            .form-container {
                padding: 30px 20px;
            }
            h2 {
                font-size: 2em;
            }
            .button-group {
                text-align: center;
            }
            .button-group button {
                margin: 10px 5px;
            }
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>แบบฟอร์มใบสมัคร</h2>
    <form action="#" method="post" enctype="multipart/form-data">

        <div class="form-grid">
            
            <div class="form-group">
                <label for="fname">ชื่อ:</label>
                <input type="text" id="fname" name="fname" required placeholder="ชื่อจริง">
            </div>

            <div class="form-group">
                <label for="lname">สกุล:</label>
                <input type="text" id="lname" name="lname" required placeholder="นามสกุล">
            </div>

            <div class="form-group">
                <label for="dob">วันเดือนปีเกิด:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>เพศ:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">ชาย</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">หญิง</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">อื่นๆ</label>
                </div>
            </div>
        </div>

        <div class="form-group full-width">
            <label for="photo">รูป (แนบไฟล์ภาพ):</label>
            <input type="file" id="photo" name="photo" accept="image/*">
        </div>
        
        <div class="form-group full-width">
            <label for="address">ที่อยู่:</label>
            <textarea id="address" name="address" rows="4" required placeholder="กรอกที่อยู่ปัจจุบันให้ละเอียด"></textarea>
        </div>

        <div class="form-grid">
            <div class="form-group">
                <label for="favorite_color">สีที่ชอบ:</label>
                <input type="text" id="favorite_color" name="favorite_color" placeholder="เช่น สีน้ำเงิน, สีเขียว">
            </div>

            <div class="form-group">
                <label for="favorite_music">แนวเพลงที่ชอบ:</label>
                <input type="text" id="favorite_music" name="favorite_music" placeholder="เช่น R&B, Classical">
            </div>
        </div>

        <div class="consent-group full-width">
            <input type="checkbox" id="agree" name="agree" value="yes" required>
            <label for="agree">ข้าพเจ้าได้อ่านและยอมรับข้อกำหนดและเงื่อนไขทั้งหมด</label>
        </div>

        <div class="button-group full-width">
            <button type="reset">Reset</button>
            <button type="submit">บันทึก</button>
        </div>

    </form>
</div>

</body>
</html>