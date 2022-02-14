<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("nav.php")?>
<div class="container"><img src="รูปภาพ/logo/banner.jpg" width="100%" alt=""/></div>
	
	
<div class="container mt-5 mb-5">
<div class="row mb-3">
		<div class="card col-md-12 shadow">
		  <form>
			  <div class="form-group mb-2">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			    <small id="email" class="form-text text-muted">เราจะไม่ส่งข้อมูลอีเมลให้กับคนอื่นหรอก อิอิ</small> </div>
			  <div class="form-group mb-2">
			    <label for="exampleInputEmail1">ชื่อสถานที่</label>
			    <input type="name_travel" class="form-control" id="nameTravel" placeholder="Enter Name Address">
			  </div>
			  <div class="form-group mb-2">
			    <label for="exampleInputFullname">Full Name</label>
			    <input type="fname" class="form-control" id="fname" placeholder="enter your full name">
		    </div>
			  <div class="form-group mb-2">
			  	<label for="image">เลือกรูปภาพ</label>
				 <input class="form-control" accept="image/jpeg" type="file" id="image" name="image" >
			  </div>
			  <div class="form-group mb-2">
			    <label for="exampleInputMessage">คำอธิบาย</label>
			    <input type="fname" class="form-control" id="message" placeholder="type message your think">
		    </div>
			  <button type="submit" class="btn btn-primary">ส่ง</button>
		  </form>
    </div>
</div>

	
	<div class="container mt-5 mb-5">
<table width="100%" border="1" class="table table-primary">
  <tbody>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">ชื่อสถานที่&nbsp;</th>
      <th scope="col">รูปภาพ&nbsp;</th>
      <th scope="col">รายระเอียด&nbsp;</th>
      <th scope="col">actions&nbsp;</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
		 <a href="edit_travel.php" type="button" class="btn btn-warning">แก้ไข</a>
         <button type="button" class="btn btn-danger">ลบ</button></td>
    </tr>
  </tbody>
</table>

	</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>