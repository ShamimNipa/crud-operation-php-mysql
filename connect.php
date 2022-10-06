<?php

$con = mysqli_connect("localhost:3307", "root", "", "crudoperation");
if (!$con) {
    die(mysqli_error($con));
}