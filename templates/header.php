<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Jean Forteroche</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?route=biographie">Biographie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?route=chapitre">Chapitres</a>
          </li>
          <?php
          if ($this->session->get('pseudo')) {
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administration
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../public/index.php?route=logout">Déconnexion</a>
            <a class="dropdown-item" href="../public/index.php?route=profile">Profil</a>
          <?php if($this->session->get('role') === 'admin') { ?>
            <a class="dropdown-item" href="../public/index.php?route=administration">Administration</a>
          <?php } ?>
          <?php if($this->session->get('role') === 'admin') { ?>
            <a class="dropdown-item" href="../public/index.php?route=addArticle">Nouvel article</a>
        </div>
        </li>
          <?php } ?>
          
          <?php
          } else {
          ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../public/index.php?route=register">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../public/index.php?route=login">Connexion</a>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  
  