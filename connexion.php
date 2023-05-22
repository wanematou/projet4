<?php
$servername='localhost';
$username='root';
$password='';
$dbname='gestion';

$conn= mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("erreur de connexion à la base de donnée " . mysqli_connect_error()); 
}


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date_de_naissance'];
$genre = $_POST['genre'];
$entre = $_post['date_entree'];
$personne = $post['personne'];

$sql ="INSERT INTO etudiant (nom, prenom, date_de_naissance, genre, date_entree, personne) VALUES ('$nom','$prenom','$date','$genre','$entre','$personne')";
        
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)){
    echo "Enregistrement reussi";
}else{
    echo "erreur: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
?>
