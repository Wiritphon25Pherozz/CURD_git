
<center><h1>FORM</h1></center>
<center><table border="1">
    <th>id</th>
    <th>ชื่อ ผู้ส่ง</th>
    <th>นามสกุล</th>
    <th>บ้านเลขที่</th>
    <th>จังหวัด</th>
    <th>อำเภอ</th>
    <th>ตำบล</th>
    <th>ไปรษณีย์</th>
    <th>เบอร์</th>
    <th>วันที่ส่ง</th>
    <th>ลบ</th>
    <th>แก้ไข</th>
<?php
include('config.php');



//ไฟล์สำหรับแสดงผลข้อมูลในตาราง
$sql = "SELECT `id`, `name`, `lastn`, `honm`, `pro`, `aum`, `tum`, `pass`, `phonm`, `date`
 FROM `post_ft` WHERE 1";
$query = $dbcon->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0) {
    foreach($result as $res){
        echo "<tr>";
       echo "<td>" . $res->id . "</td>";
       echo "<td>" . $res->name . "</td>";
        echo "<td>" . $res->lastn . "</td>";
        echo "<td>" . $res->honm . "</td>";
        echo "<td>" . $res->pro . "</td>";
        echo "<td>" . $res->aum . "</td>";
        echo "<td>" . $res->tum . "</td>";
        echo "<td>" . $res->pass . "</td>";
        echo "<td>" . $res->phonm . "</td>";
        echo "<td>" . $res->date . "</td>";
        echo "<td>" . "<a href='delete.php?id=$res->id'>". "ลบ</a>" . "</td>";
        echo "<td>" . "<a href='form-up.php?id=$res->id'>" . "แก้ไข</a>" . "</td>";
        echo "</tr>";
    }
}
?>

<br>


</table></center>


<center><h1>TO</h1></center>


<center><table border="1">
    <th>ชื่อ ผู้รับ</th>
    <th>นามสกุล</th>
    <th>บ้านเลขที่</th>
    <th>จังหวัด</th>
    <th>อำเภอ</th>
    <th>ตำบล</th>
    <th>ไปรษณีย์</th>
    <th>เบอร์</th>
    <th>วันที่ส่ง</th>
<?php

//ไฟล์สำหรับแสดงผลข้อมูลในตาราง
$sql = "SELECT `name2`, `lastn2`, `honm2`, `pro2`, `aum2`, `tum2`, `pass2`, `phonm2`, `date2`
FROM `post_ft` WHERE 1";
$query = $dbcon->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0) {
    foreach($result as $res){
        echo "<tr>";
       //echo "<td>" . $res->id . "</td>";
       echo "<td>" . $res->name2 . "</td>";
        echo "<td>" . $res->lastn2 . "</td>";
        echo "<td>" . $res->honm2 . "</td>";
        echo "<td>" . $res->pro2 . "</td>";
        echo "<td>" . $res->aum2 . "</td>";
        echo "<td>" . $res->tum2 . "</td>";
        echo "<td>" . $res->pass2 . "</td>";
        echo "<td>" . $res->phonm2 . "</td>";
        echo "<td>" . $res->date2 . "</td>";
        echo "</tr>";
    }
}
?>
</table></center>
<br>
<center><a href="index.php">เพิ่มข้อมูลผู้ใช้</a></center>




