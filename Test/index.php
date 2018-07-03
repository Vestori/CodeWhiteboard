<?php

print '<pre>';

print_r($_GET);

print '<h1>' . $_GET['myVariable'] . '</h1>';

// print file_get_contents('https://ziptasticapi.com/' . $_GET['myVariable']);

print '<form action="" method="post">';

print '<input type="text" name="myVariable" value="">';

print '<input type="submit" value="Save">';

print '</form>';


print_r($_POST);

print '<h1>' . $_POST['myVariable'] . '</h1>';

if ($_POST['myVariable']) {
    print file_get_contents('https://ziptasticapi.com/' . $_POST['myVariable']);

}

