<?php
if(isset($_POST['first']))
    {
        $first_name= $_POST['first'];
        echo "First Name=".$first_name."</br>";
    }

if(isset($_POST['last']))
    {
        $last_name= $_POST['last'];
        echo "Last Name=".$last_name."</br>";
    }

if(isset($_POST['gender']))
    {
        $gender= $_POST['gender'];
        echo "Gender=".$gender."</br>";
    }
if(isset($_POST['student']))
    {
        $student= $_POST['student'];
        echo "Is Student=".$student."</br>";
    }

