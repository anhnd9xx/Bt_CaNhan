<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>

	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<form action="saveeditproduct.php" method="post" class = "form-group">
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Mã hàng : </span><input type="text" name="code" class = "form-control" value="<?php echo $row['product_code']; ?>" />
<span>Tên hàng : </span><input type="text" name="bname" class = "form-control" value="<?php echo $row['product_name']; ?>" />
<span>Nhãn hiệu : </span><input type="text" name="dname" class = "form-control" value="<?php echo $row['description_name']; ?>" />
<span>Giá : </span><input type="text" name="cost" class = "form-control" value="<?php echo $row['cost']; ?>" <span>Price : </span>
<input type="text" name="price" class = "form-control" value="<?php echo $row['price']; ?>" />
<span>Nhà cung cấp : </span>
<select name="supplier" class = "form-control" >
	<option><?php echo $row['supplier']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM supliers");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['suplier_name']; ?></option>
	<?php
	}
	?>
</select>
<span>Loại : </span>
                            <select name="unit" class = "form-control" >
                            <option>Loại</option>
                            <option>DK 30cm</option>
                            <option>DK 21cm</option>
                            <option>10p</option>
                            <option>Bao</option>
<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Update" />
</div>
</form>
<?php
}
?>