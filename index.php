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

<?php 
class HUMAN2 {
  protected $grade;
  protected $school;
  protected $district;

  public function __construct ( $grade, $school, $district ) {
    $this->grade = $grade;
    $this->school = $school;
    $this->district = $district;
  }
}

// and you would use this as:
$human = new HUMAN2 ( '10th', 'Pasadena High School', 'Pasadena Unified School District' );
?>
<?php 
class HUMAN3 {
  protected $startingyear;
  protected $endingyear;
  protected $yearsleft;

  public function __construct ( $startingyear, $endingyear, $yearsleft ) {
    $this->startingyear = $startingyear;
    $this->endingyear = $endingyear;
    $this->yearsleft = $yearsleft;
  }
}

// and you would use this as:
$human = new HUMAN3 ( '2014', '2017', '2' );
?>