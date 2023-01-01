<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Ödevi</title>
    <style>
      ( function( $ ) {

// Site title and description.
wp.customize( 'blogname', function( value ) {
  value.bind( function( to ) {
    $( '.site-title a' ).text( to );
  } );
} );

wp.customize( 'blogdescription', function( value ) {
  value.bind( function( to ) {
    $( '.site-description' ).text( to );
  } );
} );

} )( jQuery );
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<form action="" method="POST">
  <div class="mb-3 p-4">
    <?php
    if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';      
      }

      if(isset($_GET['alert'])) {
        $alert = $_GET['alert'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
         '.$alert.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';      
      }

      if(isset($_GET['besked'])) {
        $bsk = $_GET['besked'];
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         '.$bsk.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';      
      }
    ?>
    <input type="text" name="sayi" class="form-control">
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
  <?php

if(isset($_POST["sayi"])){
    
    
    $sayi = $_POST["sayi"];
    if(empty($sayi)) header("Location: deneme2.php?besked=Skriv et gyldig tal!");
    elseif ($sayi%3==0) header("Location: deneme2.php?msg=".$sayi." ". "kan godt dividerer med 3<br>");
    else  header("Location: deneme2.php?alert=".$sayi." ". "kan ikke divideres med 3<br>");


}

?>
</form>
</body>
</html>