<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">
        Result data All From wiht php 2026 (dti-06) <br>
    </h1>
    <hr>
        <?php  
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            ?>
            <div>
                <strong>ชื่อ-สกุล</strong>
                <?php echo empty($_GET['firstname']) ? "-" : $_GET['firstname']; ?>
            </div>
            <div>
                <strong>รหัสผ่าน</strong>
                <?php echo empty($_GET['password']) ? "-" : $_GET['password']; ?>
            </div>
            <div>
                <strong>อายุ</strong>
                <?php echo empty($_GET['age']) ? "-" : $_GET['age']; ?>
                </strong>ปี</strong>
            </div>
             <div>
                <strong>เพศ</strong>
                <?php echo empty($_GET['gender']) ? "-" : $_GET['gender']; ?>
            </div>
             <div>
                <strong>ภาษาโปรแกรมที่ชอบ</strong>
                <?php 
                echo isset($_GET['plang']) ? implode(", ", $_GET['plang']) :'';
                ?>
             </div>
             <div>
            <strong>อาหารที่ชอบ:</strong>
            <?php
                if(!isset($_GET['food1']) && !isset($_GET['food2']) && !isset($_GET['food3']) && !isset($_GET['food4'])){
                    echo "-";
                }
                echo isset($_GET['food1']) ? $_GET['food1'] : '';
                echo isset($_GET['food2']) ? $_GET['food2'] : '';
                echo isset($_GET['food3']) ? $_GET['food3'] : '';
                echo isset($_GET['food4']) ? $_GET['food4'] : '';
            ?>
        </div>

            <div>
                <strong>country</strong>
                <?php echo empty($_GET['country']) ? "-" : $_GET['country']; ?>
            </div>

            <div>
                <strong>วันเดือนปีเกิด</strong>
                <?php echo empty($_GET['bdate']) ? "-" : $_GET['bdate']; ?>
            </div>
            <div>
                <strong>ระดับความชอบ</strong>
                <?php echo ($_GET['likelevel']); ?>
            </div>

            <div>
                <strong>comment</strong>
                <?php echo empty($_GET['comment']) ? "-" : $_GET['comment']; ?>
            </div>

            <div>
                <strong>ระดับความชอบ</strong>
                <?php echo ($_GET['massage']); ?>
            </div>
        
        <?php    
        }else{
            echo "Error: Invalid request method.";
        } 
        ?>
</body>
</html>