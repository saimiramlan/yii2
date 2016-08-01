<?php
class Training {
   function getUser() {
       $username = "superadmin";
       $usertype = "admin";

       if($usertype == "user"){
           return "Welcome ".$username.". User type is User";
       }else{
           return "Welcome ".$username.". User type is Admin";
       }
   }
   function getCGPA($cgpa) {
       $name = "Rossaimi";
       $course = "Bachelor in Science Computer (Software Engineering)";
       if ($cgpa == 4.0) {
           $grade = "High Distinction";
       } else if ($cgpa >= 3.33 && $cgpa <= 3.99) {
           $grade = "Distinction";
       } else if ($cgpa >= 2.67 && $cgpa <= 3.32) {
           $grade = "Credit";
       } else if ($cgpa >= 2.00 && $cgpa <= 2.66) {
           $grade = "Pass";
       } else if ($cgpa <= 1.99) {
           $grade = "Failed";
       } else {
           $grade = null;
       }
       if ($grade == null) {
           return "Please Enter the correct CGPA";
       } else {
           return "Welcome " . $name . ". You have enroll " . $course . ". Based on your CGPA (" . $cgpa . "), your grade is " . $grade;
       }
   }
   function calculateGSTService($item1,$item2,$gst, $service) {
    $grandtotal = ($item1+$item2)+(($item1+$item2) * ($gst-$service));
    return $grandtotal;
   }
}
$train = new Training;
echo $train->getUser().'<br/>';
echo $train->getCGPA(3.3).'<br/>';

echo $train->calculateGSTService(1000.00, 5000.00, 0.06, 0.10);
?>
