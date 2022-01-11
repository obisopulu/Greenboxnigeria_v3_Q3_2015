<?php 
if ($_POST['add']=='Music'){header("Location: addmusicprocessor.php");}
if ($_POST['add']=='Person'){header("Location: addpersonprocessor.php");}
if ($_POST['add']=='Label'){header("Location: addlabelprocessor.php");}
if ($_POST['add']=='Activity'){header("Location: addactivityprocessor.php");}

if ($_POST['delete']=='Music'){header("Location: deletemusicprocessor.php");}
if ($_POST['delete']=='Person'){header("Location: deletepersonprocessor.php");}
if ($_POST['delete']=='Label'){header("Location: deletelabelprocessor.php");}
if ($_POST['delete']=='Activity'){header("Location: deleteactivityprocessor.php");}
?>
