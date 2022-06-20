<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile) -->

<?php
class Movie {

  public $titolo;
  public $genere;
  public $durata;
  
  
  public function __construct($_titolo, $_genere, $_durata){
         $this->titolo =  $_titolo;
         $this->genere =  $_genere;
         $this->durata =  $_durata;
  }

  public function minutesToHours(){
    return $this->durata / 60;
 }

}


$harryPotter = new Movie ("Harry Potter", "Fantasy", 180);
$matrix = new Movie ("Matrix", "Fantascienza", 150);


var_dump($harryPotter);
var_dump($matrix);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>

<body>
    
  <h3>Titolo: <?php echo $harryPotter->titolo; ?></h3>
                
  <h4>Genere: <?php echo $harryPotter->genere; ?></h4>

  <h4>Durata: <?php echo $harryPotter->minutesToHours() ?> ore</h4>

  <hr>

  <h3>Titolo: <?php echo $matrix->titolo; ?></h3>
                
  <h4>Genere: <?php echo $matrix->genere; ?></h4>

  <h4>Durata: <?php echo $matrix->minutesToHours() ?> ore</h4>

  <hr>
              
               
</body>

</html>
