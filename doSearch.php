<html>
<body>

You searched for <?php echo $_GET["searchTerm"]; ?><br>
# Your email address is: <?php echo $_GET["email"]; ?>

php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $term = clean_input($_GET["searchTerm"]);
}
function clean_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
</body>
</html>
