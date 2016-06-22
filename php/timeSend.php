<?php
// マルチバイト対応
date_default_timezone_set('Asia/Tokyo');

//------------------------------------
// @calling : main
// @purpose : 
// @date
// @argment
// @return
//------------------------------------
	$ret_base= "000000000000000000000000";
	$sHEAD ="res=";
	//$respose="";
    $res2="";
    if(isset($_GET["mc_id"])){
		$sHH = date("H");
		$sMM = date("i");
		$res2=$sHH . $sMM;
		echo $sHEAD .$res2;
    }else{
		echo $sHEAD .$ret_base;
    }
?>