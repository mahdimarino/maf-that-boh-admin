<?php
include "./include/config.php";
include "./include/functions.php";
$cid = isset($_GET['d']) ? $_GET['d'] : NULL;

$is_delete = deletereservation($cid);


if ($is_delete == 1) {
    header("Location:index.php?page=reservations");
} else {
    echo "Error can not delete ..";
}
