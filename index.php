<?php
include ('inc/head.php');
include ('inc/header.php');
include ('inc/banner.php');
error_reporting();

spl_autoload_register(function ($class_name) {
    include 'classes/'.ucfirst( $class_name ). '.php';
});

$users = new users();

?>

<!--



Veel tijd besteedt aan de layout de hele ochtend, veel versies gemaakt en verwijderd. veel ge experimenteerd met login/register in OOP. Uiteindelijk alleen de login / registration systeem gemaakt. Laatste onderdeel
waarmee ik bezig was, was sessions maken voor gebruikers.



-->
  <div class="py-5" style="background-image: url('img/music-colour-splash.jpg');)">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-1">Onze playlists</h1>
            <?=      $_SESSION['playlist_url'];
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GO2J4BxRLGM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LIkYv5irMy0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-dbtCAUlGOg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/iNoQEPunZH0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1 text-center">Mijn playlists</h1>
            <a href="toevoegen.php">Playlist toevoegen</a>
            <h5></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
          <?php
          if (!empty($_SESSION['username'])){
              $users->getPlaylist();

          } else{
              echo "<h3>Playlist is leeg, voeg nieuwe toe.</h3>";
          }

          ?>
      </div>
    </div>
  </div>
<?php
include ('inc/footer.php');
?>