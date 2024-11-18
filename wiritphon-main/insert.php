<?php

include('config.php');

if(isset($_POST['summit'])) {
    ///   9
    $name = $_POST['Na'];
    $lastN = $_POST['La'];
    $homeNum = $_POST['num'];
    $jung = $_POST['pro'];
    $aum = $_POST['aum'];
    $tum = $_POST['tum'];
    $pass = $_POST['pass'];
    $phone = $_POST['pho'];
    $date = $_POST['date'];
    
    //  9
    $name2 = $_POST['Na2'];
    $lastN2 = $_POST['La2'];
    $homeNum2 = $_POST['num2'];
    $jung2 = $_POST['pro2'];
    $aum2 = $_POST['aum2'];
    $tum2 = $_POST['tum2'];
    $pass2 = $_POST['pass2'];
    $phone2 = $_POST['pho2'];
    $date2 = $_POST['date2'];
    }
//ไฟล์สำหรับเพิ่มข้อมูลในตาราง
$query = $dbcon->prepare("INSERT INTO `post_ft`(`name`, `lastn`, `honm`, `pro`, `aum`, `tum`, `pass`, `phonm`, `date`, `name2`, `lastn2`, `honm2`, `pro2`, `aum2`, `tum2`, `pass2`, `phonm2`, `date2`) 
VALUES ('$name','$lastN','$homeNum','$jung','$aum','$tum','$pass','$phone','$date','$name2','$lastN2','$homeNum2','$jung2','$aum2','$tum2','$pass2','$phone2','$date2')");

$result = $query->execute();

if($result){
    echo"<script>
            alert('เพิ่มข้อมูลเรียบร้อย');
            window.location= 'select.php';
          </script>";
}  else{
    echo"<script>alert('มีบางอย่างผิดพลาด');</script>";
} 

//window.location= 'sclect.php';
?>