<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','test') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['cpwd'])&& isset($_POST['phoneNumber']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $c_pwd=$_POST['cpwd'];
            $no=$_POST['phoneNumber'];

            $sql = "INSERT INTO pr1(name,email,pwd,cpwd,mobile)  VALUES ('$name','$email','$pwd','$cpwd',$no)";

            if(mysqli_query($conn,$sql))
            {
                echo "Entry is Successful";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>
