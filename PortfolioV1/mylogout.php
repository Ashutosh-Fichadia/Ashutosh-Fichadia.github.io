<?php

       
	session_start();
        include("db.php");
        $qry="delete from log where Username ='".$_SESSION["uname"]."'";
        mysqli_query($conn,$qry);
	setcookie("uname",$unm,time()-3600,"/");
	session_destroy();
           $URL="http://af016.c1.biz/index.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

     
?>