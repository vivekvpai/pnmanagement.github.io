<?php
	$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
	$db = mysqli_select_db($connection,"bjBEokAclb");
	$query = "delete from t_issue where s_id = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student Deleted...");
	window.location.href = "show_issue_tablets.php";
</script>