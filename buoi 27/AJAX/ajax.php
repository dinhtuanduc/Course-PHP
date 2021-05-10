<?php
//Lấy ra đc dữ liệu gửi đến ajax.php
include_once "db.php";

if(isset($_POST["matinh"])){
    $matinh = $_POST["matinh"];

    $db = new db();
    $connection = $db->connection;

    $sql = "SELECT * FROM devvn_quanhuyen WHERE matp = $matinh";

    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $districts = $stmt->fetchAll();

    $html_districts = "";
    foreach($districts as $district){
        $districtID = $district["maqh"];
        $districtName = $district["name"];
        $html_districts .= "<option value='$districtID'>$districtName</option>";
    }
    $jsonSuccess1 = ["status"=>1,"message" => "thành công","html_districts" =>$html_districts];
    $jsonSuccess1 = json_encode($jsonSuccess1);
    echo $jsonSuccess1;
    exit();
}else{
    $jsonError1 = ["status"=>0,"message" => "có lỗi xảy ra"];
    $jsonError1 = json_encode($jsonError1);
    echo $jsonError1;
    exit();
}