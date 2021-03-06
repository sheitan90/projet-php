<?php $this->title = "Inscription"; ?>

<section class="masthead_biography">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">CREEZ VOTRE COMPTE</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Veuillez remplir le formulaire ci-dessous</h2>
      </div>
    </div>
</section>

<section id="contact-form">
    <div id="container" class="container bg-dark text-center">
        <div class="row">
            <div class="px-sm-5 px-lg-0 col-lg-10 offset-lg-1 mb-5 mt-5">
                <h5 class="text-center mt-5 mb-5 text-white">Inscription</h5>
                  <form method="post" action="../public/index.php?route=register">
                  <div class="col-lg-12 text-center">
                    <label for="pseudo" class="text-white">Pseudo</label><br>
                    <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
                    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
                  <div>
                  <div class="col-lg-12 text-center">
                    <label for="password" class="text-white">Mot de passe</label><br>
                    <input type="password" id="password" name="password"><br>
                    <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                  </div>
                  <div id="input_register" class="col-lg-12 text-center">
                    <input type="submit" class="btn btn-primary mt-4 px-4" value="Inscription" id="submit" name="submit">
                  </div>
        </form>
                <a href="../public/index.php">Retour à l'accueil</a>
            </div>
      </div>
    </div>
</section>