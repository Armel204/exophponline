<link rel="stylesheet" href="enregistre.css">
<title>minifacbookcity.com</title>
    <?php
include("connect.php");
$idcom=connexpdo('nimifacebookcity','myparam');
if(!empty($_POST['prenom'])&& !empty($_POST['email'])&& !empty($_POST['password']))
{
$id_user="\N";
$prenom=$idcom->quote($_POST['nom']); 
$nom=$idcom->quote($_POST['prenom']);
$mail=$idcom->quote($_POST['email']);
$password=$idcom->quote($_POST['password']);  
$age=$idcom->quote($_POST['civilité']);
$sexe=$idcom->quote($_POST['pays']); 
$date=$idcom->quote($_POST['date']); 


// Requête SQL
$requete="INSERT INTO utilisateur
VALUES($id_user,$nom,$prenom,$email,$password,$civilité,$pays,$date)"; 

$nblignes=$idcom->exec($requete); 
if($nblignes!=1) 
{
$mess_erreur=$idcom->errorInfo();
echo "Insertion impossible, code", $idcom->errorCode(),$mess_erreur[2];
echo "<script type=\"text/javascript\">
alert('Erreur : ".$idcom->errorCode()."')</script>";
}
else
{
echo "<script type=\"text/javascript\">
alert('Vous êtes enregistré. Votre numéro de client est :
". $idcom->lastInsertId()."')</script>"; 
$idcom=null;
}
}
else {echo "<h3>Formulaire à compléter !</h3>";}
?>

  </div>
  <div class="top">
    <img src="https://i.pinimg.com/originals/c7/59/1b/c7591b7d85af2009123a679496a5146d.png" alt="les combi", width="100%", height="40%">
    <p>Connectez-vous et retrouvez-vous ami(e)s où vous soyer !! <br>Profitez du plus grand temps entre ami et frère; et en Famille  </p>
    <img src="https://cdn.1min30.com/wp-content/uploads/2014/09/shutterstock_211297813-1.jpg" alt="les combi", width="100%", height="40%">

  </div>
</div> 