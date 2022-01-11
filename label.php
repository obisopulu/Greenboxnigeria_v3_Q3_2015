<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Label</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
<style type="text/css">
.artistname{ font-size:40px; color:#1F7044; padding-top:45px;}
.artistgenre{ padding-bottom:45px;}
a:active{text-decoration:none; color:#1F7044;}
.greenbox{ color:#1F7044; font-size:14px;}
td.one{padding-top:25px; padding-bottom:25px;}
.bottompad{padding:16px;background-color:#CCCCCC; width:145px;}
</style>
</head>

<body>
<?php
include('mainhead.inc');
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
$query = "SELECT * FROM labels WHERE labelName=\"{$_POST['label']}\"";

$result = mysql_query($query, $cxn)
	or die("result no work");
$row=(mysql_fetch_assoc($result));
extract($row);
?>
<center>

</center>

<table width="700px" align="center" border="0">
    <tr>
    	<td>
            <div class="artistname"><?php echo $labelName ?><br/></div>
            <div class="artistgenre"><?php echo $labelOwner ?></div>
            
        </td>
        <td align="right">
	<img align="middle" src="<?php echo $labelPic2?>" height="370" />
        </td>
    </tr>

  
</table>
<table>
    <tr>
    	<td>
        	
        </td>
    </tr>
</table>
<table align="center" width='700'>
	<tr>
    <td>
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Introduction:</b>&nbsp;&nbsp; $labelIntro." ?>
        </div>

    <br/>		
	
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo"<b> History:</b>&nbsp;&nbsp; $labelHistory." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Artists:</b>&nbsp;&nbsp; $labelArtists." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Producers:</b>&nbsp;&nbsp; $labelProducers." ?>

    </td>
    </tr>

</table>
<?php include('mainfooter.inc')?>

</body>
</html>