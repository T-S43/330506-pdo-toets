<?php
// var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO pizza (bodemformaat, saus, pizzatopping, peterselie, oregano, chiliflakes, zwartepeper)
  VALUES (:bodemformaat, :saus, :pizzatopping, :peterselie, :oregano, :chiliflakes, :zwartepeper)");
//   $stmt->bindParam(':id', $id);
  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatopping', $pizzatopping);
  $stmt->bindParam(':peterselie', $peterselie);
  $stmt->bindParam(':oregano', $oregano);
  $stmt->bindParam(':chiliflakes', $chiliflakes);
  $stmt->bindParam(':zwartepeper', $zwartepeper);


$bodemformaat = $_POST["bodemformaat"];
$saus = $_POST["saus"];
$pizzatopping = $_POST["pizzatopping"];
$peterselie = $_POST["peterselie"];
$oregano = $_POST["oregano"];
$chiliflakes = $_POST["chiliflakes"];
$zwartepeper = $_POST["zwartepeper"];
//   insert a row   //
  $stmt->execute();


  // insert a row
//   $id = 1;
//   $firstname = "John";
//   $infix = "dil";
//   $lastname = "Doe";
//   $stmt->execute();

  echo "New records created successfully";
  header("Refresh: 2; url = ./index.php");
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>