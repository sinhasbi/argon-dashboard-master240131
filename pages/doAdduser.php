<?php
require_once("../db_connect.php");


if(!isset($_POST["name"])){
    echo "請循正常管道進入";
    exit;
}

$account = trim($_POST["account"]);
$password = trim($_POST["password"]);
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$birthday = trim($_POST["birthday"]);
$phone = trim($_POST["phone"]);
$address = trim($_POST["address"]);
$creditcard = trim($_POST["creditcard"]);


if (empty($name) || empty($account) || empty($password) || empty($repassword) || empty($email) || empty($birthday) || empty($phone) || empty($address) || empty($creditcard)) {
    die("請輸入必填欄位");
}

if ($password != $repassword) {
    die("密碼輸入不一致");
}

$now=date('Y-m-d H:i:s');


$sql="INSERT INTO user (name, account,password,email,birthday,phone,address,creditcard,created_at,valid)
VALUES ('$name','$account','$password','$email','$birthday','$phone','$address''$creditcard','$now',1)";

// echo $sql;
// exit;

if($conn->query($sql)){
    echo "新增資料完成";
    // 確認可以抓到ID
    // $last_id=$conn->insert_id;
    // echo ", id為$last_id";
}else{
    echo "新增資料錯誤: " . $conn->error; 
}

$conn->close();

//會回到原本的頁面
// header("location:add-user.php");