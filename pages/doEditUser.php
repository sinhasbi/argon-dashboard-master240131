<?php
require_once("../db_connect.php");

$id=$_POST["editId"];
$name = trim($_POST["editName"]);
$email = trim($_POST["editEmail"]);
$birthday = trim($_POST["editBirthday"]);
$phone = trim($_POST["editPhone"]);
$address = trim($_POST["editAddress"]);
$creditnumber = trim($_POST["editCreditNumber"]);

$sql="UPDATE user SET name='$name',email='$email',birthday='$birthday',phone='$phone',address='$address',credit_number='$creditnumber' WHERE id=$id";

if ($conn->query($sql)===TRUE) {
    // echo "資料表 users 更新完成";
} else {
    echo "更新資料表錯誤: " . $conn->error;

};

header("location: ../pages/tables.php");

?>