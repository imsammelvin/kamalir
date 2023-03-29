<?php
                 if(isset($_POST["submit"])){
                     $uname = $_POST["uname"];
                     $password = $_POST["password"];
                     if($uname == "admin" && $password == "admin@123"){
                         echo "You are logged in!";
                     }else{
                         echo "Incorrect credentials";
                         echo "<a href='./login.html'>Login</a>";
                     }
                 }
                ?>