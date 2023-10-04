<?php
 include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $value_to_store = $_POST["value_to_store"];
  $value_to = $_POST["value_to"];
  $value = $_POST["value"];

  $sql = "INSERT INTO etudiant (nom,prenom,age) VALUES (?,?,?)";

  $stmt = $con->prepare($sql);
  $stmt->bind_param("ssi", $value_to_store,$value_to,$value);
  
  if ($stmt->execute()) {
      echo "Value stored successfully.";
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "header.html"
    ?>
  
    <form method="post" action="">
    <table border="3">
      <tr>
        <td>
      <label for="value_to_store">nom</label>
      <input type="text" name="value_to_store" id="value_to_store">
       </td>
      </tr>

      <tr>
      <td>
      <label for="value_to_store">prenom</label>
      <input type="text" name="value_to" id="value_to_store">
      </td>
      </tr>

      <tr>
      <td>
      <label for="value_to_store">age</label>
      <input type="number" name="value" id="value_to_store">
      </td>
      </tr>

      <tr>
      <td>
      <input type="submit" value="Submit">
      </td>
      </tr>

      </table>
    </form>

    
    
</body>
</html>