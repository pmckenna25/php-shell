<?php
  include 'db/conn.php';
  include 'util/url-params.php';

  $query = $conn->prepare($prepared_sql);
  $query->bind_param("i", $id);

  $id = $url_params['id'];

  $query->execute();
  $results = $query->get_result();

  if (!$results) {
    echo "Error description: ". $results->error;
  }

  $row = $results->fetch_assoc();

  //map to variables
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="google" content="notranslate">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <title>Instrument</title>
</head>
<body>
  <div class='container'>
    <div class='row' style='margin-top: 10%;'>
      <h1 class='u-pull-right'>Instrument</h1>
    </div>
    <div class='row'>
      <h3><?php echo "$name" ?></h3>
    </div>
    <?php
      echo "
        <div class='row'>
          <div class='six columns'>
            <img class='u-max-full-width' src='images/$image' alt='instrument image'>
          </div>
          <div class='six columns'>
            <div class='row'>
              <strong>Type</strong>
              <p>$type</p>
            <div>
            <div class='row'>
              <strong>Description:</strong>
              <p>$description</p>
            <div>
            <div class='row'>
              <strong>Price</strong>
              <p>£$price</p>
            <div>
          </div>
        </div>
      ";
    ?>
    <div class='row'>
      <a class='button u-pull-right' href="http://pmckenna25.lampt.eeecs.qub.ac.uk/study-setup/index.php">BACK</a>
    </div>
  </div>
</body>
</html>