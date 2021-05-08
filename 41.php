<?php 
session_start();
function distance($x, $y){
    return (sqrt($x*$x+$y*$y));
}

function IsInside($x, $y){
    $Inside=FALSE;
    if(distance($x,$y)<=1)$Inside=TRUE;
    return $Inside;
}
if(!isset($_SESSION['InCount']))$_SESSION['InCount']=0;
if(!isset($_SESSION['LCount']))$_SESSION['LCount']=0;
$InsideCount=0;
$LoopCount = 10000;
for($i=0;$i<$LoopCount;$i++){
    $x=  mt_rand(0, 1000000)/1000000;
    $y=  mt_rand(0, 1000000)/1000000;
    if(IsInside($x, $y))$InsideCount++;
}
$InsideCount += $_SESSION['InCount'];
$LoopCount += $_SESSION['LCount'];
$_SESSION['InCount'] = $InsideCount;
$_SESSION['LCount'] = $LoopCount;
$Area =$InsideCount /$LoopCount;
$PI =$Area *4;
?>
<html>
    <head>
        <title>PI的四則運算</title>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Refresh" name="viewport" content="5">
    </head>
    <body>
        <div style="color:white; background-color:#8DAA9D; height:100%;   padding:50px;">
            <a  align="left" href="https://p9056.isrcttu.net/20200330" ></a>  
             <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
                 <b>20200330-PI的四則運算</b></font>       
                  </h1> 
                 <h2 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="4" >
                     
                    </font></h2>  
            <h3 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
                 <b>計算圓周率之值</b></font>       
                  </h3> 
        <h4 align="center">
            <?php
                echo "面積 = ".$Area;
                echo "<br/>"."PI ~ ".$Area*4;
            ?>
            </h4>
      
       <br><br>
       <input type ="button" onclick="javascript:location.href='https://p9056.isrcttu.net/20200330/hw1.php'" value="刷新">
       </div>
    </body>
</html>