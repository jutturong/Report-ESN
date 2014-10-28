<?php
require_once("../config.php");

$b=trim($_GET['begin']);
//echo "<br>";
 $e=trim($_GET['end']);
//echo  "<br>";

function  explode_date($date) //explode วัน เดือน ปี ที่เป็น THAI
{
      if( !empty($date) )
       {
                $ex=explode('-',$date);
                return  $ex[2]-543;
       }
      else 
      {
      	   return '';
      }
}

if(!empty($b) &&  !empty($e)    )
{
/*
$str_call=" SELECT * FROM `04-monitoring` LEFT JOIN `tb_appendix1` ON `04-monitoring`.`HN` = `tb_appendix1`.`HN`  
WHERE  `04-monitoring`.`MonitoringDate` BETWEEN  '1400-11-1' AND   '1700-11-1'  ; ";
*/




##*---- check query วัน ในการ เลือกช่วง ของ DB

/*
$str_call =" SELECT * FROM `04-monitoring` LEFT JOIN `tb_appendix1` ON `04-monitoring`.`HN` = `tb_appendix1`.`HN` WHERE  `04-monitoring`.`MonitoringDate` BETWEEN  '$b' AND   '$e'  ; "; 
//echo  $str_call;
//echo "<br>";
*/

##--YEAR current
$y_cur=date('Y'); //วันที่ปัจจุบัน
//echo $y_cur;
$y_e=explode_date($e);
echo $y_e;
echo "<br>";
    if( $y_e  < $y_cur )//มีทั้งผู้ป่วยเก่า และผู้ป่วยใหม่ 
    {
    
    }
    elseif( $y_e  == $y_cur   ) //ไม่มีผู้ป่วยใหม่
    {
    	
    	
    }
    elseif( $y_e > $y_cur  )//การระบุข้อมูลผิดพลาด
    {
        ?>
                 <script type="text/javascript">
                                   alert('Check Date-Month-Year!!');
                                   window.close();
                  </script>
             
             
        <?php
    }  

}


?> 