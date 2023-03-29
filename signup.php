<?php
                    if (isset($_POST["submit"])) {
                        $uname = $_POST["uname"];
                        $password = $_POST["password"];
                        $email = $_POST["email"];
                        $phone = $_POST["phone"];
                        $name = $_POST["name"];

                        $ass_array = array("name" => $name, "email" => $email, "phone" => $phone, "uname" => $uname, "password" => $password);
                        echo "Your date stored to an Associative Array";
                    }
                    ?>