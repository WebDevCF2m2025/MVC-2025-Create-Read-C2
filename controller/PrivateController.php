<?php
# /controller/PrivateController.php

if(isset($_GET['p'])){
    if($_GET['p']==="disconnect"){
        disconnectUser();
        header("Location: ./");
        exit();
    }
}