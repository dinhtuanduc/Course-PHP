<?php
    function taoHCN($a,$b){
        $hcn = ["r" => $a, "h"=>$b ];
        return $hcn;
    }
    function ChuviHCN($a,$b){
        $hcn = ($a+$b)*2;
        return $hcn;
    }
    function DientichHCN($a,$b){
        $hcn = $a*$b;
        return $hcn;
    }
    $hcn1=taoHCN(5,2);
    $chuvi = ChuviHCN($hcn1["r"],$hcn1["h"]);
    $dientich = DientichHCN($hcn1["r"],$hcn1["h"]);

    echo "<br>Chu vi: ".$chuvi;
    echo "<br>Dien tich: ".$dientich;

