

<?php
//login
fn login(){

};


$emil=$_POST['username'];
$pass=$_POST['password'];
if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        if($emil==="a.mkamel42@gmail.com"&&$pass==="1234"&&$pass>=8)
            {
                header("Location: index.php");
                exit();
            }
            else if($emil==="mona"&&$pass==="5678")
            {
                header("Location: img7.jpg");
                exit();
            }
            else{
                header("Location: ar.php");
            }
    }


    ?>

    <?php
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

?>