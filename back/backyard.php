<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.png" rel="icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<?php 
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);

$sqlactivities = mysql_query("SELECT * FROM activities");
$countactivities = mysql_num_rows($sqlactivities);
$rowactivities=(mysql_fetch_assoc($sqlactivities));
extract($rowactivities);

$sqlsongs = mysql_query("SELECT * FROM songs");
$countsongs = mysql_num_rows($sqlsongs);
$rowsongs=(mysql_fetch_assoc($sqlsongs));
extract($rowsongs);

$sqllabels = mysql_query("SELECT * FROM labels");
$countlabels = mysql_num_rows($sqllabels);
$rowlabels=(mysql_fetch_assoc($sqllabels));
extract($rowlabels);

$sqlpersons = mysql_query("SELECT * FROM persons");
$countpersons = mysql_num_rows($sqlpersons);
$rowpersons=(mysql_fetch_assoc($sqlpersons));
extract($rowpersons);

$sqlsongsA = mysql_query("SELECT DISTINCT songArtist FROM songs");
$countsongsA = mysql_num_rows($sqlsongsA);
$rowsongsA=(mysql_fetch_assoc($sqlsongsA));
extract($rowsongsA);

$sqlsongsP = mysql_query("SELECT DISTINCT songProducer FROM songs");
$countsongsP = mysql_num_rows($sqlsongsP);
$rowsongsP=(mysql_fetch_assoc($sqlsongsP));
extract($rowsongsP);

$sqlsongsB = mysql_query("SELECT DISTINCT songBeatmaker FROM songs");
$countsongsB = mysql_num_rows($sqlsongsB);
$rowsongsB=(mysql_fetch_assoc($sqlsongsB));
extract($rowsongsB);

$sqlsongsG = mysql_query("SELECT DISTINCT songGenre FROM songs");
$countsongsG = mysql_num_rows($sqlsongsG);
$rowsongsG=(mysql_fetch_assoc($sqlsongsG));
extract($rowsongsG);

$sqlsongsY = mysql_query("SELECT DISTINCT songYear FROM songs");
$countsongsY = mysql_num_rows($sqlsongsY);
$rowsongsY=(mysql_fetch_assoc($sqlsongsY));
extract($rowsongsY);

$sqlsongsAl = mysql_query("SELECT DISTINCT songAlbum FROM songs");
$countsongsAl = mysql_num_rows($sqlsongsAl);
$rowsongsAl=(mysql_fetch_assoc($sqlsongsAl));
extract($rowsongsAl);

$sqlsongsL = mysql_query("SELECT DISTINCT songLanguage FROM songs");
$countsongsL = mysql_num_rows($sqlsongsL);
$rowsongsL=(mysql_fetch_assoc($sqlsongsL));
extract($rowsongsL);

$sqlsongsF = mysql_query("SELECT DISTINCT songType FROM songs");
$countsongsF = mysql_num_rows($sqlsongsF);
$rowsongsF=(mysql_fetch_assoc($sqlsongsF));
extract($rowsongsF);
?>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="../index.php"><<  Go Frontyard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="../img/favi.png" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        Dashboard
                                    </td>
	
</tr>

<table align="center" width="800px">
<tr>
	<td align="left" width="100px">
                            <table align="center"><tr><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bsongs.php">Music</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bpeople.php">People</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="bactivities.php">Activities</a></x>
                                    </td><td align="left" width="100px" bgcolor="#555">
                                        <x align="center"><a href="blabels.php">Labels</a></x>
                                </td>
                            </tr>
                        </table>
	</td></tr><tr>
    <td width="100%">
    <table width='190px' style="float:left; margin-left:2px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Music
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongs?></span><br/>
                Tracks
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	People
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countpersons?></span><br/>
                People
            </td></tr></table>         
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Labels
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countlabels?></span><br/>
                labels
            </td></tr></table>     
    <table width='190px' style="float:left; margin-left:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Activities
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countactivities?></span><br/>
                Event
            </td></tr></table>  
    <table width='190px' style="float:left; margin-left:2px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Producers
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsP?></span><br/>
                Producers
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Artists
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsA?></span><br/>
                Artists
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Beatmakers
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsB?></span><br/>
                Beatmakers
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Genres
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsG?></span><br/>
                Genres
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:2px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Years
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsY?></span><br/>
                Years
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Albums
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsAl?></span><br/>
                Albums
            </td></tr></table> 
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;" bgcolor="#555">
            	Song Languages
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsL?></span><br/>
                Languages
            </td></tr></table>
    <table width='190px' style="float:left; margin-left:10px; margin-top:10px" bgcolor="#444">
    	<tr>
        	<td align="center" style="padding:5px; font-size:20px; font-weight:900; color:#FFF;">
            	Song Formats
            </td></tr><tr><td align="center" style="padding:5px; font-size:11px; font-weight:900;" bgcolor="#555">
            	<span style="font-size:40px; color:#FFF;"><?php echo $countsongsF?></span><br/>
                Formats
            </td></tr></table>   
       </td>
    <tr>
<?php 
$b = strlen($countsongs);
$a = pow(10,$b);
$songs= ($countsongs/$a)* 100;

$b = strlen($countpersons);
$persons= ($countpersons/$a)* 100;

$b = strlen($countactivities);
$activities= ($countactivities/$a)* 100;

$b = strlen($countlabels);
$labels= ($countlabels/$a)* 100;

?>
	</td>
</tr>
</table>
<table width="800px" align="center"  bgcolor="#444"><tr>
<td align="center" width="<?php echo $songs?>%" bgcolor="#666">Songs</td>
<td align="center" width="<?php echo $persons?>%" bgcolor="#777">People</td>
<td align="center" width="<?php echo $labels?>%" bgcolor="#888">Labels</td>
<td align="center" width="<?php echo $activities?>%" bgcolor="#999">Activities</td>
</tr></table>
    	
<!--<table height="17px"><tr><td></td></tr></table>-->
<table align="center" bgcolor="#444" width="800px">
                                <tr><form action="manage.php" method="post">
                                    <td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Add</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="add" value="Music" style="margin-left:20px; width:100%; cursor:pointer; border:thin #555 solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="Person" style="margin-left:20px; width:100%; cursor:pointer; border:thin #555 solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="Label" style="margin-left:20px; width:100%; cursor:pointer; border:thin #555 solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="add" value="Activity" style="margin-left:20px; width:100%; cursor:pointer; border:thin #555 solid; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td><td align="left" width="100px" >
                                        <span align="center" style='padding:20px; font-weight:bolder'>Delete</span>
                                        <br/>
                                        <x align="center"><input type="submit" name="delete" value="Music" style="margin-left:20px; width:90%; cursor:pointer; border:thin rgb(180,100,100) solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="Person" style="margin-left:20px; width:90%; cursor:pointer; border:thin rgb(180,100,100) solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="Label" style="margin-left:20px; width:90%; cursor:pointer; border:thin rgb(180,100,100) solid; background-color:#555; color:#CCC; padding:10px"/></x><br/>
                                        <x align="center"><input type="submit" name="delete" value="Activity" style="margin-left:20px; width:90%; cursor:pointer; border:thin rgb(180,100,100) solid; background-color:#555; color:#CCC; padding:10px"/></x>
                                    </td></form>
                                    </tr>
                        </table>

<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>
</body>
</html>
