<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id17715760_maeva", "2oI(#cOGevd9bgb*", "id17715760_videotheque");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Titre = mysqli_real_escape_string($link, $_REQUEST['Titre']);
$Resume = mysqli_real_escape_string($link, $_REQUEST['Resume']);
$Image = mysqli_real_escape_string($link, $_REQUEST['Image']);
$trailer = mysqli_real_escape_string($link, $_REQUEST['trailer']);

 
// Attempt insert query execution
$sql = "INSERT INTO employees (Titre, Resume, Image,trailer) VALUES ('$Titre', '$Resume', '$Image','$trailer')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Détails</title>
</head>
<body>
<form action="create.php" method="post">
    <p>
        <label for="firstName">Titre:</label>
        <input type="text" name="Titre" id="firstName">
    </p>
    <p>
        <label for="lastName">Resume:</label>
        <input type="text" name="Resume" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Affiche:</label>
        <input type="text" name="Image" id="emailAddress">
    </p>
    <p>
        <label for="emailAddress">Trailer</label>
        <input type="text" name="trailer" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>
