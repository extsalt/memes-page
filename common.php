<?php

require_once 'include/include.php';

function header_json()
{
  header('Content-Type: Application/json');
}

function db_connect()
{
  return mysqli_connect("localhost", "root", "root", "memes");
}
