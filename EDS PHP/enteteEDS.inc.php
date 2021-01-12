<!DOCTYPE html>
<?php
$variable1=" EDUCATION DANS LES ARTS ET LES SCIENCES ";
?>
 <div class="heure">
                <div class="ora">
                <?php
                     echo "<h6> Aujourd'hui le ". date('d / M / Y H:m:s')."</h6>";
                ?>
                </div>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <link href="EDS.css" rel="stylesheet"/>
<?php
echo "<title>Une page pleine d'inclusions $variable1</title>";
?>
</head>
<body>
<?php
$variableext="Verset à mémoriser</br>
« Les cieux racontent la gloire de Dieu,
et l’étendue manifeste l’œuvre de ses mains »
(Ps 19.1,)"; 
echo "<div><h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">
LECON 10: $variable1 </h1>";
echo "<h3> $variableext</h3>";
 
?>