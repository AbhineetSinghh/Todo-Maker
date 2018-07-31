<?php
    include_once 'libs/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Todo Maker</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.jpg" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/custom-js.js"></script>
</head>
<body>

    <div id="preloader">
        <div id="theImage">
            <img src="images/box.gif" id="preloader_image" alt="loader">
        </div>
    </div>

    <div id="wrapper" class="toggled" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                       <i class="fa fa-home"></i> TODO MAKER
                    </a>
                </li>
                <li>
                    <a href="index.php?label=inbox" ><i class="fa fa-inbox"></i> Inbox</a>
                </li>
                <li>
                    <a href="index.php?label=Read later"><i class="fa fa-book"></i> Read Later</a>
                </li>
                <li>
                    <a href="index.php?label=Important"><i class="fa fa-star"></i> Important</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->