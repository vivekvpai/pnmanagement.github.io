<?php
	$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
	$db = mysqli_select_db($connection,"bjBEokAclb");
	$query = "delete from tablets where t_name = '$_GET[tn]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Tablet Deleted...");
	window.location.href = "show_tablets.php";
</script>