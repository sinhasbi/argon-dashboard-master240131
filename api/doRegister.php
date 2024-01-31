<?php
require_once("../db_connect.php");

if (!isset($_POST["account"])) {
    die("請循正常管道進入此頁面");
}

$name = trim($_POST["name"]);
$account = trim($_POST["account"]);
$password = trim($_POST["password"]);
$repassword = trim($_POST["repassword"]);
$email = trim($_POST["email"]);
$birthday = trim($_POST["birthday"]);
$phone = trim($_POST["phone"]);
$address = trim($_POST["address"]);
$creditcard = trim($_POST["creditcard"]);
$image = trim($_POST["image"]);



if (empty($name) || empty($account) || empty($password) || empty($email) || empty($birthday) || empty($phone) || empty($address) || empty($creditcard) || empty($image)) {
    die("請輸入必填欄位");
}

if ($password != $repassword) {
    die("密碼輸入不一致");
}

$checkAccount = "SELECT * FROM user WHERE account='$account'";
$result = $conn->query($checkAccount);
$accountExist = $result->num_rows;
//0的話存在
// echo $accountExist;
//不等於0代表帳號已經有了
// if ($accountExist != 0) {
//     die("帳號已存在");
// }

$now = date('Y-m-d H:i:s');
//簡單的加密方法
// $password = md5($password);

$sql="INSERT INTO user (name, account,password,email,birthday,phone,address,credit_number,created_at,valid,img)
VALUES ('$name','$account','$password','$email','$birthday','$phone','$address','$creditcard','$now',1,'$image')";
// echo $sql;

if ($conn->query($sql)) {
    echo json_encode(["status" => 1, "message" => "新增資料完成"]);

} else {
    echo json_encode(["status" => 0, "message" => "新增資料錯誤: " . $conn->error]);
}
$conn->close();
// header("location: ../pages/register.php");
?>