<?php
require_once("../config.php");

$b=trim($_GET['begin']);
//echo "<br>";
$e=trim($_GET['end']);
//echo  "<br>";



if(!empty($b) &&  !empty($e)    )
{
/*
$str_call=" SELECT * FROM `04-monitoring` LEFT JOIN `tb_appendix1` ON `04-monitoring`.`HN` = `tb_appendix1`.`HN`  
WHERE  `04-monitoring`.`MonitoringDate` BETWEEN  '1400-11-1' AND   '1700-11-1'  ; ";
*/

##--YEAR current
$y_cur=date('Y'); //วันที่ปัจจุบัน
echo $y_cur;
echo "<br>";

$str_call =" SELECT * FROM `04-monitoring` LEFT JOIN `tb_appendix1` ON `04-monitoring`.`HN` = `tb_appendix1`.`HN` WHERE  `04-monitoring`.`MonitoringDate` BETWEEN  '$b' AND   '$e'  ; "; 


//echo  $str_call;
//echo "<br>";

    

}


?> 