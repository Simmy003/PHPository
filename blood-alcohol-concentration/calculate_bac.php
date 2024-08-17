<?php
      $weight = $_POST["weight"];
      $unit = $_POST["unit"]; 
      $gender = $_POST["gender"];
      $drinks = $_POST["drinks"];
      $alcohol_content = $_POST["alcohol_content"];
      $time_elapsed = $_POST["time_elapsed"];
      
      $alcoholConsumed = $alcohol_content * $drinks;
      
    //   if ($unit == "kg") {
    //     $weight = $weight * 2.20462;
    // }
      
      if($gender == 'female'){
        $genderConstant = 0.66;
      }
      else{
        $genderConstant = 0.73;
      }
      
      
      $result = ($alcoholConsumed * 5.14) / ($weight * $genderConstant) - (0.015 * $time_elapsed);
      $roundedBAC = round($result, 2);
      echo "Your Blood Alcohol Concentration (BAC) is: " . $roundedBAC . "%<br>";
      
      if($result <= 0.08){
          echo "Drive safe!!";
        }
        else{
            echo "Don't drink and drive!!";
        }
  
    // header("Loaction:/index.php");
?>