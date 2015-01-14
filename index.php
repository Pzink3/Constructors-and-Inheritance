<link rel="stylesheet" type="text/css" href="../ConstructorsandInheritance/css/font-face.css">
<link rel="stylesheet" type="text/css" href="../ConstructorsandInheritance/css/main-font.css">
<?php 
class MyExample1 {
  public $name;
  public $age;
  public $mascot;

  public function __construct ( $name, $age, $mascot ) {
    $this->name = $name;
    $this->age = $age;
    $this->mascot = $mascot;
  }


public function message() {
return "Hello world! My name is " . $this->name . ", and I am a " . $this->age . "-year old " . $this->mascot . "!";
}
}
// and you would use this as:
$myexample1 = new MyExample1 ( 'Parker', '16', 'bulldog' );
echo $myexample1->message();
?>

<?php 
class MyExample2 {
  public $grade;
  public $school;
  public $district;

  public function __construct ( $grade, $school, $district ) {
    $this->grade = $grade;
    $this->school = $school;
    $this->district = $district;
  }
 public function message2() {
              return "I am also a " . $this->grade . " grader at " . $this->school . ", which is associated with the " . $this->district . ".";
            }
          }

// and you would use this as:
$myexample2 = new MyExample2 ( '10th', 'Pasadena High School', 'Pasadena Unified School District' );
echo $myexample2->message2();
?>
<?php 
class MyExample3 {
  public $startingyear;
  public $endingyear;
  public $yearsleft;

  public function __construct ( $startingyear, $endingyear, $yearsleft ) {
    $this->startingyear = $startingyear;
    $this->endingyear = $endingyear;
    $this->yearsleft = $yearsleft;
  }
 public function message3() {
              return "I have started school in " . $this->startingyear . " and will soon be ended in  " . $this->endingyear . ". So right now I still have only " . $this->yearsleft . " years left until I leave PHS.";
            }
          }

// and you would use this as:
$myexample3 = new MyExample3 ( '2014', '2017', '2' );
echo $myexample3->message3();
?>