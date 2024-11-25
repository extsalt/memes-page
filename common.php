<?php

function db_connect()
{
  return mysqli_connect("localhost", "root", "root", "memes");
}

