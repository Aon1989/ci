<!DOCTYPE html>
<html lang="th">
<head>
    <title>Add ข้อมูล</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css.css">
<style>
body {
    font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
    text-shadow: 0 1px 0 #fff;
}
table {
    font-size: 16px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 40%;
}   
td {

}
tr {
    text-align: center;    
}
.text {
    text-align: center;
}
</style>
</head>

<body>
	<br>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css.css">
	<center><h1>เพิ่มรายชื่อศิลปิน</h1></center>

		<?php echo form_open('manageuser/add'); ?>
			<table border="2px" bordercolor="#9370DB">
				<tr>
					<td>ชื่อ</td>
					<td><input type="text" name="name" value=""></td>
				<tr>
				<tr>
					<td>อัลบั้ม</td>
                     <td><input type="text" name="album" value=""></td>
                    
				<tr>
				<tr>
					<td>แนวเพลง</td>
					<td><input type="text" name="type" value=""></td>
				<tr>
				<tr>
					<td>ค่ายเพลง</td>
                     <td><input type="text" name="record" value=""></td>
                    
				<tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btsave" value="บันทึก"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor("manageuser","ยกเลิก")?>
					</td>
				<tr>
			</table>
		<?php echo form_close(); ?>
</body>
</html>