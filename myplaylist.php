<?php
include ('inc/head.php');
include ('inc/header.php');
include ('inc/banner.php');

spl_autoload_register(function ($class_name) {
    include 'classes/'.ucfirst( $class_name ). '.php';
});

$users = new users();

?>
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