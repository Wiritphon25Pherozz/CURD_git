<?php
include('config.php');

// รับค่าจากฟอร์ม form-up.php
if(isset($_POST['summit'])) {
    $id = $_POST['id'];
    $name = $_POST['Na'];
    $lastN = $_POST['La'];
    $homeNum = $_POST['num'];
    $jung = $_POST['pro'];
    $aum = $_POST['aum'];
    $tum = $_POST['tum'];
    $pass = $_POST['pass'];
    $phone = $_POST['pho'];
    $date = $_POST['date'];
    
    // ข้อมูลผู้รับ
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

    // คำสั่ง SQL สำหรับอัพเดท
    $sql = "UPDATE `post_ft` SET `name`='$name',`lastn`='$lastN',`honm`='$homeNum',`pro`='$jung',`aum`='$aum',`tum`='$tum',`pass`='$pass',`phonm`='$phone',`date`='$date',
    `name2`='$name2',`lastn2`='$lastN2',`honm2`='$homeNum2',`pro2`='$jung2',`aum2`='$aum2',`tum2`='$tum2',`pass2`='$pass2',`phonm2`='$phone2',`date2`='$date2'
     WHERE `id`='$id'";

    // เตรียม statement
    $query = $dbcon->prepare($sql);


    // ประมวลผล
    $result = $query->execute();

    // ตรวจสอบผลลัพธ์
    if($result){
        echo "<script>
                alert('อัพเดทข้อมูลสำเร็จ');
                window.location = 'select.php';
              </script>";
    } else {
        echo "<script>
                alert('มีข้อผิดพลาดในการอัพเดท');
                window.location = 'select.php';
              </script>";
    }
?>