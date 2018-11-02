<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $term = clean_input($_GET["searchTerm"]);
}
function clean_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
echo <p>You searched for . $term .</p>;
# Your email address is: <?php echo $_GET["email"];

?>
</body>
</html>
