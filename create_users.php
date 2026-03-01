<?php

$dir = "users";

if (!file_exists($dir)) {
    if (mkdir($dir)) {
        echo "<h2>Directory 'users' created successfully!</h2>";
    } else {
        echo "<h2>Error creating directory.</h2>";
    }
} else {
    echo "<h2>Directory already exists.</h2>";
}

?>