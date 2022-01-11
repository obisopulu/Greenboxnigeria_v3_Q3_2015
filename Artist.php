<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Person</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon">
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
$Y=date('Y');
include('mainhead.inc');
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
$query = "SELECT * FROM persons WHERE personStageName=\"{$_POST['person']}\"";

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
            <div class="artistname"><?php echo $personStageName ?><br/></div>
            <div class="artistgenre"><?php echo $personProfession ?></div>
            
        </td>
        <td align="right">
	<img align="middle" src="<?php echo $personPic2?>" width="170" height="370" />
    <img align="middle" src="<?php echo $personPic3?>" width="170" height="370" />
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
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo "Birth name: $personBirthName." ?>
        </div>

    <br/>		
	
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo"Birthday: $personBirthDay." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php $Age = $Y-$personBirthYear; echo "Age: $Age years." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo "State of origin: $personPlaceOfOrigin." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo "Genre: $personGenre." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php $careerLenght = $Y-$personCareerStartYear; echo "Career lenght: $careerLenght years." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo "Label: $personLabel."	 ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD;">
        	<?php echo "Associated Acts: $personAssociatedActs." ?>
        </div>
	<br/>
    <div style="padding:10px; background-color:#DDD; text-transform:none;"><?php echo $personLifeStory?></div>
    </td>
    </tr>

</table>
<table width="100%" height="200px" bgcolor="#CCC"><tr><td align="left" style="font-size:40px; padding:20px"><?php echo $personStageName ?></td></tr></table>
<?php include('mainfooter.inc')?>

</body>
</html>