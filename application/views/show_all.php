<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="th">
<head>
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css.css">
</head>
<body>

        <center><h1>ตารางข้อมูลศิลปิน</h1>
             <form action="manageuser/search_keyword" method="post">    
                    <c style="color:fff;">ค้นหาจาก</c>
                    <select name="type" size="1">
                    <option value="name">ชื่อศิลปิน</option>
                    <option value="record">ค่ายเพลง</option> 
                    </select> 
                    <input type="text" name="keyword"  id="name1"  >
                    <input type="submit" value="ค้นหา" class="submit">  
                    </form>
                    <br>
            <?php echo anchor("manageuser/add","เพิ่มข้อมูลศิลปิน")?>
        </center>
        <center>
        <br>
        <table style="width:80%" border="1" bordercolor="#9370DB"  align="center">
        <thead>
        <tr align="center" class="trbg">
        <td style="width">ลำดับ</td>
        <td style="width">ชื่อ</td>
        <td style="width">อัลบั้ม</td>       
        <td style="width">แนวเพลง</td>
        <td style="width">ค่ายเพลง</td>
        <td style="width">เครื่องมือ</td>
        </tr>
        </thead>
    <?php $num=0;
       foreach ($rs ->result() as $r) {
            $num++;
                echo "<tbody>";
                echo"<tr align='center'>";
                echo"<td align='center'>$num</td>";
                echo"<td>".$r ->name."</td>";
                echo"<td>".$r ->album."</td>";
                echo"<td>".$r ->type."</td>";
                echo"<td>".$r ->record."</td>";
                echo"<td>";
                echo anchor("manageuser/edit/".$r ->id,"แก้ไข")."&nbsp;&nbsp;&nbsp;&nbsp;";
                echo anchor("manageuser/delete/".$r ->id,"ลบ");
                echo"</td>";
                echo"</tr>";
            }
    ?>
</tbody>
</table>
</center>
</body>
</html>