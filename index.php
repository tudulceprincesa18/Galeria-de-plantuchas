<!DOCTYPE html>
<html>
<head>
<title> mis plantitas </title>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos.css">
</head>
<body>

<header>
<nav id="botones">
<ul>
    <li><a href="index.php?id=mar#descripcion"> Martina </a> </li>
    <li> <a href="index.php?id=va#descripcion"> Vanessa </a> </li>
    <li> <a href="index.php?id=le#descripcion"> Lenina </a> </li>
    <li> <a href="index.php?id=se#descripcion"> Señor enojado </a> </li>
    <li> <a href="index.php?id=pir#descripcion"> Pirotecnia </a> </li>
    <li> <a href="index.php?id=ma#descripcion"> Macuca </a> </li>
    <li> <a href="index.php?id=ba#descripcion"> Batata </a> </li>
    <li> <a href="index.php?id=pi#descripcion"> Piruja </a> </li>
</ul>
</nav>
</header>

<section id="galeria">
  <?php
    if(isset($_GET['id'])){

     switch ($_GET['id']){

 case'mar':
  $titulo='Martina';
  $foto='imagenes/martina.jpeg';
  $texto='Martina es hermosa. El conflicto principal es que las florecitas se me estan muriendo, ya le cambie la tierra y todo. estoy pensando en hacer composta casera para ponerle a la planta por que esta medio triste Martinita. 
  Yo la veo muy deprimida ultimamente, a veces pienso que es por que tal vez es invierno y en primavera-verano se va a sentir mejor.
  La verdad es una flor hermosa y la tengo que regar un toque mas. 
  Se que es una flor, pero es la unica de mis plantas que no identifico la especie. ';
 break;

 case'va':
  $titulo='Vanessa';
  $foto='imagenes/vanessa.jpeg';
  $texto='Vanessa, cuando me la vendieron me dijeron que las hojas parecian orejitas de conejo y la verdad estyo totalmente de acuerdo. Vanessa es tierna y linda. 
  Pense que era un suculenta pero al final no se, creo que si igual. No necesita mucha agua, todavia esta chiquita y no es tan dificil mantenerla. ';
 break;

 case'le':
  $titulo='Lenina';
  $foto='imagenes/lenina.jpeg';
  $texto=' Le puse ese nombre por uno de mis libros favoritos "un mundo feliz" el personaje de lenina me fascina y ademas como la asocio al color violeta y la planta es violeta las uni.
  Creo que Lenina es una lavanda, aunque tampoco estoy segura. Las flores de lenina estan caidas de noche pero de dia es como se levantan un poco y la pongo al sol para que se ponga linda y feliz.';
 break;

 case'se':
  $titulo='Señor enojado';
  $foto='imagenes/señor.jpeg';
  $texto=' El señor enojado siempre parece enojado. Es el cactus mas grueso que cuide jamas. No se deja agarrar por los pinchitos, pero cuando lo replante no me dio miedo de pincharme. Es un cactus muy rebelde y no le gusta mucho que le hablen, prefiere estar tranquilo. ';
 break;

 case'pir':
  $titulo='Pirotecnia';
  $foto='imagenes/pirotecnia.jpeg';
  $texto='Pirotecnia es un cactus, le puse asi por que sus formas la hacen ver como un cactus explosivo, parece un cactus que exploto, pero en realidad es ella con sus hijitos alrededor. Replantar a Pirotecnia fue dificil, sobre todo por que sus hijos no se quedaban quietos. No necesita mucha agua y  la pongo al sol para que se relaje.';
 break;

 case'ma':
  $titulo='Macuca';
  $foto='imagenes/macuca.jpeg';
  $texto='Macuca es un cactus. Macuca es muy graciosa, cuando la veo pienso que parece como una torta de cactus, no se. Macuca no necesita mucha agua pero siempre la pongo al sol por que le gusta broncearse un poco. ';
 break;

 case'ba':
  $titulo='Batata';
  $foto='imagenes/batata.jpeg';
  $texto='Batata le puse asi por que cuando la compre era chiquita y parecia una batatita, a pesar del color y demas. Es un cactus y es un cactus con mucha personalidad. esta un poco inclinada, pero a ver si se endereza un poco con el tiempo. ';
 break;

 case'pi':
  $titulo='Piruja';
  $foto='imagenes/piruja.jpg';
  $texto='Piruja es una suculenta, la cuido desde que es una bebita. La adopte en un bautismo, estaba de souvenir. 
  Rompi el frasco de vidrio para liberarla y la plante para que creciera, hoy en dia es una planta enorme, pero le falta agua.
  Piruja a veces parece que te quiere abrazar, por sus largos brazos curvos y extendidos. Sus hojas en invierno se deterioran,
  pero es una suculenta, calculo que crecio tanto que no estan tan llenitas las hojas por que tampoco la riego tanto.';
 break;
}

?>

<nav id="contenido">
<div id="foto"style="background-image: url(<?php echo $foto?>);"> </div>

<div id="descripcion">
<h1> <?php echo $titulo; ?> </h1>
<h3> <?php echo $texto; ?> </h3>
</div>

</nav>

 <?php  
  } 
   ?>
</section>
</body>
</html>