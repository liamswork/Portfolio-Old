<?php

/**
 * DATABASE CONNECTIONS
 * - 2 Different connections exist, a local version, and a live version.
 * - Enable local db connection if working on local XAMP hosted server, change database/user/password where appropriate.
 * - Tries to create a PDO, if a connection is not established, a failure is echoed. 
*/

try{
  //Local DB connection, will need table name changing.
  $db = new PDO("mysql:host=localhost;dbname=articles", 'root', '');
  //Live DB connection
  $db = new PDO("mysql:host=localhost;dbname=liamwyli_portfolioc", 'liamwyli_liamwylie', '%[qIxUJg1]f{');
  //Give exception handling capability
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect to latest news database. <br> <br>";
}

