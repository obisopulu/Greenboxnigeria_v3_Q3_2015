<?php
include("uzo.inc");
$cxn = mysql_connect($host,$user,$password);
if (!$cxn)
	die("e no connect o bros");
mysql_select_db($database, $cxn);

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM persons ORDER BY personID DESC");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 20; 
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
} 
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = "";
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT * FROM persons ORDER BY personID DESC $limit");
//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = ""; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display

if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
//    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
			
    if ($pn != 1) {

        $previous = $pn - 1;
        $paginationDisplay .=  "<td align='left' width='20%'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</a> '.'</td>';

    } 
	else {
		$paginationDisplay .=  "<td align='left' width='20%'></td>";
		}
		

    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= "<td align='center' width='60%'>"."<span class='paginationNumbers'>" . $centerPages . '</span></td>';
    // If we are not on the very last page we can place the Next button

    if ($pn != $lastPage) {
		echo"";
        $nextPage = $pn + 1;
        $paginationDisplay .=  "<td align='right' width='20%'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> '.'</td>';
		
    } 
	else {
        $paginationDisplay .= "<td align='right' width='20%'></td>";
		}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>People</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.png" rel="icon" type="image/x-icon"/>
<style type="text/css">
<!--
.pagNumActive {
	display: inline-table;
	font-weight:bold;
	color:#CCC;
	width:20px;
	padding:4px;
	text-decoration:none;
	background-color:#999;
}
body
	{
		font-size:11px;
	}
.paginationNumbers a:active {
    background-color:#999;
	color:#FFF;
}
</style>
</head>
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
                                        All People
                                    </td>
	
</tr>
</table>
<?php
echo"<table align='center' bgcolor='#444'>
	<tr  bgcolor='#555' height='11px'>
							
    	<td width='15px' style='padding:5px 5p;'>Person<br/>ID</td>
        <td width='' style='padding:5px 5p;'>Person Stage<br/>Name</td>
        <td width='auto' style='padding:5px 5p;'>person Birth Name</td>
        <td style='padding:5px 5p;'>person Fan Name</td>
		<td style='padding:5px 5p;'>person Genre</td>
        <td style='padding:5px 5p;'>person<br/>BirthDay</td>
        <td style='padding:5px 5p;'>person<br/>Birth<br/>Year</td>
        <td style='padding:5px 5p;'>person<br/>Place Of<br/>Origin</td>
        <td style='padding:5px 5p;'>person<br/>Profession</td>
        <td style='padding:5px 5p;'>person<br/>Career<br/>Start<br/>Year</td>
        <td style='padding:5px 5p;'>person<br/>Label</td>
        <td style='padding:5px 5p;'>person Associated Acts</td>
        <td style='padding:5px 5p;'>person Life Story</td>
        <td style='padding:5px 5p;'>person<br/>Pic1</td>
        <td style='padding:5px 5p;'>person<br/>Pic2</td>
        <td style='padding:5px 5p;'>person<br/>Pic3</td>
		<td style='padding:5px 5p;'>Date<br/>Updated</td>
        </tr>";
$r = 1;
while($row = mysql_fetch_array($sql2))
	{extract($row);
																
        $c= $r%2;?>
 		<tr bgcolor='<?php if ($c==0) echo "#666"; else echo "#777" ?>'>
    	<td style="padding:0px 5px;"><?php echo trim($personID)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personStageName)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personBirthName)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personFanName)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personGenre)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personBirthDay)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personBirthYear)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personPlaceOfOrigin)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personProfession)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personCareerStartYear)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personLabel)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personAssociatedActs)?></td>
        <td style="padding:0px 5px;"><?php echo trim($personLifeStory)?></td>
        <td style="padding:0px 5px;"><?php if (trim($personPic1) != '') echo 'Yes';else echo 'No'?></td>
        <td style="padding:0px 5px;"><?php if (trim($personPic2) != '') echo 'Yes';else echo 'No'?></td>
        <td style="padding:0px 5px;"><?php if (trim($personPic3) != '') echo 'Yes';else echo 'No'?></td>
        <td style="padding:0px 5px;"><?php echo trim($dateUpdated)?></td>
        </tr>
        <?php $r++; } ?>
        </table>
<table width="700px" align="center"><tr><?php echo $paginationDisplay;?></tr></table>
<table width="100%" bgcolor="#444"><tr><td align="left">Renegade&reg;</td><td align="right">copyright2015 </td></tr></table>
</body>
</html>