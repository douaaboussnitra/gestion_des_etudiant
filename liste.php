<?php include "conexion.php";
$req = "select * from etudiant";
$res = $con -> query($req);
if(!$res){
    die("erreur dans la requette");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "header.html"
    ?>
    <table border=4>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
    </tr>
<?php
 while ($row = $res->fetch_assoc(
    )) {
    echo "<tr>";
    echo "<td>". $row["id"] . "</td>";
    echo "<td>". $row["nom"] . "</td>";
    echo "<td>". $row["prenom"]. "</td>";
    echo "<td>". $row["age"] . "</td>";
    echo "</tr>";
} 
?>
</table>