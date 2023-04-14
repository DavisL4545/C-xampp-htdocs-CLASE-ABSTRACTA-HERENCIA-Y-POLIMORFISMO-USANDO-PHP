//no me alcanzo el tiempo inge llegue a la casa a las 8pm y el visual de mi maquina
//tiene problemas no me lee el construct ni las lineas de comentarios
<?php
class Animal{
    public function roar(){
        echo "El";
    }
}

class Gato extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }

    public function roar(){
        echo $this->nombre."miaguea, MIAU!!";
    }
}

class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar()
    {
        echo $this->nombre."ladrar, wau!";
    }
}

class Vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        '$this->nombre=$nombre;'
    }

    public function roar(){
        echo $this->nombre."le hace MU!!";
    }
}
class Mono extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function hablar()
    {
        echo $this->nombre."a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z";
    }
}

funtion roarAnimal(Animal $animal)
{
    $animal->roar();
}

$gato=new Gato("gato")
$perro=new Perro("perro")
$vaca=new Vaca("vaca")
$mono=new Mono("mono")

if (isset($_POST['gato'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato)?>");
    window.speechSynthesis.speack(msg);
</script>
<?php
}
else if(isset($_POST['PERRO'])){
    ?>
    <SCRIPT>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['vaca'])){
    ?>
    <SCRIPT>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['mono'])){
    ?>
    <SCRIPT>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($mono)?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}

?>

