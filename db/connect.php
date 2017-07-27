<!doctype html>

<!-- CONNECT.PHP -->

<?php
	$hostname = "localhost";
	$userid = "root";	// DB 접속 ID
	$userpw = "autoset";	// DB 접속 PW
	$dbname = "db1";	// DB Schema 이름(없을땐 모든 스키마)

	$con = mysqli_connect($hostname, $userid, $userpw, $dbname) or die("DB 접속 실패.");
?>