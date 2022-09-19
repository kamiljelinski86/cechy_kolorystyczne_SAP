<html>
<head>
<meta http-equiv="content-type" content="text/html: charset=utf-8">

<script>
function myFunction1() {
  var copyText = document.getElementById("obszar1");
  copyText.select();
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "KOPIUJ";
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "KOPIUJ";
}

</script>

<script>
function myFunction2() {
  var copyText = document.getElementById("obszar2");
  copyText.select();
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "KOPIUJ";
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "KOPIUJ";
}

</script>

<script type="text/javascript"> 

var $ = function(a) {
  return document.getElementById(a);
}
var litery1 = function() {
    var wyrazy1 = $('wyrazy1');
    var obszar1 = $('obszar1');
    s = obszar1.value;
    s = s.replace(/(^\s*)|(\s*$)/gi, "");
    s = s.replace(/[ ]{2,}/gi, " ");
    s = s.replace(/\n /, "\n");
    wyrazy1.innerHTML = s.split('\n').length;
 }
 window.onload = litery1;
 
 </script> 
 
 <script type="text/javascript"> 

var $ = function(a) {
  return document.getElementById(a);
}
var litery2 = function() {
    var wyrazy2 = $('wyrazy2');
    var obszar2 = $('obszar2');
    s = obszar2.value;
    s = s.replace(/(^\s*)|(\s*$)/gi, "");
    s = s.replace(/[ ]{2,}/gi);
    s = s.replace(/\n /, "\n");
    wyrazy2.innerHTML = s.split('\n').length;
 }
 window.onload = litery2;
 
 </script> 


 <script>
function countLines(theArea){
var theLines = theArea.value.replace((new RegExp(".{"+theArea.cols+"}","g")),"\n").split("\n");
if(theLines[theLines.length-1]=="") theLines.length--;
theArea.form.lineCount.value = theLines.length;
}
</script>
 

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
		function check_uncheck_checkbox(isChecked) {
			if(isChecked) {
				$('input[value="zaznacz"]').each(function() { 
					this.checked = true; 
				});
			} else {
				$('input[value="zaznacz"]').each(function() {
					this.checked = false;
				});
			}
		}
</script>	

<script>
		function check_uncheck_checkbox_2(isChecked) {
			if(isChecked) {
				$('input[value="zaznacz_2"]').each(function() { 
					this.checked = true; 
				});
			} else {
				$('input[value="zaznacz_2"]').each(function() {
					this.checked = false;
				});
			}
		}
</script>	





	

<title>Cechy kolorystyczne: tabela ZLOVC_COLORS i tabela ZLOVC_CHAR_REL</title>



<style type="text/css">

a{
text-decoration:none;
}

div {
font-size: 12px;
font-family: arial;	
}

.tytul {
height: 35px;
font-size: 15px;
font-weight: 700;
}

.nazwa {
padding: 5px 5px;
text-align: center;
color: #000;
font-weight: 700;
font-family: Arial;
}

.tabela_kolumna_1_naglowek {
.width: 30px;
height: 25px;
padding-left: 5px;
padding-right: 5px;
font-weight: 700;
}

.tabela_kolumna_1 {
text-align: right;
height: 25px;
padding-left: 5px;
padding-right: 5px;

}

.tabela_kolumna_2_naglowek {
.width: 150px;
height: 25px;
padding-left: 5px;
padding-right: 5px;
font-weight: 700;
}

.tabela_kolumna_2 {
height: 25px;
padding-left: 5px;
padding-right: 5px;
}

.tabela_kolumna_3_naglowek {
.width: 310px;
height: 25px;
padding-left: 5px;
padding-right: 5px;
font-weight: 700;
}

.tabela_kolumna_3 {
height: 25px;	
padding-left: 5px;
padding-right: 5px;	
}

.tabela_kolumna_4_naglowek {
.width: 50px;
height: 25px;
padding-left: 5px;
padding-right: 5px;
font-weight: 700;
}

.tabela_kolumna_4 {
height: 25px;
padding-left: 10px;
padding-right: 10px;
}

.okno_1 {
width: 120px;	
}

.okno_2 {
width: 250px;	
}

.textarea_stop {
float: left;
margin-right: 10px;
}

.przycisk_pokaz {
cursor: hand;
padding: 10px 5px;
text-align:center;
text-decoration: none;
font-family: Arial;
margin-top: 5px;
width: 120px;
font-size: 12px;
}

.przycisk_kopiuj_1 {
cursor: hand;
padding: 10px 5px;
text-align:center;
text-decoration: none;
font-family: Arial;
margin-top: 10px;
width: 600px;
font-size: 12px;
}

.przycisk_kopiuj_2 {
cursor: hand;
padding: 10px 5px;
text-align:center;
text-decoration: none;
font-family: Arial;
margin-top: 10px;
width: 400px;
font-size: 12px;
}


</style>

</head>



<body>

<?

if ($_GET['sap']){
$sap = $_GET['sap'];



if ($_GET['id_wartosci_1']){
$id_wartosci_1 = $_GET['id_wartosci_1'];
}
else {
$id_wartosci_1 = '';
}

if ($_GET['id_wartosci_2']){
$id_wartosci_2 = $_GET['id_wartosci_2'];
}
else {
$id_wartosci_2 = '';
}


if ($_GET['id_wartosci_3']){
$id_wartosci_3 = $_GET['id_wartosci_3'];
}
else {
$id_wartosci_3 = '';
}

if ($_GET['id_wartosci_4']){
$id_wartosci_4 = $_GET['id_wartosci_4'];
}
else {
$id_wartosci_4 = '';
}

if ($_GET['id_wartosci_5']){
$id_wartosci_5 = $_GET['id_wartosci_5'];
}
else {
$id_wartosci_5 = '';
}

if ($_GET['id_wartosci_6']){
$id_wartosci_6 = $_GET['id_wartosci_6'];
}
else {
$id_wartosci_6 = '';
}

if ($_GET['id_wartosci_7']){
$id_wartosci_7 = $_GET['id_wartosci_7'];
}
else {
$id_wartosci_7 = '';
}

if ($_GET['id_wartosci_8']){
$id_wartosci_8 = $_GET['id_wartosci_8'];
}
else {
$id_wartosci_8 = '';
}

if ($_GET['id_wartosci_9']){
$id_wartosci_9 = $_GET['id_wartosci_9'];
}
else {
$id_wartosci_9 = '';
}

if ($_GET['id_wartosci_10']){
$id_wartosci_10 = $_GET['id_wartosci_10'];
}
else {
$id_wartosci_10 = '';
}

if ($_GET['id_wartosci_11']){
$id_wartosci_11 = $_GET['id_wartosci_11'];
}
else {
$id_wartosci_11 = '';
}

if ($_GET['id_wartosci_12']){
$id_wartosci_12 = $_GET['id_wartosci_12'];
}
else {
$id_wartosci_12 = '';
}

if ($_GET['id_wartosci_13']){
$id_wartosci_13 = $_GET['id_wartosci_13'];
}
else {
$id_wartosci_13 = '';
}

if ($_GET['id_wartosci_14']){
$id_wartosci_14 = $_GET['id_wartosci_14'];
}
else {
$id_wartosci_14 = '';
}


if ($_GET['id_wartosci_15']){
$id_wartosci_15 = $_GET['id_wartosci_15'];
}
else {
$id_wartosci_15 = '';
}

if ($_GET['id_wartosci_16']){
$id_wartosci_16 = $_GET['id_wartosci_16'];
}
else {
$id_wartosci_16 = '';
}

if ($_GET['id_wartosci_17']){
$id_wartosci_17 = $_GET['id_wartosci_17'];
}
else {
$id_wartosci_17 = '';
}

if ($_GET['id_wartosci_18']){
$id_wartosci_18 = $_GET['id_wartosci_18'];
}
else {
$id_wartosci_18 = '';
}

if ($_GET['id_wartosci_19']){
$id_wartosci_19 = $_GET['id_wartosci_19'];
}
else {
$id_wartosci_19 = '';
}

if ($_GET['id_wartosci_20']){
$id_wartosci_20 = $_GET['id_wartosci_20'];
}
else {
$id_wartosci_20 = '';
}





if ($_GET['wartosc_cechy_1']){
$wartosc_cechy_1 = $_GET['wartosc_cechy_1'];
}
else {
$wartosc_cechy_1 = '';
}

if ($_GET['wartosc_cechy_2']){
$wartosc_cechy_2 = $_GET['wartosc_cechy_2'];
}
else {
$wartosc_cechy_2 = '';
}


if ($_GET['wartosc_cechy_3']){
$wartosc_cechy_3 = $_GET['wartosc_cechy_3'];
}
else {
$wartosc_cechy_3 = '';
}

if ($_GET['wartosc_cechy_4']){
$wartosc_cechy_4 = $_GET['wartosc_cechy_4'];
}
else {
$wartosc_cechy_4 = '';
}

if ($_GET['wartosc_cechy_5']){
$wartosc_cechy_5 = $_GET['wartosc_cechy_5'];
}
else {
$wartosc_cechy_5 = '';
}

if ($_GET['wartosc_cechy_6']){
$wartosc_cechy_6 = $_GET['wartosc_cechy_6'];
}
else {
$wartosc_cechy_6 = '';
}

if ($_GET['wartosc_cechy_7']){
$wartosc_cechy_7 = $_GET['wartosc_cechy_7'];
}
else {
$wartosc_cechy_7 = '';
}

if ($_GET['wartosc_cechy_8']){
$wartosc_cechy_8 = $_GET['wartosc_cechy_8'];
}
else {
$wartosc_cechy_8 = '';
}

if ($_GET['wartosc_cechy_9']){
$wartosc_cechy_9 = $_GET['wartosc_cechy_9'];
}
else {
$wartosc_cechy_9 = '';
}

if ($_GET['wartosc_cechy_10']){
$wartosc_cechy_10 = $_GET['wartosc_cechy_10'];
}
else {
$wartosc_cechy_10 = '';
}

if ($_GET['wartosc_cechy_11']){
$wartosc_cechy_11 = $_GET['wartosc_cechy_11'];
}
else {
$wartosc_cechy_11 = '';
}

if ($_GET['wartosc_cechy_12']){
$wartosc_cechy_12 = $_GET['wartosc_cechy_12'];
}
else {
$wartosc_cechy_12 = '';
}

if ($_GET['wartosc_cechy_13']){
$wartosc_cechy_13 = $_GET['wartosc_cechy_13'];
}
else {
$wartosc_cechy_13 = '';
}

if ($_GET['wartosc_cechy_14']){
$wartosc_cechy_14 = $_GET['wartosc_cechy_14'];
}
else {
$wartosc_cechy_14 = '';
}


if ($_GET['wartosc_cechy_15']){
$wartosc_cechy_15 = $_GET['wartosc_cechy_15'];
}
else {
$wartosc_cechy_15 = '';
}

if ($_GET['wartosc_cechy_16']){
$wartosc_cechy_16 = $_GET['wartosc_cechy_16'];
}
else {
$wartosc_cechy_16 = '';
}

if ($_GET['wartosc_cechy_17']){
$wartosc_cechy_17 = $_GET['wartosc_cechy_17'];
}
else {
$wartosc_cechy_17 = '';
}

if ($_GET['wartosc_cechy_18']){
$wartosc_cechy_18 = $_GET['wartosc_cechy_18'];
}
else {
$wartosc_cechy_18 = '';
}

if ($_GET['wartosc_cechy_19']){
$wartosc_cechy_19 = $_GET['wartosc_cechy_19'];
}
else {
$wartosc_cechy_19 = '';
}

if ($_GET['wartosc_cechy_20']){
$wartosc_cechy_20 = $_GET['wartosc_cechy_20'];
}
else {
$wartosc_cechy_20 = '';
}




if ($_GET['nazwa_koloru_1']){
$nazwa_koloru_1 = $_GET['nazwa_koloru_1'];
}
else {
$nazwa_koloru_1 = '';
}

if ($_GET['nazwa_koloru_2']){
$nazwa_koloru_2 = $_GET['nazwa_koloru_2'];
}
else {
$nazwa_koloru_2 = '';
}


if ($_GET['nazwa_koloru_3']){
$nazwa_koloru_3 = $_GET['nazwa_koloru_3'];
}
else {
$nazwa_koloru_3 = '';
}

if ($_GET['nazwa_koloru_4']){
$nazwa_koloru_4 = $_GET['nazwa_koloru_4'];
}
else {
$nazwa_koloru_4 = '';
}

if ($_GET['nazwa_koloru_5']){
$nazwa_koloru_5 = $_GET['nazwa_koloru_5'];
}
else {
$nazwa_koloru_5 = '';
}

if ($_GET['nazwa_koloru_6']){
$nazwa_koloru_6 = $_GET['nazwa_koloru_6'];
}
else {
$nazwa_koloru_6 = '';
}

if ($_GET['nazwa_koloru_7']){
$nazwa_koloru_7 = $_GET['nazwa_koloru_7'];
}
else {
$nazwa_koloru_7 = '';
}

if ($_GET['nazwa_koloru_8']){
$nazwa_koloru_8 = $_GET['nazwa_koloru_8'];
}
else {
$nazwa_koloru_8 = '';
}

if ($_GET['nazwa_koloru_9']){
$nazwa_koloru_9 = $_GET['nazwa_koloru_9'];
}
else {
$nazwa_koloru_9 = '';
}

if ($_GET['nazwa_koloru_10']){
$nazwa_koloru_10 = $_GET['nazwa_koloru_10'];
}
else {
$nazwa_koloru_10 = '';
}

if ($_GET['nazwa_koloru_11']){
$nazwa_koloru_11 = $_GET['nazwa_koloru_11'];
}
else {
$nazwa_koloru_11 = '';
}

if ($_GET['nazwa_koloru_12']){
$nazwa_koloru_12 = $_GET['nazwa_koloru_12'];
}
else {
$nazwa_koloru_12 = '';
}

if ($_GET['nazwa_koloru_13']){
$nazwa_koloru_13 = $_GET['nazwa_koloru_13'];
}
else {
$nazwa_koloru_13 = '';
}

if ($_GET['nazwa_koloru_14']){
$nazwa_koloru_14 = $_GET['nazwa_koloru_14'];
}
else {
$nazwa_koloru_14 = '';
}


if ($_GET['nazwa_koloru_15']){
$nazwa_koloru_15 = $_GET['nazwa_koloru_15'];
}
else {
$nazwa_koloru_15 = '';
}

if ($_GET['nazwa_koloru_16']){
$nazwa_koloru_16 = $_GET['nazwa_koloru_16'];
}
else {
$nazwa_koloru_16 = '';
}

if ($_GET['nazwa_koloru_17']){
$nazwa_koloru_17 = $_GET['nazwa_koloru_17'];
}
else {
$nazwa_koloru_17 = '';
}

if ($_GET['nazwa_koloru_18']){
$nazwa_koloru_18 = $_GET['nazwa_koloru_18'];
}
else {
$nazwa_koloru_18 = '';
}

if ($_GET['nazwa_koloru_19']){
$nazwa_koloru_19 = $_GET['nazwa_koloru_19'];
}
else {
$nazwa_koloru_19 = '';
}

if ($_GET['nazwa_koloru_20']){
$nazwa_koloru_20 = $_GET['nazwa_koloru_20'];
}
else {
$nazwa_koloru_20 = '';
}





if ($_GET['wybor_cechy_1']){
$wybor_cechy_1 = $_GET['wybor_cechy_1'];
}
else {
$wybor_cechy_1 = '';
}

if ($_GET['wybor_cechy_2']){
$wybor_cechy_2 = $_GET['wybor_cechy_2'];
}
else {
$wybor_cechy_2 = '';
}


if ($_GET['wybor_cechy_3']){
$wybor_cechy_3 = $_GET['wybor_cechy_3'];
}
else {
$wybor_cechy_3 = '';
}

if ($_GET['wybor_cechy_4']){
$wybor_cechy_4 = $_GET['wybor_cechy_4'];
}
else {
$wybor_cechy_4 = '';
}

if ($_GET['wybor_cechy_5']){
$wybor_cechy_5 = $_GET['wybor_cechy_5'];
}
else {
$wybor_cechy_5 = '';
}

if ($_GET['wybor_cechy_6']){
$wybor_cechy_6 = $_GET['wybor_cechy_6'];
}
else {
$wybor_cechy_6 = '';
}

if ($_GET['wybor_cechy_7']){
$wybor_cechy_7 = $_GET['wybor_cechy_7'];
}
else {
$wybor_cechy_7 = '';
}

if ($_GET['wybor_cechy_8']){
$wybor_cechy_8 = $_GET['wybor_cechy_8'];
}
else {
$wybor_cechy_8 = '';
}

if ($_GET['wybor_cechy_9']){
$wybor_cechy_9 = $_GET['wybor_cechy_9'];
}
else {
$wybor_cechy_9 = '';
}

if ($_GET['wybor_cechy_10']){
$wybor_cechy_10 = $_GET['wybor_cechy_10'];
}
else {
$wybor_cechy_10 = '';
}

if ($_GET['wybor_cechy_11']){
$wybor_cechy_11 = $_GET['wybor_cechy_11'];
}
else {
$wybor_cechy_11 = '';
}

if ($_GET['wybor_cechy_12']){
$wybor_cechy_12 = $_GET['wybor_cechy_12'];
}
else {
$wybor_cechy_12 = '';
}

if ($_GET['wybor_cechy_13']){
$wybor_cechy_13 = $_GET['wybor_cechy_13'];
}
else {
$wybor_cechy_13 = '';
}

if ($_GET['wybor_cechy_14']){
$wybor_cechy_14 = $_GET['wybor_cechy_14'];
}
else {
$wybor_cechy_14 = '';
}


if ($_GET['wybor_cechy_15']){
$wybor_cechy_15 = $_GET['wybor_cechy_15'];
}
else {
$wybor_cechy_15 = '';
}

if ($_GET['wybor_cechy_16']){
$wybor_cechy_16 = $_GET['wybor_cechy_16'];
}
else {
$wybor_cechy_16 = '';
}

if ($_GET['wybor_cechy_17']){
$wybor_cechy_17 = $_GET['wybor_cechy_17'];
}
else {
$wybor_cechy_17 = '';
}

if ($_GET['wybor_cechy_18']){
$wybor_cechy_18 = $_GET['wybor_cechy_18'];
}
else {
$wybor_cechy_18 = '';
}

if ($_GET['wybor_cechy_19']){
$wybor_cechy_19 = $_GET['wybor_cechy_19'];
}
else {
$wybor_cechy_19 = '';
}

if ($_GET['wybor_cechy_20']){
$wybor_cechy_20 = $_GET['wybor_cechy_20'];
}
else {
$wybor_cechy_20 = '';
}


if ($_GET['wartosc_cechy_1']){
$wariant_1 = 	($wartosc_cechy_1."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_1."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_1."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_1."\t"."PL"."\t".$nazwa_koloru_1."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_1."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_2']){
$wariant_2 = 	($wartosc_cechy_2."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_2."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_2."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_2."\t"."PL"."\t".$nazwa_koloru_2."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_2."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_3']){
$wariant_3 = 	($wartosc_cechy_3."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_3."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_3."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_3."\t"."PL"."\t".$nazwa_koloru_3."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_3."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_4']){				
$wariant_4 = 	($wartosc_cechy_4."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_4."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_4."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_4."\t"."PL"."\t".$nazwa_koloru_4."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_4."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_5']){				
$wariant_5 = 	($wartosc_cechy_5."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_5."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_5."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_5."\t"."PL"."\t".$nazwa_koloru_5."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_5."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_6']){				
$wariant_6 = 	($wartosc_cechy_6."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_6."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_6."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_6."\t"."PL"."\t".$nazwa_koloru_6."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_6."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_7']){				
$wariant_7 = 	($wartosc_cechy_7."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_7."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_7."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_7."\t"."PL"."\t".$nazwa_koloru_7."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_7."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_8']){				
$wariant_8 = 	($wartosc_cechy_8."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_8."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_8."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_8."\t"."PL"."\t".$nazwa_koloru_8."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_8."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_9']){				
$wariant_9 = 	($wartosc_cechy_9."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_9."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_9."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_9."\t"."PL"."\t".$nazwa_koloru_9."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_9."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_10']){				
$wariant_10 = 	($wartosc_cechy_10."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_10."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_10."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_10."\t"."PL"."\t".$nazwa_koloru_10."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_10."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_11']){				
$wariant_11 = 	($wartosc_cechy_11."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_11."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_11."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_11."\t"."PL"."\t".$nazwa_koloru_11."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_11."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_12']){				
$wariant_12 = 	($wartosc_cechy_12."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_12."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_12."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_12."\t"."PL"."\t".$nazwa_koloru_12."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_12."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_13']){				
$wariant_13 = 	($wartosc_cechy_13."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_13."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_13."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_13."\t"."PL"."\t".$nazwa_koloru_13."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_13."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_14']){				
$wariant_14 = 	($wartosc_cechy_14."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_14."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_14."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_14."\t"."PL"."\t".$nazwa_koloru_14."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_14."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_15']){				
$wariant_15 = 	($wartosc_cechy_15."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_15."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_15."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_15."\t"."PL"."\t".$nazwa_koloru_15."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_15."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_16']){				
$wariant_16 = 	($wartosc_cechy_16."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_16."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_16."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_16."\t"."PL"."\t".$nazwa_koloru_16."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_16."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_17']){				
$wariant_17 = 	($wartosc_cechy_17."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_17."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_17."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_17."\t"."PL"."\t".$nazwa_koloru_17."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_17."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_18']){				
$wariant_18 = 	($wartosc_cechy_18."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_18."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_18."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_18."\t"."PL"."\t".$nazwa_koloru_18."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_18."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_19']){				
$wariant_19 = 	($wartosc_cechy_19."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_19."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_19."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_19."\t"."PL"."\t".$nazwa_koloru_19."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_19."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
if ($_GET['wartosc_cechy_20']){				
$wariant_20 = 	($wartosc_cechy_20."\t"."DE"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_20."\t"."EN"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_20."\t"."FR"."\t".""."\t".""."\t".""."\t"."0"."\n".
				$wartosc_cechy_20."\t"."PL"."\t".$nazwa_koloru_20."\t".""."\t"."brak wpisu"."\t"."0"."\n".
				$wartosc_cechy_20."\t"."ES"."\t".""."\t".""."\t".""."\t"."0"."\n");
				}
				
				
				
if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_1_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_1_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_1_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_1_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_1_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_1_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_1_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_1_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_1_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_1_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_1_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

if (($_GET['wartosc_cechy_1']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_1_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_1."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_1."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_2_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_2_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_2_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_2_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_2_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_2_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_2_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_2_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_2_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_2_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_2_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

if (($_GET['wartosc_cechy_2']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_2_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_2."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_2."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_3_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_3_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_3_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_3_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_3_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_3_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_3_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_3_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_3_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_3_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_3_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

if (($_GET['wartosc_cechy_3']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_3_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_3."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_3."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_4_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_4_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_4_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_4_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_4_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_4_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_4_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_4_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_4_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_4_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_4_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

if (($_GET['wartosc_cechy_4']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_4_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_4."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_4."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_5_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_5_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_5_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_5_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_5_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_5_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_5_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_5_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_5_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_5_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_5_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

if (($_GET['wartosc_cechy_5']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_5_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_5."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_5."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_6_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_6_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_6_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_6_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_6_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_6_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_6_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_6_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_6_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_6_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_6_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

if (($_GET['wartosc_cechy_6']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_6_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_6."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_6."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_7_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_7_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_7_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_7_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_7_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_7_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_7_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_7_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_7_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_7_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_7_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

if (($_GET['wartosc_cechy_7']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_7_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_7."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_7."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_8_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_8_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_8_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_8_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_8_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_8_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_8_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_8_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_8_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_8_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_8_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

if (($_GET['wartosc_cechy_8']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_8_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_8."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_8."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_9_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_9_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_9_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_9_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_9_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_9_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_9_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_9_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_9_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_9_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_9_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

if (($_GET['wartosc_cechy_9']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_9_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_9."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_9."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_10_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_10_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_10_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_10_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_10_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_10_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_10_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_10_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_10_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_10_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_10_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

if (($_GET['wartosc_cechy_10']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_10_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_10."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_10."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_11_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_11_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_11_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_11_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_11_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_11_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_11_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_11_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_11_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_11_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_11_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

if (($_GET['wartosc_cechy_11']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_11_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_11."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_11."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_12_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_12_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_12_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_12_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_12_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_12_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_12_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_12_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_12_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_12_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_12_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

if (($_GET['wartosc_cechy_12']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_12_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_12."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_12."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_13_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_13_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_13_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_13_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_13_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_13_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_13_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_13_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_13_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_13_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_13_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

if (($_GET['wartosc_cechy_13']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_13_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_13."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_13."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_14_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_14_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_14_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_14_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_14_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_14_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_14_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_14_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_14_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_14_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_14_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

if (($_GET['wartosc_cechy_14']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_14_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_14."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_14."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_15_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_15_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_15_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_15_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_15_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_15_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_15_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_15_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_15_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_15_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_15_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

if (($_GET['wartosc_cechy_15']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_15_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_15."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_15."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_16_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_16_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_16_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_16_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_16_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_16_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_16_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_16_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_16_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_16_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_16_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

if (($_GET['wartosc_cechy_16']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_16_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_16."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_16."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_17_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_17_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_17_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_17_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_17_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_17_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_17_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_17_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_17_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_17_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_17_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

if (($_GET['wartosc_cechy_17']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_17_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_17."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_17."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_18_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_18_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_18_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_18_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_18_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_18_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_18_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_18_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_18_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_18_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_18_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

if (($_GET['wartosc_cechy_18']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_18_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_18."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_18."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_19_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_19_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_19_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_19_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_19_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_19_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_19_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_19_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_19_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_19_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_19_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

if (($_GET['wartosc_cechy_19']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_19_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_19."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_19."\n");
}

//----------------------------------------------------------------------------------------------

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_1'])){				
$cecha_char_rel_20_1 = 	(""."\t"."RODZINA"."\t"."B1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_2'])){				
$cecha_char_rel_20_2 = 	(""."\t"."RODZINA"."\t"."B2"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."B2"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_3'])){				
$cecha_char_rel_20_3 = 	(""."\t"."RODZINA"."\t"."K1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_4'])){				
$cecha_char_rel_20_4 = 	(""."\t"."RODZINA"."\t"."K2"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."K2"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_5'])){				
$cecha_char_rel_20_5 = 	(""."\t"."RODZINA"."\t"."F1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_6'])){				
$cecha_char_rel_20_6 = 	(""."\t"."RODZINA"."\t"."F2"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."F2"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_7'])){				
$cecha_char_rel_20_7 = 	(""."\t"."RODZINA"."\t"."S1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_8'])){				
$cecha_char_rel_20_8 = 	(""."\t"."RODZINA"."\t"."S2"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."S2"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_9'])){				
$cecha_char_rel_20_9 = 	(""."\t"."RODZINA"."\t"."T1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."T1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_10'])){				
$cecha_char_rel_20_10 = 	(""."\t"."RODZINA"."\t"."U1"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U1"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_11'])){				
$cecha_char_rel_20_11 = 	(""."\t"."RODZINA"."\t"."U2"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U2"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}

if (($_GET['wartosc_cechy_20']) && ($_GET['wybor_cechy_12'])){				
$cecha_char_rel_20_12 = 	(""."\t"."RODZINA"."\t"."U3"."\t"."999020"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999030"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999040"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."999050"."\t".$wartosc_cechy_20."\n".
						""."\t"."RODZINA"."\t"."U3"."\t"."NIETYP"."\t".$wartosc_cechy_20."\n");
}





$cecha_char_rel_1 = ($cecha_char_rel_1_1.$cecha_char_rel_1_2.$cecha_char_rel_1_3.$cecha_char_rel_1_4.$cecha_char_rel_1_5.$cecha_char_rel_1_6.$cecha_char_rel_1_7.$cecha_char_rel_1_8.$cecha_char_rel_1_9.$cecha_char_rel_1_10.$cecha_char_rel_1_11.$cecha_char_rel_1_12);  

$cecha_char_rel_2 = ($cecha_char_rel_2_1.$cecha_char_rel_2_2.$cecha_char_rel_2_3.$cecha_char_rel_2_4.$cecha_char_rel_2_5.$cecha_char_rel_2_6.$cecha_char_rel_2_7.$cecha_char_rel_2_8.$cecha_char_rel_2_9.$cecha_char_rel_2_10.$cecha_char_rel_2_11.$cecha_char_rel_2_12); 

$cecha_char_rel_3 = ($cecha_char_rel_3_1.$cecha_char_rel_3_2.$cecha_char_rel_3_3.$cecha_char_rel_3_4.$cecha_char_rel_3_5.$cecha_char_rel_3_6.$cecha_char_rel_3_7.$cecha_char_rel_3_8.$cecha_char_rel_3_9.$cecha_char_rel_3_10.$cecha_char_rel_3_11.$cecha_char_rel_3_12); 

$cecha_char_rel_4 = ($cecha_char_rel_4_1.$cecha_char_rel_4_2.$cecha_char_rel_4_3.$cecha_char_rel_4_4.$cecha_char_rel_4_5.$cecha_char_rel_4_6.$cecha_char_rel_4_7.$cecha_char_rel_4_8.$cecha_char_rel_4_9.$cecha_char_rel_4_10.$cecha_char_rel_4_11.$cecha_char_rel_4_12); 

$cecha_char_rel_5 = ($cecha_char_rel_5_1.$cecha_char_rel_5_2.$cecha_char_rel_5_3.$cecha_char_rel_5_4.$cecha_char_rel_5_5.$cecha_char_rel_5_6.$cecha_char_rel_5_7.$cecha_char_rel_5_8.$cecha_char_rel_5_9.$cecha_char_rel_5_10.$cecha_char_rel_5_11.$cecha_char_rel_5_12); 

$cecha_char_rel_6 = ($cecha_char_rel_6_1.$cecha_char_rel_6_2.$cecha_char_rel_6_3.$cecha_char_rel_6_4.$cecha_char_rel_6_5.$cecha_char_rel_6_6.$cecha_char_rel_6_7.$cecha_char_rel_6_8.$cecha_char_rel_6_9.$cecha_char_rel_6_10.$cecha_char_rel_6_11.$cecha_char_rel_6_12); 

$cecha_char_rel_7 = ($cecha_char_rel_7_1.$cecha_char_rel_7_2.$cecha_char_rel_7_3.$cecha_char_rel_7_4.$cecha_char_rel_7_5.$cecha_char_rel_7_6.$cecha_char_rel_7_7.$cecha_char_rel_7_8.$cecha_char_rel_7_9.$cecha_char_rel_7_10.$cecha_char_rel_7_11.$cecha_char_rel_7_12); 

$cecha_char_rel_8 = ($cecha_char_rel_8_1.$cecha_char_rel_8_2.$cecha_char_rel_8_3.$cecha_char_rel_8_4.$cecha_char_rel_8_5.$cecha_char_rel_8_6.$cecha_char_rel_8_7.$cecha_char_rel_8_8.$cecha_char_rel_8_9.$cecha_char_rel_8_10.$cecha_char_rel_8_11.$cecha_char_rel_8_12); 

$cecha_char_rel_9 = ($cecha_char_rel_9_1.$cecha_char_rel_9_2.$cecha_char_rel_9_3.$cecha_char_rel_9_4.$cecha_char_rel_9_5.$cecha_char_rel_9_6.$cecha_char_rel_9_7.$cecha_char_rel_9_8.$cecha_char_rel_9_9.$cecha_char_rel_9_10.$cecha_char_rel_9_11.$cecha_char_rel_9_12); 

$cecha_char_rel_10 = ($cecha_char_rel_10_1.$cecha_char_rel_10_2.$cecha_char_rel_10_3.$cecha_char_rel_10_4.$cecha_char_rel_10_5.$cecha_char_rel_10_6.$cecha_char_rel_10_7.$cecha_char_rel_10_8.$cecha_char_rel_10_9.$cecha_char_rel_10_10.$cecha_char_rel_10_11.$cecha_char_rel_10_12); 

$cecha_char_rel_11 = ($cecha_char_rel_11_1.$cecha_char_rel_11_2.$cecha_char_rel_11_3.$cecha_char_rel_11_4.$cecha_char_rel_11_5.$cecha_char_rel_11_6.$cecha_char_rel_11_7.$cecha_char_rel_11_8.$cecha_char_rel_11_9.$cecha_char_rel_11_10.$cecha_char_rel_11_11.$cecha_char_rel_11_12); 

$cecha_char_rel_12 = ($cecha_char_rel_12_1.$cecha_char_rel_12_2.$cecha_char_rel_12_3.$cecha_char_rel_12_4.$cecha_char_rel_12_5.$cecha_char_rel_12_6.$cecha_char_rel_12_7.$cecha_char_rel_12_8.$cecha_char_rel_12_9.$cecha_char_rel_12_10.$cecha_char_rel_12_11.$cecha_char_rel_12_12); 

$cecha_char_rel_13 = ($cecha_char_rel_13_1.$cecha_char_rel_13_2.$cecha_char_rel_13_3.$cecha_char_rel_13_4.$cecha_char_rel_13_5.$cecha_char_rel_13_6.$cecha_char_rel_13_7.$cecha_char_rel_13_8.$cecha_char_rel_13_9.$cecha_char_rel_13_10.$cecha_char_rel_13_11.$cecha_char_rel_13_12); 

$cecha_char_rel_14 = ($cecha_char_rel_14_1.$cecha_char_rel_14_2.$cecha_char_rel_14_3.$cecha_char_rel_14_4.$cecha_char_rel_14_5.$cecha_char_rel_14_6.$cecha_char_rel_14_7.$cecha_char_rel_14_8.$cecha_char_rel_14_9.$cecha_char_rel_14_10.$cecha_char_rel_14_11.$cecha_char_rel_14_12); 

$cecha_char_rel_15 = ($cecha_char_rel_15_1.$cecha_char_rel_15_2.$cecha_char_rel_15_3.$cecha_char_rel_15_4.$cecha_char_rel_15_5.$cecha_char_rel_15_6.$cecha_char_rel_15_7.$cecha_char_rel_15_8.$cecha_char_rel_15_9.$cecha_char_rel_15_10.$cecha_char_rel_15_11.$cecha_char_rel_15_12); 

$cecha_char_rel_16 = ($cecha_char_rel_16_1.$cecha_char_rel_16_2.$cecha_char_rel_16_3.$cecha_char_rel_16_4.$cecha_char_rel_16_5.$cecha_char_rel_16_6.$cecha_char_rel_16_7.$cecha_char_rel_16_8.$cecha_char_rel_16_9.$cecha_char_rel_16_10.$cecha_char_rel_16_11.$cecha_char_rel_16_12); 

$cecha_char_rel_17 = ($cecha_char_rel_17_1.$cecha_char_rel_17_2.$cecha_char_rel_17_3.$cecha_char_rel_17_4.$cecha_char_rel_17_5.$cecha_char_rel_17_6.$cecha_char_rel_17_7.$cecha_char_rel_17_8.$cecha_char_rel_17_9.$cecha_char_rel_17_10.$cecha_char_rel_17_11.$cecha_char_rel_17_12); 

$cecha_char_rel_18 = ($cecha_char_rel_18_1.$cecha_char_rel_18_2.$cecha_char_rel_18_3.$cecha_char_rel_18_4.$cecha_char_rel_18_5.$cecha_char_rel_18_6.$cecha_char_rel_18_7.$cecha_char_rel_18_8.$cecha_char_rel_18_9.$cecha_char_rel_18_10.$cecha_char_rel_18_11.$cecha_char_rel_18_12); 

$cecha_char_rel_19 = ($cecha_char_rel_19_1.$cecha_char_rel_19_2.$cecha_char_rel_19_3.$cecha_char_rel_19_4.$cecha_char_rel_19_5.$cecha_char_rel_19_6.$cecha_char_rel_19_7.$cecha_char_rel_19_8.$cecha_char_rel_19_9.$cecha_char_rel_19_10.$cecha_char_rel_19_11.$cecha_char_rel_19_12); 

$cecha_char_rel_20 = ($cecha_char_rel_20_1.$cecha_char_rel_20_2.$cecha_char_rel_20_3.$cecha_char_rel_20_4.$cecha_char_rel_20_5.$cecha_char_rel_20_6.$cecha_char_rel_20_7.$cecha_char_rel_20_8.$cecha_char_rel_20_9.$cecha_char_rel_20_10.$cecha_char_rel_20_11.$cecha_char_rel_20_12); 

  


if ($_GET['powtorzenia']){
$powtorzenia = $_GET['powtorzenia'];
}
else {
$powtorzenia = '';
}


$nowy_tekst_zmiana = str_repeat($nowy_tekst_enter, $powtorzenia);





//<span id="wyrazy1">0</span>
//<input type="button" onClick="javascript:history.back()" value="POWR&#211;T">	

print '

		<div id="myForm" class="textarea_stop">
        <div class="nazwa">Cechy kolorystyczne: tabela ZLOVC_COLORS</div>

		<textarea onkeyup="litery1();" id="obszar1" cols="20" rows="2" type="text" style="width: 600px; height: 200px; font-size: 12px;">'.$wariant_1.''.$wariant_2.''.$wariant_3.''.$wariant_4.''.$wariant_5.''.$wariant_6.''.$wariant_7.''.$wariant_8.''.$wariant_9.''.$wariant_10.''.$wariant_11.''.$wariant_12.''.$wariant_13.''.$wariant_14.''.$wariant_15.''.$wariant_16.''.$wariant_17.''.$wariant_18.''.$wariant_19.''.$wariant_20.'</textarea>
		
		

		
		
		<div>
		<button class="przycisk_kopiuj_1" onclick="myFunction1()" onmouseout="outFunc()">
		
		<span id="myTooltip1">KOPIUJ</span>
		</button>	
		</div>
		
		</div>
		
		
		
		<div class="textarea_stop">
        <div class="nazwa">Cechy kolorystyczne: tabela ZLOVC_CHAR_REL</div>

		<textarea onkeyup="litery2();" id="obszar2" cols="20" rows="2" type="text" style="width: 400px; height: 200px; font-size: 12px;">'.$cecha_char_rel_1.''.$cecha_char_rel_2.''.$cecha_char_rel_3.''.$cecha_char_rel_4.''.$cecha_char_rel_5.''.$cecha_char_rel_6.''.$cecha_char_rel_7.''.$cecha_char_rel_8.''.$cecha_char_rel_9.''.$cecha_char_rel_10.''.$cecha_char_rel_11.''.$cecha_char_rel_12.''.$cecha_char_rel_13.''.$cecha_char_rel_14.''.$cecha_char_rel_15.''.$cecha_char_rel_16.''.$cecha_char_rel_17.''.$cecha_char_rel_18.''.$cecha_char_rel_19.''.$cecha_char_rel_20.'</textarea>
	
		
		<span id="wyrazy2">0</span>
		<div>
		<button class="przycisk_kopiuj_2" onclick="myFunction2()" onmouseout="outFunc()">
		
		<span id="myTooltip2">KOPIUJ</span>
		</button>	
		</div>
		
		</div>
		
		
		
		



';


}


else {






print '<form target="_blank" charset="UTF-8" action="cechy_kolorystyczne.php" method=GET>';

print '<table border="0" style="font-size:12px; font-family: Arial;">';


print '<div class="tytul"><input type="checkbox" name="sap" checked="checked"> Cechy kolorystyczne: tabela ZLOVC_COLORS i tabela ZLOVC_CHAR_REL</div>';

print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1_naglowek">';
//print '<div style="font-size:12px;">ALL<input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox(this.checked);" />';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2_naglowek">';
print '<div>CECHA KOLORU</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3_naglowek">';
print '<div>NAZWA KOLORU</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4_naglowek">';
print '<div>KOMÓRKA</div>';
print '</td>';

print '</tr>';





print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_1" value="zaznacz"/>';
print '<div>1</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_1">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_1">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_1" value="zaznacz_2"/><span>B1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_2" value="zaznacz"/>';
print '<div>2</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_2">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_2">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_2" value="zaznacz_2"/><span>B2</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_3" value="zaznacz"/>';
print '<div>3</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_3">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_3">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_3" value="zaznacz_2"/><span>K1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_4" value="zaznacz"/>';
print '<div>4</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_4">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_4">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_4" value="zaznacz_2"/><span>K2</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_5" value="zaznacz"/>';
print '<div>5</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_5">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_5">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_5" value="zaznacz_2"/><span>F1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_6" value="zaznacz"/>';
print '<div>6</div>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_6">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_6">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_6" value="zaznacz_2"/><span>F2</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_7" value="zaznacz"/>';
print '<div>7</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_7">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_7">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_7" value="zaznacz_2"/><span>S1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_8" value="zaznacz"/>';
print '<div>8</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_8">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_8">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_8" value="zaznacz_2"/><span>S2</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_9" value="zaznacz"/>';
print '<div>9</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_9">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_9">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_9" value="zaznacz_2"/><span>T1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_10" value="zaznacz"/>';
print '<div>10</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_10">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_10">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_10" value="zaznacz_2"/><span>U1</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_11" value="zaznacz"/>';
print '<div>11</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_11">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_11">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_11" value="zaznacz_2"/><span>U2</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_12" value="zaznacz"/>';
print '<div>12</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_12">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_12">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<input type="checkbox" name="wybor_cechy_12" value="zaznacz_2"/><span>U3</span>';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_13" value="zaznacz"/>';
print '<div>13</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_13">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_13">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';
print '<div style="font-size:12px;"><input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox_2(this.checked);" />WSZYSTKIE';
print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_14" value="zaznacz"/>';
print '<div>14</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_14">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_14">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_15" value="zaznacz"/>';
print '<div>15</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_15">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_15">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_16" value="zaznacz"/>';
print '<div>16</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_16">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_16">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_17" value="zaznacz"/>';
print '<div>17</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_17">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_17">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_18" value="zaznacz"/>';
print '<div>18</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_18">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_18">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_19" value="zaznacz"/>';
print '<div>19</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_19">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_19">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';


print '<tr>';
print '<td valign="middle" class="tabela_kolumna_1">';
//print '<input type="checkbox" name="kolor_20" value="zaznacz"/>';
print '<div>20</div>';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_2">';
print '<input type="text" class="okno_1" name="wartosc_cechy_20">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_3">';
print '<input type="text" class="okno_2" name="nazwa_koloru_20">';
print '</td>';

print '<td valign="middle" class="tabela_kolumna_4">';

print '</td>';
print '</tr>';

print '<tr>';

print '<td valign="middle" class="tabela_kolumna_1">';
print '</td>';
print '<td valign="middle" colspan="2" class="tabela_kolumna_2">';
print '<input type="submit" class="przycisk_pokaz" value="POKA&#379;">';

print '</td>';
print '</tr>';


print '</form>';

print '</table>';


}

?>



</body>
</html>

