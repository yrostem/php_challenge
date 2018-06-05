<?php
include ('inc/head.php');
include ('inc/header.php');
include ('inc/banner.php');
include('classes/users.php');
$users = new users();
$users->login();
$users->register()
?>
<div class="py-5" style="background-image: url('img/music-colour-splash.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-1">Registreren / inloggen</h1>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card text-white p-5 bg-secondary">
                    <div class="card-body">
                        <h1 class="mb-4">Registreren</h1>
                        <form method="POST">
                            <div class="form-group">
                                <label>Gebruikersnaam</label>
                                <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam"> </div>
                            <div class="form-group">
                                <label>Wachtwoord</label>
                                <input type="password" name="password" class="form-control" placeholder="Wachtwoord"> </div>
                            <label>Herhaal Wachtwoord</label>
                        <input type="password"  name="password2" class="form-control" placeholder="Herhaal wachtwoord"> </div>
                    <button type="submit" name="submit" class="btn btn-secondary">Login</button>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white p-5 bg-primary">
                    <div class="card-body">
                        <h1 class="mb-4">Inloggen</h1>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Gebruikersnaam</label>
                                <input type="text" name="login_username" class="form-control" placeholder="Gebruikersnaam"> </div>
                            <div class="form-group">
                                <label>Wachtwoord</label>
                                <input type="password" name="login_password" class="form-control" placeholder="Wachtwoord"> </div>
                            <button type="submit" name="login_submit" class="btn btn-secondary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>