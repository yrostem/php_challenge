<?php
include ('inc/head.php');
include ('inc/header.php');
include ('inc/banner.php');
include('classes/users.php');
?>
    <div class="py-5" style="background-image: url('img/music-colour-splash.jpg');">
        <div class="container">
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card text-white p-5 bg-secondary">
                        <div class="card-body"
                        <h3>U wordt afgemeld, een ongenblik geduld...</h3>
                        <?php
                        session_destroy();
                        header('Refresh: 3; url=index.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "inc/footer.php"; ?>