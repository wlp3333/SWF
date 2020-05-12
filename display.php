<?php
//n   = number of letters in the word
//l0  = letter 1
//l1  = letter 2
//l2  = letter 3
//l3  = letter 4
//l4  = letter 5
//l5  = letter 6
//l6  = letter 7
//l7  = letter 8
//l8  = letter 9
//l9  = letter 10
//l10 = letter 11
//l11 = letter 12
//l12 = letter 13
$data_n = $_POST["n"];
$data_l0 = $_POST["l0"];
$data_l1 = $_POST["l1"];
$data_l2 = $_POST["l2"];
$data_l3 = $_POST["l3"];
$data_l4 = $_POST["l4"];
$data_l5 = $_POST["l5"];
$data_l6 = $_POST["l6"];
$data_l7 = $_POST["l7"];
$data_l8 = $_POST["l8"];
$data_l9 = $_POST["l9"];
$data_l10 = $_POST["l10"];
$data_l11 = $_POST["l11"];
$data_l12 = $_POST["l12"];
//hmmm
$wordx = $data_l0 . $data_l1 . $data_l2 . $data_l3 . $data_l4 . $data_l5 . $data_l6. $data_l7. $data_l8. $data_l9. $data_l10 . $data_l11 . $data_l12;
$sqlx = "SELECT wordid, worddata, wordcount FROM `tbl_words` WHERE wordcount = $data_n and islive =1 and worddata like '$wordx' order by worddata ASC";
//echo "WORD is: $wordx";
//echo "<br><br>";
//echo "SQL is: $sqlx";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="css/main_style.css">
<title>DISPLAY</title>
</head>
<body>
<table style="text-align: left; width: 800px;"><tbody>
<tr><td><a href="/swf/index.php">Click here to go back!</a></td></tr>
<tr><td># - ID - WORD</td></tr>
<?php
//connection vars
$servername = "localhost";
$username = "swf";
$password = "ShyWthJKgTepJGCH";
$dbname = "swf";
//$dtnow = date("Y-m-d H:i:s");
$ix = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
$sql = $sqlx;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	$ix++;
	$worddatex = strtolower($row["worddata"]);
	$wordid = $row["wordid"];
	echo "<tr><td>$ix | $wordid | $worddatex</td></tr>";
}} 
else {
echo "<tr><td>NONE WERE FOUND</td></tr>";
}
$conn->close();
?>
</tbody></table>
</form>
</body>
</html>
