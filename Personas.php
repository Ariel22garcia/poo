<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
class Persona {
     public $nombre;
	 public $apellido;
     public function hablar(){
     echo "soy ". $this->nombre . " y estoy hablando";
	 } 
	 public function acariciar($perro){
	 $perro->moverCola();
	 }	 
}
class Perro {
    public $nombre;
	public function moverCola (){
	echo "mover la cola";
	}
}
$p = new Persona(); 
$p->nombre = "Micaela";
$p->apellido = "Garcia";

$p1 = new persona();
$p1->nombre = "Juan";
$p1->apellido = "Perez";

echo "hola " .$p->nombre."<br>";
echo "hola " .$p1->nombre;
echo "<br>";
$p->hablar();
$p1->hablar();

$perro = new Perro();
$perro->moverCola(); 
$p->acariciar($perro);
?>
</body>
</html>
