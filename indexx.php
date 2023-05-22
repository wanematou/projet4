<!DOCTYPE html>
<html lang="en" class="i1">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">"
    <link rel="stylesheet" href="C:\xampp\htdocs\projet4\style\bootstrap-5.2.3-dist\css\bootstrap.min.css">
</head>
<section class="ina">
<body>
    <header class="haut">
        <ul class="ub">
            <img src="image/im1.jpg" alt="" height="100px" width="100px" >
          <li class="b"> <a href="index.php" class="mou">ENREGISTREMENT</a></li>
          <li class="b"> <a href="indexx.php" class="mou">LISTE</a> </li>
        </ul>
        <p class="c">Université<br></p> <p class="d"> Joseph Ki-Zerbo<br></p> <p class="e">UFR/SDS </p>
        </header>

      <?php
      $servername='localhost';
      $username='root';
      $password='';
      $dbname='gestion';
      
      $conn= mysqli_connect($servername, $username, $password, $dbname);
      
      if (!$conn) {
          die("erreur de connexion à la base de donnée " . mysqli_connect_error); 
      }

      $sql= "SELECT * FROM `etudiant`";
      $result = mysqli_query($conn, $sql); 
      
     echo "<table>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Date de naissance</td>
            <td>Genre</td>
            <td>Date d'entrée à l'UFR/SDS</td>
            <td>Personne à prevenir en cas de besoin </td>
        </tr>";
        if (mysqli_num_rows($result) > 0) {
          // Parcourir les lignes de données
          while($row = mysqli_fetch_assoc($result)) {
            echo      
        "<tr>
            <td> " . $row["ID"] . " </td>
            <td> " . $row["nom"] . " </td>
            <td> " . $row["prenom"] . " </td>
            <td> " . $row["date_de_naissance"] . " </td>
            <td> " . $row["genre"] . "</td>
            <td> " . $row["date_entree"] . " </td>
            <td> " . $row["personne"] . " </td>
        </tr>";
      } 
    }
    else {
      echo "0 résultats";
  }
  
  echo "</table>";
  
  mysqli_close($conn);
  ?>
    
</body>
</section>
<section class="ich">
<footer class="you">
    <img class="ot" src="image/im3.png" alt="" height="100px" width="100px">
    <p class="ket">Ministère de l'Enseignement Supérieur, <br> de la Recherche Scientifique et de l'Innovation</p>
    <p class="med">copyright by développeur</p>
</footer>
</section>  
</html>
