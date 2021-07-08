<?php
session_start();i

if($_SESSION['user_id'] == session_id())
    {
	$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
	$db = mysqli_select_db($connection,"bjBEokAclb");
	$query = "delete from student where s_id = '$_GET[id]'";
	$query_run = mysqli_query($connection,$query);
    }
    else
        {
            header("location:../index.php");
        } 
?>
<script type="text/javascript">
	alert("Student Deleted...");
	window.location.href = "show_std.php";
</script>