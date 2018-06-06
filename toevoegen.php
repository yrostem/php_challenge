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
                    <h1 class="display-1 text-center">Playlists beheren</h1>
                    <h5></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <form method="GET">
                    <input type="text" name="playlist_naam" placeholder="Playlist naam"><Br>
                    <p>Playlist plaatje</p>
                    <input type="file" name="playlist_img"><br>
                    <input type="submit" name="toevoegen" class="btn-danger" value="Toevoegen">
                </form>
                <?php
                if (!empty($_SESSION['username'])){
                    if (isset($_GET['toevoegen'])){
                        $users->addPlaylist();
                        echo "gelukt";
                    }
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