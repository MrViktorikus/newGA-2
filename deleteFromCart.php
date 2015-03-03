<?php
session_start();
if (isset($_GET["action"])) {

                if ($_GET["action"] == "delete") {
                    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
                        echo "<br>finns " . $_SESSION["cart"][$i]["id"];
                        if ($_SESSION["cart"][$i]["id"] == $_GET["id"]) {
                            array_shift($_SESSION["cart"][$i]);
                            echo "<br>Halalalalla";
//                            echo $_SESSION["cart"][$i]["id"];
                        }

                        header("Location: cart.php");
                    }
                }
            }