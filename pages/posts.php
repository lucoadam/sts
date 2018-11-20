<?php
/**
 * Created by PhpStorm.
 * User: alish
 * Date: 11/20/18
 * Time: 11:01 PM
 */
    if(isset($_POST['submit'])){
        $name=$_POST['first_name'];
        $lname=$_POST['last_name'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $projectDetail=$_POST['projectDetails'];
        echo $name.' '.$lname.' '.$email.' '.$phone.' '.$projectDetail;
        $con=mysqli_connect('localhost','root','admin','sts');
        if($con){
            $stmt="INSERT INTO project(name,last_name,phone,email,description) VALUES ('$name','$lname','$phone','$email','$projectDetail')";
            if(mysqli_query($con,$stmt)){
                echo 'DAta added';
            }else{
                $_SESSION['message'] = 'statement failed';
            }
        }else{
            $_SESSION['message'] ='connection failed';
        }
        if(!isset($_SESSION['message'])) {
            $_SESSION['message'] = 'Data Inserted Successfully';
        }
        header('Location:../');

    }
    ?>
