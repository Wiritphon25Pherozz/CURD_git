<?php
include('config.php');

//ไฟล์สำหรับลบข้อมูลในตาราง
$id = $_GET['id']; //รับค่า id ที่ต้องการลบ
$sql = "DELETE FROM post_ft WHERE id = :id";   
$query = $dbcon->prepare($sql);

$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
if($query->rowCount() > 0){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');
    window.location= 'select.php';
    </script>";
} else{
    echo "<script>alert('มีบางอย่างผิดพลาด');
    window.location= 'select.php';
    </script>";   
}
?>
