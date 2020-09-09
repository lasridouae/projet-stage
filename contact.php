<?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['subject'];
       $Message = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Message))
       {
           header('location:../index.php?error');
       }
       else
       {
           $to = "lasridouae1@gmail.com";

           if(mail($to,$Subject,$Message,$Email))
           {
               header("location:../index.php?success");
           }
       }
    }
    else
    {
        header("location:../index.php");
    }
?>