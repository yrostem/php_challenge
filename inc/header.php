
<nav class="navbar navbar-expand-md bg-secondary navbar-dark");">
    <div class="container">
        <a class="navbar-brand" href="#">SpotiTube</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="myplaylist.php">Mijn Playlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playlists.php">Alle playlists</a>
                </li>
                <li class="nav-item">
                    <?php
                    if ($_SESSION['logged_in']){
                        echo '<a class="nav-link text-white" href="logout.php">Afmelden</a>';
                    }else{
                        echo '<a class="nav-link text-white" href="login.php">Inloggen</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>