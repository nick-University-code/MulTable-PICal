<html>
    <head>
        <title>九九乘法表</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div style="color:white; background-color:#8DAA9D; height:20%;   padding:50px;">
            <a  align="left" href="https://p9056.isrcttu.net/20200330" ></a>  
             <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
                 <b>20200330</b></font>       
                  </h1> 
                 <h2 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="4" >
                  
                    </font></h2>  
            <h3 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="5" >
                 <b>九九乘法表</b></font>       
                  </h3> 
        <h4 align="center">
        <form action="https://p9056.isrcttu.net/20200330/hw.php" method="post" style="font-size:16px; line-height:150%;">
         <select name="choose">
          <option >數字選擇</option>
          <option value="1" >1</option>
          <option value="2" >2</option>
          <option value="3" >3</option>
          <option value="4" >4</option>
          <option value="5" >5</option>
          <option value="6" >6</option>
          <option value="7" >7</option>
          <option value="8" >8</option>
          <option value="9" >9</option>
        </select>
             <input type="submit" value="送出"  name="check" >
       </form>
            </h4>
      
       <br><br>
      
       </div>
    </body>
</html>

<?php
$check=filter_input(INPUT_POST, 'check');
$choose=filter_input(INPUT_POST, 'choose');

?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="color:white; text-align:center; background-color:#8DAA9D; padding:50px;">
             <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
                 <td>
                 <?php 
                 if($check=="送出" && $choose!=0){
                 echo "您選擇的數字是".$choose; echo '<p>';
                 echo $choose."*"."1"."=".$choose*1; echo '<p>'; 
                 echo $choose."*"."2"."=".$choose*2; echo '<p>';  
                 echo $choose."*"."3"."=".$choose*3; echo '<p>'; 
                 echo $choose."*"."4"."=".$choose*4; echo '<p>';   
                 echo $choose."*"."5"."=".$choose*5; echo '<p>'; 
                 echo $choose."*"."6"."=".$choose*6; echo '<p>';  
                 echo $choose."*"."7"."=".$choose*7; echo '<p>';  
                 echo $choose."*"."8"."=".$choose*8; echo '<p>';   
                 echo $choose."*"."9"."=".$choose*9; echo '<p>';   
                 }
                 ?>
 
                 </font>       
                  </h1> 
          </div>
    </body>
</html>
