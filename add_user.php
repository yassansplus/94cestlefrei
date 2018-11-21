<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sant-E
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/icon-font.min.css">
  <link rel="stylesheet" href="assets/css/material-dashboard.css?v=2.0.2"/>
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/img/background.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">

        <form action="add_user.con.php" method="POST" class="login100-form validate-form">
          <div class="login100-form-avatar">
            <img src="assets/img/user.png" alt="Avatar">
          </div>

          <span class="login100-form-title p-t-20 p-b-45">
            Ajouter un utilisateur
          </span>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="login" placeholder="Identifiant" required>
            <span class="symbol-input100">
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" name="password" placeholder="Mot de passe" required>
            <span class="symbol-input100">
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" name="statut" placeholder="statut" required>
            <span class="symbol-input100">
            </span>
          </div>

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn" type="submit" name="submit">
              Ajouter
            </button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
                  
</body>

</html>