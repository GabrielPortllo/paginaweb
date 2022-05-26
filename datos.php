<?php

$nombre = $_GET['nom'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];
$p6 = $_GET['p6'];
$p7 = $_GET['p7'];
$p8 = $_GET['p8'];

echo "<h1>Respuestas</h1>";
echo "la persona encuestad@:<br/>" .  $nombre . "<br/>";
echo "¿Has escuchado de computo en la nuve?<br/>" . $p1 . "<br/>";
echo "¿cree usted es importante que la FIME de cloud computing?<br/>" .  $p2 . "<br/>";
echo "Conoce cuales sevicios son los que ofrecen en cloud computing<br/>" .  $p3 . "<br/>";
echo "cual de los servicios de cloud computing que conoces, crees que se pueda ofrecer en la FIME<br/>" .  $p4 . "<br/>";
echo "¿cuales serian los principales beneficios de cloud computing en la carrera?<br/>" .  $p5 . "<br/>";
echo "¿Crees que es importante Cloud Computing para el mundo?<br/>" .  $p6 . "<br/>";
echo "¿Le intereesa Cloud Computing?<br/>" .  $p7 . "<br/>";
echo "¿Le contaria a otra persona sobre Cloud Computing?<br/>" .  $p8 . "<br/>";
?>