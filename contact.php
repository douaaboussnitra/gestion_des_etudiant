<?php
include "conexion.php";
if ($_SERVER ["REQUEST_METHOD"] =="POST")

{
    $nom     =$_POST ["nom"];
    $prenom  =$_POST ["prenom"];
    $email   =$_POST ["email"];
    $num     =$_POST ["num"];
    $message =$_POST ["message"];

    $sql = " INSERT INTO contact (nom,prenom,email,num,message) VALUES (?,?,?,?,?)" ;

    $stmt = $con-> prepare ($sql);
    $stmt->bind_param("sssis", $nom,$prenom ,$email,$num,$message);

    if($stmt->execute()) {
        echo "Value stored successfully.";
    }
    else {
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
    <table border="5">
        <tr>
            <td> 
                <label for="nom"> nom</label> 
                <input type="text" name="nom" id="nom">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="prenom"> prenom</label> 
                <input type="text" name="prenom" id="prenom">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="email"> email</label> 
                <input type="email" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="num"> num</label> 
                <input type="number" name="num" id="num">
            </td>
        </tr>
        <tr>
            <td> 
                <label for="message"> message</label> 
                <input type="text" name="message" id="message">
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