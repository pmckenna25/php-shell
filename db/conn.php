<?php
  $dbHostname = 'pmckenna25.lampt.eeecs.qub.ac.uk';
  $dbUsername = 'pmckenna25';
  $dbPassword = 'Yr4jJNLPXv0Lkz2Z';
  $dbDatabase = 'pmckenna25';

  $conn = new mysqli(
    $dbHostname,
    $dbUsername,
    $dbPassword,
    $dbDatabase
  );

  if ($conn->connect_error) {
    echo "error connecting".$conn->connect_error;
  }
?>