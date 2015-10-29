<!DOCTYPE html>
<html lang="th">
<head>
    <title>Edit ข้อมูลศิลปิน</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css.css">
<style>
<style>
body {
    font: 100%/30px 'DRdeco', helvetica, arial, sans-serif;
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
	<center><h1>แก้ไขข้อมูลศิลปิน <?php echo $rs['name'];?></h1></center>

		<?php echo form_open('manageuser/edit/'.$rs['id']); ?>
			<table border="1px" bordercolor="#9370DB">

				<tr>
					<td>ชื่อ</td>
					<td><input type="text" name="name" value="<?php echo $rs['name'];?>"></td>
				<tr>
				<tr>
					<td>อัลบั้ม</td>
					<td><input type="text" name="album" value="<?php echo $rs['album'];?>"></td>
				<tr>
				<tr>
					<td>แนวเพลง</td>
					<td><input type="text" name="type" value="<?php echo $rs['type'];?>"></td>
				<tr>
				<tr>
					<td>ค่ายเพลง</td>
					<td><input type="text" name="record" value="<?php echo $rs['record'];?>"></td>
				<tr>
				<tr>
					<td></td>
					<td>
						
						<input type="submit" name="btsave" value="บันทึก"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor("manageuser","ยกเลิก")?>
					</td>
				<tr>
			</table>
		<?php echo form_close(); ?>
</body>
</html>