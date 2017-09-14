<?php

if(isset($_POST['submit'])){
    include_once 'dbconnect2.php';

    $name = mysqli_real_escape_string($conn,$_POST['name'] );
    $event = mysqli_real_escape_string($conn,$_POST['event'] );
    $email = mysqli_real_escape_string($conn,$_POST['email'] );
    $contact_no = mysqli_real_escape_string($conn,$_POST['contact_no'] );

                $sql="INSERT INTO reg (reg_name, reg_event, reg_email, reg_pho) VALUES ('$name','$event','$email','$contact_no');";
              mysqli_query($conn,$sql);
                      echo "<script type='text/javascript'>alert('failed!')</script>";

    header("Location:../");
                exit();
            }


