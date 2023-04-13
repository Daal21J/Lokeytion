<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleLogin.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Document</title>
  <!--===============================================================================================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #fddc59;">
  <div class="container">
    <div class="side-1">
      <div class="header">
        <h2 class="h-main">Bienvenue de retour!</h2>
        <p class="h-sec">Veuillez vous connecter avec votre email et votre mot de passe.</p>
        <button class="toggle-log">S'inscrire</button>
      </div>
    </div>
    <div class="side-2">
      <div class="header">
        <h2 class="h-main">Bienvenue à Lokeytion!</h2>
        <p class="h-sec">Entrez vos coordonnées personnelles et commencez dès aujourd'hui !</p>
        <button class="toggle-log">Se connecter</button>
      </div>
    </div>
    <div class="forms">
      <div class="sign-up">
        <div class="form">
          <fieldset class="block">
            <h2 class="form-h my-4">S'inscrire</h2>

            <form action="">
              <div class="input-label">
                <input placeholder="" type="email" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Email :</label>
              </div>
              <div class="input-label">
                <input placeholder="" type="text" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Nom complet:</label>
              </div>
              <div class="input-label">
                <input placeholder="" type="tel" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Telephone :</label>
              </div>
              <div class="input-label">
                <input placeholder="" password type="password" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Mot de passe :</label>
              </div>
              <input type="submit" value="S'inscrire" class="input-submit">
            </form>
          </fieldset>
        </div>
      </div>
      <div class="sign-in">
        <div class="form">
          <fieldset>
            <h2 class="form-h my-4">Se connecter</h2>

            <form action="">
              <div class="input-label">
                <input placeholder="" email type="email" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Email :</label>
              </div>
              <div class="input-label">
              <input placeholder="" type="password" class="input-text rounded-pill border border-dark">
                <label for="mon-input">Mot de passe :</label>
              </div>
              <input type="submit" value="Se connecter" class="input-submit">
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </div>



  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Load jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Load Babel -->
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  <!-- Your custom script here -->
  <script type="text/babel">
    const side1 = $('.side-1');
const side2 = $('.side-2');
const signInF = $('.sign-in fieldset');
const signUpF = $('.sign-up fieldset');
$('.side-1 .toggle-log').click(function () {
  side1.css({ 'transform': 'rotateY(180deg)', 'background-position': '100%' });
  side2.css({ 'transform': 'rotateY(0deg)', 'background-position': '100%' });
  signInF.attr('disabled', 'disable');
  signInF.addClass('block');
  signUpF.removeAttr('disabled');
  signUpF.removeClass('block');
});
$('.side-2 .toggle-log').click(function () {
  side1.css({ 'transform': 'rotateY(0deg)', 'background-position': '0%' });
  side2.css({ 'transform': 'rotateY(-180deg)', 'background-position': ' 0%' });
  signInF.removeAttr('disabled');
  signInF.removeClass('block');
  signUpF.attr('disabled', 'disable');
  signUpF.addClass('block');
});
</script>
</body>

</html>