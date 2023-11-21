<?php
session_start();
$_SESSION["showAdd"]=false;
header("location:../add/addGroup.php");
