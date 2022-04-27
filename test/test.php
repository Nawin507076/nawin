<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="mystylebynew.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css"> 
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
	<!-- <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">	 -->
	<title>หมวกคัดสรรแอป</title>
<style>
</style>
</head>
<body>
<?php
$link = @mysqli_connect("localhost", "root", "12345678", "pmj1")
 			or die(mysqli_connect_error()."</body></html>");  
?>
<nav class="navbar navbar-expand-sm navbar-dark navbarr p-2">
	<a class="navbar-brand pr-2 p-0 logo" href="test.php">
		<img src="mystery.png " height="80"></a>
	<ul class="navbar-nav m-0">
		<li class="nav-item navname ml-3">
			<a class="nav-link active"href="test.php"><h5 class="text-center">choose</h5></a></li>
		<li class="nav-item navname ml-3">
			<a class="nav-link"href="#"><h5 class="text-center">Student List</h5></a></li>
		<li class="nav-item navname2 ml-3">
			<a class="nav-link active"href="test.php"><H3 class="text-center">แอปพลิเคชั่นหมวกคัดสรร</H3></a></li>
			<!-- <div class="navbarapp">
				<h5>แอปพลิเคชั่นหมวกคัดสรร</h5>
			</div> -->
			<form class="form-inline m-auto p-2 pl-5">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="ค้นหา">
				<div class="input-group-append">
					<button class="btn btn-success" type="submit">ตกลง</button>
				</div>
				</div>
			</form>
	</ul>
	<!-- </div> -->
</nav>
<!-- <?php
$link = @mysqli_connect("localhost", "root", "12345678", "pmj1")
 			or die(mysqli_connect_error()."</body></html>");

//ถ้าเป็นการ Pos
if(isset($_POST['id'])) {
	
	//นำข้อมูลจากตัวแปร tback เพื่อส่งข้อมูลจากฟอร์มกลับเข้ามา$_POST ที่เหลือมาเรียงต่อเป็นสตริงเดียวกัน โดยคั่นด้วย ', '
	$values = implode("', '", $_POST);  //ลักษณะผลลัพธ์ เช่น a', 'b', 'c', 'd
	
	//ปิดหัวท้ายด้วย ' เพื่อให้ครบคู่ ลักษณะผลลัพธ์จะเป็น 'a', 'b', 'c', 'd'
	$values = "'" . $values . "'";
	
	//นำข้อมูลนั้นมาสร้างเป็น SQL ในแบบคำสั่ง REPALCE
	$sql = "REPLACE INTO people1 VALUES($values)";
	$replace = mysqli_query($link, $sql);
	if(!$replace) {
		echo mysqli_error($link);
	}
	else {
		echo "<h3>ข้อมูลถูกบันทึกแล้ว</h3>";
		back();
	}
}
?> -->

<?php
if($_POST) {
	$name = $_POST['name'];
	$err = "";
	$name_pattern1 = "/^[ก,ข,ค,,,,,,,]{1}$/";
	$name_pattern2 = "/^[b]{1}$/i";
	$name_pattern3 = "/^[c]{1}$/i";
	$name_pattern4 = "/^[d]{1}$/i";

	if(preg_match($name_pattern1, $name)) {
		$err .= "<li><h3>$name</h3>บ้านหลังที่1</li>";
	}
	else if(preg_match($name_pattern2, $name)) {
		$err .= "<li><h3>$name</h3>บ้านหลังที่2</li>";
	}
	else if(preg_match($name_pattern3, $name)) {
		$err .= "<li><h3>$name</h3>บ้านหลังที่1</li>";
	}
	else if(preg_match($name_pattern4, $name)) {
		$err .= "<li><h3>$name</h3>บ้านหลังที่1</li>";
	}
	if($err != "") {
		echo "<div><h3></h3><ul>$err</ul></div>";
	}
}
?>
<form method="post" class="m-0 p-0">            
<div>
	<h3 class="toppic1 m-auto">แอปพลิเคชั่นเลือกบ้านให้นักเรียน</h3>
</div>
<div class="cover shadow-lg">
	<div class = "first">
	   <h5>ป้อนรายชื่อนักเรียน</h5>
	</div><br>
	<!-- <div class="form-row1 m-center">
		<div class="form-row1-s m-center">
		   <label>id</label><br>
		     <input type="text" name="id" value="<?php echo $data['id']; ?>" placeholder="ไม่ต้องระบุ" readonly>
        </div>
	</div> -->
	<div class="form-row1 m-center">
		<div class="form-row1-s m-center">
		   <label>รายชื่อนักเรียน</label><br>
              <input type="text" name="name"placeholder="  ชื่อ-นามสกุล(ไม่ต้องใส่คำนำหน้า)">
        </div>
	</div>
	<br>
	<div class="input-group-append">
		<button class="btn btn-warning submit m-auto" type="submit">ค้นหาบ้าน</button>
	</div>
	<div>
</div>
</form>
</body>
</html>