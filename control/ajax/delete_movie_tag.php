<?php
session_start();
if (isset($_SESSION['admin_user_id']) && $_SESSION['admin_user_id'] && isset($_SESSION['admin_username'])){
	extract($_POST);
	if (isset($tagid) && $tagid){
		require_once("../../vars.php");
	   	require_once("../../includes/movie.class.php");
	   	$movie = new Movie();
	   	$movie->deleteTag($tagid);
	   	print("1");
	}
}
?>