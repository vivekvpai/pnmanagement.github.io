<?php
	function get_std_count(){
		$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
		$db = mysqli_select_db($connection,"bjBEokAclb");
		$std_count = "";
		$query = "select count(*) as std_count from student";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$std_count = $row['std_count'];
		}
		return($std_count);
    }

    function get_tablets_count(){
		$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
		$db = mysqli_select_db($connection,"bjBEokAclb");
		$t_count = "";
		$query = "select count(*) as t_count from tablets";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$t_count = $row['t_count'];
		}
		return($t_count);
    }

    function get_t_issue_count(){
		$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
		$db = mysqli_select_db($connection,"bjBEokAclb");
		$ti_count = "";
		$query = "select count(*) as ti_count from t_issue";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$ti_count = $row['ti_count'];
		}
		return($ti_count);
    }

    function get_n_issue_count(){
		$connection = mysqli_connect("remotemysql.com","bjBEokAclb","q8e75oGyd0");
		$db = mysqli_select_db($connection,"bjBEokAclb");
		$tn_count = "";
		$query = "select count(*) as ni_count from nap_issue";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$ni_count = $row['ni_count'];
		}
		return($ni_count);
    }

?>