<?php

function cleanInput($connection, $input)
{
    $input =  mysqli_real_escape_string($connection, $input);

    return $input;
}

function checkEmail($email)
{
    $email = "example.com";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.mailcheck.ai/domain/' . $email);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
}

// this function checks if a userinput from the database exists
function checkIfValueExist($connection, $field, $data)
{

    // creating the query based on the parameters
    $fieldFinder =  mysqli_query($connection, "SELECT $field from users WHERE $field = '$data'");

    // return number of rows found
    $num_rows = mysqli_num_rows($fieldFinder);

    // if a row exists with the fields given, return true
    if ($num_rows > 0) {
        return true;
    } else {
        return false;
    }
}