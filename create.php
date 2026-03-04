<?php
 //create
    /* $name=$_POST["Full_Name"];
    $Email=$_POST["Email"];
    $password=$_POST["Password"];
    $password1=$_POST["Confirm_Password"];
    $phone=$_POST["Phone"];
    $dada=$_POST["dob"];
    $Add=$_POST["Address"];
    $Car_Plate=$_POST["Car_Plate"];
    $brand=$_POST["car_type"];
    $model=$_POST["car_model"];

    $customBrand=$_POST["custom_brand"];
    $customModel=$_POST["custom_model"];
    
    $image=$_FILES["img"]; */
    
   

    if ($_SERVER["REQUEST_METHOD"]==="POST") {
    
        $name=$_POST["Full_Name"] ?? "";
        $Email=$_POST["Email"]  ??  "";
    $password=$_POST["Password"] ?? "";
    $password1=$_POST["Confirm_Password"] ?? "";
    $phone=$_POST["Phone"] ?? "";
    $dada=$_POST["dob"]??"";
    $Add=$_POST["Address"] ?? "";

    $Car_Plate=$_POST["Car_Plate"] ?? "";
    $brand=$_POST["car_type"] ?? "";
    $model=$_POST["car_model"] ?? "";

    $customBrand=$_POST["custom_brand"] ?? "";
    $customModel=$_POST["custom_model"] ?? "";
    
     $image=$_FILES["img"] ??  null;
    
      $car=($brand&&$model)||($customBrand&&$customModel);
        if ($password !== $password1)
        {
            echo"Passwords not match";
            exit();
        }
        if (
        $name && $Email && $password && $phone && $dob && $Add && $Car_Plate && $car) {
        header("Location: index.php");
        exit();
    }

        else{
            header("Location: ar.php");
            exit();
        }
    }
