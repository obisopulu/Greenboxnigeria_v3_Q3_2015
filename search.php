<?php
$x =$_POST['keyword'];
$keyword = strip_tags(trim($x));
if ($keyword=='power101'){header("Location: back/wole.php");} ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
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
$mainfooter = false;
$term = $_POST['keyword'];
$clean= strlen(trim($keyword));
if ($clean == 0)
	{
		echo"<table align='center' width='700' style='background-color:#DDD; padding:10px;'>
			<tr>
    		<td align='center'>
	 			Insert a <b>valid keyword</b> to search
	    	</td></tr></table>";
		exit();
	}
$keyword=explode(' ',$keyword);
echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1F7044; font-size:50px'>{$_POST['keyword']}</td></tr></table>";
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);


$lenght=count($keyword);


if (strlen($keyword[0]) > 2){$word1 = $keyword[0];}else{$word1 = 'greenbox';}
if (strlen($keyword[1]) > 2){$word2 = $keyword[1];}else{$word2 = 'greenbox';}
if (strlen($keyword[2]) > 2){$word3 = $keyword[2];}else{$word3 = 'greenbox';}
if (strlen($keyword[3]) > 2){$word4 = $keyword[3];}else{$word4 = 'greenbox';}
if (strlen($keyword[4]) > 2){$word5 = $keyword[4];}else{$word5 = 'greenbox';}
if (strlen($keyword[5]) > 2){$word6 = $keyword[5];}else{$word6 = 'greenbox';}
if (strlen($keyword[6]) > 2){$word7 = $keyword[6];}else{$word7 = 'greenbox';}
if (strlen($keyword[7]) > 2){$word8 = $keyword[7];}else{$word8 = 'greenbox';}



		$query = "SELECT * FROM songs WHERE 
		songTitle LIKE '%".$word1."%' OR songTitle LIKE '%".$word2."%' OR songTitle LIKE '%".$word3."%' OR songTitle LIKE '%".$word4."%' OR songTitle LIKE '%".$word5."%' OR songTitle LIKE '%".$word6."%' OR songTitle LIKE '%".$word7."%' OR songTitle LIKE '%".$word8."%'  
		
		
		OR songArtist LIKE '%".$word1."%' OR songArtist LIKE '%".$word2."%' OR songArtist LIKE '%".$word3."%' OR songArtist LIKE '%".$word4."%' OR songArtist LIKE '%".$word5."%' OR songArtist LIKE '%".$word6."%' OR songArtist LIKE '%".$word7."%' OR songArtist LIKE '%".$word8."%'
		
		
		OR songArtistFt LIKE '%".$word1."%' OR songArtistFt LIKE '%".$word2."%' OR songArtistFt LIKE '%".$word3."%' OR songArtistFt LIKE '%".$word4."%' OR songArtistFt LIKE '%".$word5."%' OR songArtistFt LIKE '%".$word6."%' OR songArtistFt LIKE '%".$word7."%' OR songArtistFt LIKE '%".$word8."%' 
		
		
		OR songAlbum LIKE '%".$word1."%' OR songAlbum LIKE '%".$word2."%' OR songAlbum LIKE '%".$word3."%' OR songAlbum LIKE '%".$word4."%' OR songAlbum LIKE '%".$word5."%' OR songAlbum LIKE '%".$word6."%' OR songAlbum LIKE '%".$word7."%' OR songAlbum LIKE '%".$word8."%' OR songAlbum LIKE '%".$word1."%' 
		
		
		OR songProducer LIKE '%".$word1."%' OR songProducer LIKE '%".$word2."%' OR songProducer LIKE '%".$word3."%' OR songProducer LIKE '%".$word4."%' OR songProducer LIKE '%".$word5."%' OR songProducer LIKE '%".$word6."%' OR songProducer LIKE '%".$word7."%' OR songProducer LIKE '%".$word8."%'
		
		
		OR songLenght LIKE '%".$word1."%' OR songLenght LIKE '%".$word2."%' OR songLenght LIKE '%".$word3."%' OR songLenght LIKE '%".$word4."%' OR songLenght LIKE '%".$word5."%' OR songLenght LIKE '%".$word6."%' OR songLenght LIKE '%".$word7."%' OR songLenght LIKE '%".$word8."%' 
		
		
		OR songType LIKE '%".$word1."%' OR songType LIKE '%".$word2."%' OR songType LIKE '%".$word3."%' OR songType LIKE '%".$word4."%' OR songType LIKE '%".$word5."%' OR songType LIKE '%".$word6."%' OR songType LIKE '%".$word7."%' OR songType LIKE '%".$word8."%' 
		
		
		OR songSize LIKE '%".$word1."%' OR songSize LIKE '%".$word2."%' OR songSize LIKE '%".$word3."%' OR songSize LIKE '%".$word4."%' OR songSize LIKE '%".$word5."%' OR songSize LIKE '%".$word6."%' OR songSize LIKE '%".$word7."%' OR songSize LIKE '%".$word8."%' 
		
		
		OR songURL LIKE '%".$word1."%' OR songURL LIKE '%".$word2."%' OR songURL LIKE '%".$word3."%' OR songURL LIKE '%".$word4."%' OR songURL LIKE '%".$word5."%' OR songURL LIKE '%".$word6."%' OR songURL LIKE '%".$word7."%' OR songURL LIKE '%".$word8."%' 
		
		
		OR songBitrate LIKE '%".$word1."%' OR songBitrate LIKE '%".$word2."%' OR songBitrate LIKE '%".$word3."%' OR songBitrate LIKE '%".$word4."%' OR songBitrate LIKE '%".$word5."%' OR songBitrate LIKE '%".$word6."%' OR songBitrate LIKE '%".$word7."%' OR songBitrate LIKE '%".$word8."%' 
		
		
		OR songGenre LIKE '%".$word1."%' OR songGenre LIKE '%".$word2."%' OR songGenre LIKE '%".$word3."%' OR songGenre LIKE '%".$word4."%' OR songGenre LIKE '%".$word5."%' OR songGenre LIKE '%".$word6."%' OR songGenre LIKE '%".$word7."%' OR songGenre LIKE '%".$word8."%' 
		
		
		OR songYear LIKE '%".$word1."%' OR songYear LIKE '%".$word2."%' OR songYear LIKE '%".$word3."%' OR songYear LIKE '%".$word4."%' OR songYear LIKE '%".$word5."%' OR songYear LIKE '%".$word6."%' OR songYear LIKE '%".$word7."%' OR songYear LIKE '%".$word8."%' 
		
		OR songLanguage LIKE '%".$word1."%' OR songLanguage LIKE '%".$word2."%' OR songLanguage LIKE '%".$word3."%' OR songLanguage LIKE '%".$word4."%' OR songLanguage LIKE '%".$word5."%' OR songLanguage LIKE '%".$word6."%' OR songLanguage LIKE '%".$word7."%' OR songLanguage LIKE '%".$word8. "% LIMIT 10' 
		";
		

		
		

		$result = mysql_query($query, $cxn)
			or die("result no work");
if (mysql_num_rows($result)>0)
	{echo"<table align='center' width='700px'><tr><td align='left'><span style='color:#1f7044;'><b>Music</b></span></td><td align='right'><a style='color:#1f7044;' href='songs.php'>All Music</a></td></tr></table>"; $mainfooter = true;}

while($row=mysql_fetch_assoc($result))
		{extract($row);
		?>
		  
		<table align="center" width='700' style="background-color:#DDD; padding:		10px;">
		<tr>
    	<td width="10%" rowspan="">
        <img align="middle" src="<?php echo $songArt?>" height="60" width="60px"/>
    	</td>
    	<td width="50%">
    	<?php echo "<x style='font-size:18px; color:#1f7044;'><b>$songTitle</b></x>&nbsp;&nbsp;<br/>$songArtist&nbsp;&nbsp;"; 	 	
			if ($songArtistFt != '')
				{echo "ft &nbsp;&nbsp; $songArtistFt";} ?>
		<br/><?php echo $songAlbum ?>
    	</td>
	    <td width="20%">
    	<?php echo "<b>$songGenre</b><br/>$songYear" ?>
	    </td>
        <td width="15%">
        <?php $x = round($songLenght/60); $y = $songLenght%60; $z = number_format($songSize);
		if ($y >10)
			 {echo "<b>$x".":"."$y</b><br/>$z"."kb";}
        else
			 {echo "<b>$x".":"."0"."$y</b><br/>$z"."kb";}
		?>
	    </td>
        <td width="15%">
    	<?php echo "<a href='songs/{$row['songURL']}'><img src='img/download.png' width='11px' height='18px'/></a>" ?>
	    </td>
    	</tr>

		</table>
<?php }



		$querypeople = "SELECT * FROM persons WHERE 
		personStageName LIKE '%".$word1."%' OR personStageName LIKE '%".$word2."%' OR personStageName LIKE '%".$word3."%' OR personStageName LIKE '%".$word4."%' OR personStageName LIKE '%".$word5."%' OR personStageName LIKE '%".$word6."%' OR personStageName LIKE '%".$word7."%' OR personStageName LIKE '%".$word8."%'  
		
		
		OR personBirthName LIKE '%".$word1."%' OR personBirthName LIKE '%".$word2."%' OR personBirthName LIKE '%".$word3."%' OR personBirthName LIKE '%".$word4."%' OR personBirthName LIKE '%".$word5."%' OR personBirthName LIKE '%".$word6."%' OR personBirthName LIKE '%".$word7."%' OR personBirthName LIKE '%".$word8."%'
		
		
		OR personFanName LIKE '%".$word1."%' OR personFanName LIKE '%".$word2."%' OR personFanName LIKE '%".$word3."%' OR personFanName LIKE '%".$word4."%' OR personFanName LIKE '%".$word5."%' OR personFanName LIKE '%".$word6."%' OR personFanName LIKE '%".$word7."%' OR personFanName LIKE '%".$word8."%' 
		
		
		OR personBirthYear LIKE '%".$word1."%' OR personBirthYear LIKE '%".$word2."%' OR personBirthYear LIKE '%".$word3."%' OR personBirthYear LIKE '%".$word4."%' OR personBirthYear LIKE '%".$word5."%' OR personBirthYear LIKE '%".$word6."%' OR personBirthYear LIKE '%".$word7."%' OR personBirthYear LIKE '%".$word8."%' 
		
		
		OR personPlaceOfOrigin LIKE '%".$word1."%' OR personPlaceOfOrigin LIKE '%".$word2."%' OR personPlaceOfOrigin LIKE '%".$word3."%' OR personPlaceOfOrigin LIKE '%".$word4."%' OR personPlaceOfOrigin LIKE '%".$word5."%' OR personPlaceOfOrigin LIKE '%".$word6."%' OR personPlaceOfOrigin LIKE '%".$word7."%' OR personPlaceOfOrigin LIKE '%".$word8."%'
		
		
		OR personGenre LIKE '%".$word1."%' OR personGenre LIKE '%".$word2."%' OR personGenre LIKE '%".$word3."%' OR personGenre LIKE '%".$word4."%' OR personGenre LIKE '%".$word5."%' OR personGenre LIKE '%".$word6."%' OR personGenre LIKE '%".$word7."%' OR personGenre LIKE '%".$word8."%' 
		
		
		OR personProfession LIKE '%".$word1."%' OR personProfession LIKE '%".$word2."%' OR personProfession LIKE '%".$word3."%' OR personProfession LIKE '%".$word4."%' OR personProfession LIKE '%".$word5."%' OR personProfession LIKE '%".$word6."%' OR personProfession LIKE '%".$word7."%' OR personProfession LIKE '%".$word8."%' 
		
		
		OR personCareerStartYear LIKE '%".$word1."%' OR personCareerStartYear LIKE '%".$word2."%' OR personCareerStartYear LIKE '%".$word3."%' OR personCareerStartYear LIKE '%".$word4."%' OR personCareerStartYear LIKE '%".$word5."%' OR personCareerStartYear LIKE '%".$word6."%' OR personCareerStartYear LIKE '%".$word7."%' OR personCareerStartYear LIKE '%".$word8."%' 
		
		
		OR personLabel LIKE '%".$word1."%' OR personLabel LIKE '%".$word2."%' OR personLabel LIKE '%".$word3."%' OR personLabel LIKE '%".$word4."%' OR personLabel LIKE '%".$word5."%' OR personLabel LIKE '%".$word6."%' OR personLabel LIKE '%".$word7."%' OR personLabel LIKE '%".$word8."%' 
		
		
		OR personLifeStory LIKE '%".$word1."%' OR personLifeStory LIKE '%".$word2."%' OR personLifeStory LIKE '%".$word3."%' OR personLifeStory LIKE '%".$word4."%' OR personLifeStory LIKE '%".$word5."%' OR personLifeStory LIKE '%".$word6."%' OR personLifeStory LIKE '%".$word7."%' OR personLifeStory LIKE '%".$word8."%' LIMIT 8
		";
		

		$resultpeople = mysql_query($querypeople, $cxn)
			or die("result no work people");
if (mysql_num_rows($resultpeople)>0)
	{echo"<br/><br/><br/><table align='center' width='700px'><tr><td align='left'><span style='color:#1f7044;'><b>People</b></span></td><td align='right'><a style='color:#1f7044;' href='persons.php'>All Persons</a></td></tr></table>
	<form action='person.php' method='post'>
<table align='center'>
<tr>"; $mainfooter = true;}
$counter=1;
while($rowpeople=mysql_fetch_assoc($resultpeople))
		{extract($rowpeople);
	$a = $counter%4;
	echo"<td height='410px' width='170px' valign='top'><img src='$personPic1' width='170px' height='370px'/><br/><div><input type='submit' name='person' value="; ?> "<?php echo $personStageName ?> " <?php echo" style='font-size:18px; padding:15px 30px; margin:0 0 20px; text-transform:uppercase; cursor:pointer; height:50px; width:170px; background-color:#999; border:solid 1px #CCC; outline:thin solid #CCC; color:#CCC'></div>
</td>";
	if ($a==0)
		{
			echo"</tr><tr>";
		}
		
	$counter++;
	};
echo'</tr>
</table></form>';






		$querylabel = "SELECT * FROM labels WHERE 
		labelName LIKE '%".$word1."%' OR labelName LIKE '%".$word2."%' OR labelName LIKE '%".$word3."%' OR labelName LIKE '%".$word4."%' OR labelName LIKE '%".$word5."%' OR labelName LIKE '%".$word6."%' OR labelName LIKE '%".$word7."%' OR labelName LIKE '%".$word8."%'  
		
		
		OR labelOwner LIKE '%".$word1."%' OR labelOwner LIKE '%".$word2."%' OR labelOwner LIKE '%".$word3."%' OR labelOwner LIKE '%".$word4."%' OR labelOwner LIKE '%".$word5."%' OR labelOwner LIKE '%".$word6."%' OR labelOwner LIKE '%".$word7."%' OR labelOwner LIKE '%".$word8."%'
		
		
		OR labelIntro LIKE '%".$word1."%' OR labelIntro LIKE '%".$word2."%' OR labelIntro LIKE '%".$word3."%' OR labelIntro LIKE '%".$word4."%' OR labelIntro LIKE '%".$word5."%' OR labelIntro LIKE '%".$word6."%' OR labelIntro LIKE '%".$word7."%' OR labelIntro LIKE '%".$word8."%' 
		
		
		OR labelHistory LIKE '%".$word1."%' OR labelHistory LIKE '%".$word2."%' OR labelHistory LIKE '%".$word3."%' OR labelHistory LIKE '%".$word4."%' OR labelHistory LIKE '%".$word5."%' OR labelHistory LIKE '%".$word6."%' OR labelHistory LIKE '%".$word7."%' OR labelHistory LIKE '%".$word8."%' 
		
		
		OR labelAccolades LIKE '%".$word1."%' OR labelAccolades LIKE '%".$word2."%' OR labelAccolades LIKE '%".$word3."%' OR labelAccolades LIKE '%".$word4."%' OR labelAccolades LIKE '%".$word5."%' OR labelAccolades LIKE '%".$word6."%' OR labelAccolades LIKE '%".$word7."%' OR labelAccolades LIKE '%".$word8."%'
		
		
		OR labelArtists LIKE '%".$word1."%' OR labelArtists LIKE '%".$word2."%' OR labelArtists LIKE '%".$word3."%' OR labelArtists LIKE '%".$word4."%' OR labelArtists LIKE '%".$word5."%' OR labelArtists LIKE '%".$word6."%' OR labelArtists LIKE '%".$word7."%' OR labelArtists LIKE '%".$word8."%' 
		
		
		OR labelProducers LIKE '%".$word1."%' OR labelProducers LIKE '%".$word2."%' OR labelProducers LIKE '%".$word3."%' OR labelProducers LIKE '%".$word4."%' OR labelProducers LIKE '%".$word5."%' OR labelProducers LIKE '%".$word6."%' OR labelProducers LIKE '%".$word7."%' OR labelProducers LIKE '%".$word8."%' LIMIT 8
		";


		$resultlabel = mysql_query($querylabel, $cxn)
			or die("result no work people");
if (mysql_num_rows($resultlabel)>0)
	{echo"<br/><br/><br/><table align='center' width='700px'><tr><td align='left'><span style='color:#1f7044;'><b>Label</b></span></td><td align='right'><a style='color:#1f7044;' href='labels.php'>All Labels</a></td></tr></table>
	<form action='label.php' method='post'>
<table align='center'>
<tr>"; $mainfooter = true;}
$counter=1;
while($rowlabel=mysql_fetch_assoc($resultlabel))
		{extract($rowlabel);
	$a = $counter%4;
	echo"<td height='410px' width='170px' valign='top' align='center'><img src='$labelPic1' width='170px' height='170px'/><br/><div><input type='submit' name='label' value=";?><?php echo '"' ?><?php echo "$labelName"?> <?php echo '"' ?> <?php echo"style='font-size:18px; padding-top:15px 30px; margin:0 0 20px; text-transform:uppercase; cursor:pointer; height:50px; width:170px; background-color:#999; border:solid 1px #CCC; outline:thin solid #CCC; color:#CCC'></div>
</td>";
	if ($a==0)
		{
			echo"</tr><tr>";
		}
		
	$counter++;
	};
echo'</tr>
</table></form>';





		$queryactivities = "SELECT * FROM activities WHERE 
		activityName LIKE '%".$word1."%' OR activityName LIKE '%".$word2."%' OR activityName LIKE '%".$word3."%' OR activityName LIKE '%".$word4."%' OR activityName LIKE '%".$word5."%' OR activityName LIKE '%".$word6."%' OR activityName LIKE '%".$word7."%' OR activityName LIKE '%".$word8."%'  
		
		
		OR activityInfo LIKE '%".$word1."%' OR activityInfo LIKE '%".$word2."%' OR activityInfo LIKE '%".$word3."%' OR activityInfo LIKE '%".$word4."%' OR activityInfo LIKE '%".$word5."%' OR activityInfo LIKE '%".$word6."%' OR activityInfo LIKE '%".$word7."%' OR activityInfo LIKE '%".$word8."%'
		
		
		OR activityDate LIKE '%".$word1."%' OR activityDate LIKE '%".$word2."%' OR activityDate LIKE '%".$word3."%' OR activityDate LIKE '%".$word4."%' OR activityDate LIKE '%".$word5."%' OR activityDate LIKE '%".$word6."%' OR activityDate LIKE '%".$word7."%' OR activityDate LIKE '%".$word8."%' ORDER BY activityDate DESC LIMIT 4
		";

		$resultactivities = mysql_query($queryactivities, $cxn)
			or die("result no work activities");
if (mysql_num_rows($resultactivities)>0)
	{echo"<br/><br/><br/><table align='center' width='700px'><tr><td align='left'><span style='color:#1f7044;'><b>Activities</b></span></td><td align='right'><a style='color:#1f7044;' href='labels.php'>All Activities</a></td></tr></table>
<table align='center' id='cubes45' width='700px'>
<tr>
<td align='center' style='padding-left:25px;'>"; 
$mainfooter = true;}
while($rowactivities=mysql_fetch_assoc($resultactivities))
		{extract($rowactivities);
	echo"<table align='center' width='150px' height='150px' style='float:left;'>
		<tr><td align='left'>
		<h1>";
		echo $activityDay;
		echo"<span style='color:#FFF;'>$activityMonth</span><br/></h1><b><span style='color:#1f7044;'>$activityName</span></b>
		</td></tr>
		<tr><td align='left'><span>"; echo substr_replace($activityInfo,'...',80); echo "<br/><a href='Activities.php#$activityDay$activityMonth$activityYear' 		style='display:compact; color:#1f7044;'>more</span></a></td></tr></table>";}

echo '</td>
</tr>
</table>';

 if ( $mainfooter == true) 
	{include('mainfooter.inc');}
	else
	{
		echo"<table align='center' width='700' style='background-color:#DDD; padding:10px;'>
			<tr>
    		<td align='center'>
	 			no result for \" $term \".
	    	</td></tr></table>";
		exit();
	}
?>
</body>
</html>