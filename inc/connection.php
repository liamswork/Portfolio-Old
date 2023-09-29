<?php

/**
 * DATABASE CONNECTIONS
 * - 2 Different connections exist, a local version, and a live version.
 * - Enable local db connection if working on local XAMP hosted server, change database/user/password where appropriate.
 * - Tries to create a PDO, if a connection is not established, a failure is echoed. 
*/

try{
  //Live DB connection
  $db = new PDO("mysql:host=localhost;dbname=liamwyli_portfolio", 'root', '');
  //Give exception handling capability
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect to enquiry database. <br> <br>";
  echo $e->getMessage();
}

