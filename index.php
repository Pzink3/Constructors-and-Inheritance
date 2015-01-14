<?php 
class HUMAN {
  protected $name;
  protected $age;
  protected $mascot;

  public function __construct ( $name, $age, $mascot ) {
    $this->name = $name;
    $this->age = $age;
    $this->mascot = $mascot;
  }
}

// and you would use this as:
$human = new HUMAN ( 'Parker', '16', 'bulldog' );
?>