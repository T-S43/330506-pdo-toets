<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql =    "UPDATE pizza 
            SET bodemformaat = :bodemformaat,
                saus = :saus,
                pizzatopping = :pizzatopping,
                peterselie = :peterselie,
                oregano = :oregano,
                chiliflakes = :chiliflakes,
                zwartepeper = :zwartepeper
            WHERE id= :id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatopping', $pizzatopping);
  $stmt->bindParam(':peterselie', $peterselie);
  $stmt->bindParam(':oregano', $oregano);
  $stmt->bindParam(':chiliflakes', $chiliflakes);
  $stmt->bindParam(':zwartepeper', $zwartepeper);
  $stmt->bindParam(':id', $id);

  $bodemformaat = $_POST["bodemformaat"];
  $saus = $_POST["saus"];
  $pizzatopping = $_POST["pizzatopping"];
  $peterselie = $_POST["peterselie"];
  $oregano = $_POST["oregano"];
  $chiliflakes = $_POST["chiliflakes"];
  $zwartepeper = $_POST["zwartepeper"];
  $id = $_POST["id"];

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

header("Refresh: 2; url = ./read.php");

$conn = null;
?>