<?php
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin -Activity</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="img/favi.png" rel="icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="../index.php"><<  Go Frontyard  <<</a><br/><a href="backyard.php"><<  Go Dashboard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="../img/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        delete Activity
                                    </td>
	
</tr>
</table>
<?php 
if ($_POST['activityName'] == '' or $_POST['activityOwner'] == '' or $_POST['activityArtists'] == '') 
	{?>
		<form method="POST" action="deleteactivityprocessor.php">
		<table align="center" bgcolor="#444"><tr>
		<td style="padding:5px; font-size:12px;">Activity Name(50)<br />
		<div  style="float:left;"><input size="10" required="required" type='text' name='activityName' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">Activity Info(50)<br/>
		<div  style="float:left;"><input size="10" required="required" type='text' name='activityInfo' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">Activity Date(09(M)/15(D)/2015(Y))<br/>
		<div  style="float:left;"><input size="10" required="required" type='text' name='activityDate' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">Extract<br/>
		<div  style="float:left;"><input name="extract" type='submit' value="Extract" style="color:#444; background-color:#CCC; border:none; padding:15px 15px"></div>
		</td>
		</tr></table>
		</form>
<?php 
	}
else
	{
		$query = "SELECT * FROM activities WHERE activityName LIKE '%".$_POST['activityName']."%' OR activityInfo LIKE '%".$_POST['activityInfo']."%' OR activityDate LIKE '%".$_POST['activityDate']."%' LIMIT 20";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 1)
	{
		echo"<table align='center' bgcolor='#444'>
		<tr  bgcolor='#555' height='11px'>
        <td width='' style='padding:5px 5p;'>Activity Name</td>
        <td width='auto' style='padding:5px 5p;'>Activity Info</td>
        <td style='padding:5px 5p;'>Activity Date</td>
		<td style='padding:5px 5p; background-color:#733;'>Delete</td>
		</tr>";
	$r = 1;
	?><form action="badelete.php" method="post"><?php
	while($row = mysql_fetch_array($result))
		{
			extract($row);
			$c= $r%2;?>
	 		<tr bgcolor='<?php if ($c==0) echo "#666"; else echo "#777" ?>'>
    	    <td style="padding:0px 5px;"><?php echo trim($activityName)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($activityInfo)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($activityDate)?></td>
	        <td style='padding:5px 5p; background-color:#733;'><input type='hidden' name='theID' value='<?php echo $activityID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/><input type="submit" name="" value="" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/></td>
	        </tr>
	        <?php $r++; } ?>
	        </table><form>
			<?php 
		}
	else
		{
			echo '<center>you search well nw bros</center>';
			echo"<form method='POST' action='deleteactivityprocessor.php'>
		<table align='center' bgcolor='#444'><tr>
		<td style='padding:5px; font-size:12px;'>activity Name(50)<br />
		<div  style='float:left;'><input size='10' required='required' type='text' name='activityName' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>activity Info(50)<br/>
		<div  style='float:left;'><input size='10' required='required' type='text' name='activityInfo' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>activity Date(100)<br/>
		<div  style='float:left;'><input size='10' required='required' type='text' name='activityDate' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>Extract<br/>
		<div  style='float:left;'><input name='extract' type='submit' value='Extract' style='color:#444; background-color:#CCC; border:none; padding:15px 15px'></div>
		</td>
		</tr></table>
		</form>";
		}

	}
?>