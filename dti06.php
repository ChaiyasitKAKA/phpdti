<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            padding: 40px;
            font-family: sans-serif; 
        }
        .form-group {
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        
        input[type='text'], input[type='password'], input[type='number'],select,textarea {
            width: 100%; 
            padding: 5px;
            box-sizing: border-box; 
        }
        label {
            display: inline-block;
            margin-bottom: 5px;
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }   
        input[type="reset"] {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">PHP all from 2026</h1>
    <form action="dti06_result.php" method="GET" enctype="">
        
        <div class="form-group">
            <label for="fname">ชื่อ</label>
            <input type="text" id="fname" name="firstname" required>
        </div>

        <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number" id="age" name="age">
        </div>

        <div class="form-group">
            <label for="gender">เพศ</label><br>
            <label><input type="radio" name="gender" value="ชาย"> ชาย</label>
            <label><input type="radio" name="gender" value="หญิง"> หญิง</label>
            <label><input type="radio" name="gender" value="อื่นๆ"> อื่นๆ</label>
        </div>

        <div class="form-group">
            <label for="plang">ภาษาโปรแกรมที่ชอบ </label><br>
            <label><input type="checkbox" name="plang[]" value="C"> C</label>
            <label><input type="checkbox" name="plang[]" value="Java"> Java</label>
            <label><input type="checkbox" name="plang[]" value="Python"> Python</label>
            <label><input type="checkbox" name="plang[]" value="PHP"> PHP</label>
        </div>

        <div class="form-group">
        <label for="food">อาหารที่ชอบ</label>
        <input type="checkbox" name="food1" value="KFC">KFC
        <input type="checkbox" name="food2" value="Pizza">Pizza
        <input type="checkbox" name="food3" value="Donut">Donut
        <input type="checkbox" name="food4" value="Burger">Burger
    </div>

        <div class="form-group">
            <label for="country">ประเทศ </label>
            <select id="country" name="country">
                <option value="">--กรุณาเลือกประเทศ--</option>
                <option value="thailand">Thailand</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="japan">Japan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="bdate">วันเกิด </label>
            <input type="date" id="bdate" name="bdate">
        </div>

        <div class="form-group">
            <label for="likelevel">ระดับความชอบ </label>
            0<input type="range" id="likelevel" name="likelevel" min="0" max="100">100
        </div>

        <div class="form-group">
            <label for="comment">ความคิดเห็นเพิ่มเติม</label>
            <textarea name="comment" id="comment"  rows="5"></textarea>
        </div>
        <!--input : hidden-->
        <input type="hidden" name="massage" value="I LUV TIKTOK">
        <div class="form-group">
            <input type="submit" value="ตกลง">
            <input type="reset" value="ยกเลิก">

        </div>

        <div class="form-group">
            <label for="province">จังหวัด </label>
            <select id="province" name="province" size="4">
                <option value="bangkok">กรุงเทพฯ</option>
                <option value="chonburi">ชลบุรี</option>
                <option value="pattaya">พัทยา</option>
                <option value="phuket">ภูเก็ต</option>
                <option value="surin">สุรินทร์</option>
                <option value="lao">เลย</option>

            </select>
        </div>
    </form>
</body>
</html>