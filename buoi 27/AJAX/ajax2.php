<?php
include_once "db.php";

if(isset($_POST["maquan"])){
    $maquanhuyen = $_POST["maquan"];

    $db = new db();
    $connection = $db->connection;

    $sql = "SELECT * FROM devvn_xaphuongthitran WHERE maqh = $maquanhuyen";

    $stmt = $connection->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $xaphuongthitrans = $stmt->fetchAll();

    $html_xaphuongthitrans = "";

    foreach($xaphuongthitrans as $xaphuongthitran){
        $xaphuongthitranID = $xaphuongthitran["xaid"];
        $xaphuongthitranName = $xaphuongthitran["name"];
        $html_xaphuongthitrans .= "<option value='$xaphuongthitranID'>$xaphuongthitranName</option>";
    }
    $jsonSuccess2 = ["status"=>1,"message" => "thành công","html_xaphuongthitrans" =>$html_xaphuongthitrans];
    $jsonSuccess2 = json_encode($jsonSuccess2);
    echo $jsonSuccess2;
    exit();
}else{
    $jsonError2 = ["status"=>0,"message" => "có lỗi xảy ra ở POST_maquan"];
    $jsonError2 = json_encode($jsonError2);
    echo $jsonError2;
    exit();
}