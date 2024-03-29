<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Journées FST-Entreprises 2023</title>

  <!-- style link -->
  <link rel="stylesheet" href="css/main.css">

  <!-- fontawesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- upButton starts -->
  <div class="upButton" id="upBtn">
    <i class="fa-solid fa-chevron-up"></i>
  </div>
  <!-- upButton ends -->

  <!-- loader div -->
  <div class="loader-container" id="loader-container">
    <div class="loader"></div>
  </div>

  <!-- header starts -->

  <div class="Header" id="acceuil">

    <input type="checkbox" name="nav-toggle" id="nav-toggle">
    <nav class="navBar" id="navBar">
      <div class="logo">
        <img src="images/logo-01.png" id="logo" alt="logo">
      </div>
      <div class="menu">
        <ul>
          <li id="acceuil_btn">Acceuil</li>
          <li id="a_propos_btn">A propos</li>
          <li id="programme_btn">Programme</li>
          <li id="workshops_btn">Workshops</li>
          <li id="contact_btn">Contact</li>
        </ul>
      </div>
      <div class="menuBars">
        <label class="bars" for="nav-toggle">
          <i class="fa-solid fa-bars"></i>
        </label>
      </div>
    </nav>

    <div class="heroSection">
      <div class="content">
        <h1>Journées</h1>
        <h1>FSTG-Entreprises</h1>
        <h3>2023</h3>
        <h4>Du 16 au 18 Mai 2023</h4>
        <!-- <div class="address">
          <i class="fa-solid fa-map-location-dot"></i>
          <h4>La Faculté des Sciences et Techniques Guéliz</h4>
          <h4>La Cité d'Innovation de Marrakech</h4>
        </div> -->
        <div class="register-button" id="register_btn">
          <i class="fa-solid fa-chevron-down"></i>
          <h4>S'inscrire</h4>
        </div>
      </div>
    </div>

  </div>

  <!-- header ends -->

  <!-- countdown starts -->

  <div class="counterSection">

    <div class="title">
      <h1>Notre événement commencera aprés</h1>
    </div>

    <div class="counter">

      <div class="case">
        <div class="number">
          <span id="daysNum" class="num"></span>
        </div>
        <span class="text">jours</span>
      </div>

      <div class="case">
        <div class="number">
          <span id="hoursNum" class="num"></span>
        </div>
        <span class="text">heures</span>
      </div>

      <div class="case">
        <div class="number">
          <span id="minsNum" class="num"></span>
        </div>
        <span class="text">minutes</span>
      </div>

      <div class="case">
        <div class="number">
          <span id="secsNum" class="num"></span>
        </div>
        <span class="text">secondes</span>
      </div>

    </div>

  </div>

  <!-- countdown ends -->

  <!-- about starts -->

  <div class="about" id="a_propos">
    <div class="description">
      <h1>A propos</h1>
      <h1>de l'événement</h1>
      <p>La Faculté des Sciences et Technique de Marrakech (FSTG), organisera sa première édition des Journées
        FST-Entreprises Marrakech 2023 du 15 au 19 Mai 2023, sous le thème : « Quelles formations à la FSTG pour une
        meilleure inclusion économique des lauréats ? ».
        Cet événement sera l’occasion pour aborder plusieurs sujets, notamment:
      </p>
      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Quelles sont les attentes des entreprises au Maroc en termes de formations d’ingénieurs et de Master Sciences
          et Techniques ?</p>
      </div>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Quelle est la place de l'entrepreneuriat et de la création de start-up au sein de la FSTG ?</p>
      </div>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Comment les formations délivrées intègrent-elles la notion de projet, pas seulement technique, mais également
          dans sa globalité, y compris l’accès au marché ?</p>
      </div>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Quelles sont les initiatives au Maroc permettant de relier la recherche académique avec la R&D des
          entreprises ?</p>
      </div>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Comment les entreprises perçoivent-elles l'employabilité des étudiants ayant obtenu un Master ou un doctorat
          ?</p>
      </div>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Comment mieux armer les ingénieurs et les étudiants en Master qui souhaitent créer leur entreprise au Maroc ?
        </p>
      </div>

      <p>
        Autant de sujets et thématiques qui seront débattus lors de ces journées sous forme d’ateliers pédagogiques:
      </p>

      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Workshop 1: Informatique, Sciences de données et Finance</p>
      </div>
      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Workshop 2 : Génie Civil</p>
      </div>
      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Workshop 3 : Biologie et Géologie</p>
      </div>
      <div class="ligne">
        <i class="fa-solid fa-circle"></i>
        <p>Workshop 4 : Génie Électrique et Énergie Renouvelable</p>
      </div>

    </div>
    <div class="image">
      <img src="images/about.svg" alt="a propos">
    </div>
  </div>

  <!-- about ends -->

  <!-- programme starts -->

  <div class="programme" id="programme">
    <div class="title">
      <h1 class="title">PROGRAMME</h1>
    </div>
    <div class="imageProgramme">
      <img src="images/programme_final-01.svg" alt="programme">
    </div>

  </div>

  <!-- programme ends -->

  <!-- Workshops starts -->

  <div class="workshops" id="workshops">
    <div class="title">
      <h1>WORKSHOPS</h1>
    </div>
    <div class="container">

      <div class="card">
        <div class="workshopTitle" id="workshop1">
          <h2>Workshop 1</h2>
        </div>
        <div class="workshopDescription">
          <p>Quelles Compétences Informatiques pour les Métiers du Numérique?</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>16 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>15h - 18h</h3>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="workshopTitle" id="workshop2">
          <h2>Workshop 2</h2>
        </div>
        <div class="workshopDescription">
          <p>Pour une formation scientifique plurielle au service de l'Entreprise performante</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>17 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>09h - 12h</h3>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="workshopTitle" id="workshop3">
          <h2>Workshop 3</h2>
        </div>
        <div class="workshopDescription">
          <p>Les Data sciences au service de l'actuariat et de la finance</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>17 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>15h - 18h</h3>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="workshopTitle" id="workshop4">
          <h2>Workshop 4</h2>
        </div>
        <div class="workshopDescription">
          <p>Les initiatives de la filière d'ingénieurs "Industrie et sécurité des aliments" (ISA) pour une meilleure inclusion socio-économique des lauréats</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>18 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>09h - 12h</h3>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="workshopTitle" id="workshop5">
          <h2>Workshop 5</h2>
        </div>
        <div class="workshopDescription">
          <p>La chimie écologique au service des Entreprises</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>18 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>09h - 12h</h3>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="workshopTitle" id="workshop6">
          <h2>Workshop 6</h2>
        </div>
        <div class="workshopDescription">
          <p>Génie civil :  innovation et environnement</p>
        </div>
        <div class="infos">
          <div class="date">
            <i class="fa-solid fa-calendar-days"></i>
            <h3>18 Mai 2023</h3>
          </div>
          <div class="heure">
            <i class="fa-solid fa-clock"></i>
            <h3>15h - 18h</h3>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Workshops ends -->

  <!-- registration starts -->

  <div class="registration" id="registration">
    <div class="title">
      <h1>Formulaire d'inscription</h1>
    </div>
    <div class="formulaire">
      <form action="./controllers/register.php" id="registrationForm" method="post">

        <!-- <div class="sentence">
          <h4>Merci de remplir ce formulaire</h4>
        </div> -->

        <?php
        if (isset($_SESSION['error'])) {
          echo "<div class='errorMsg'>{$_SESSION['error']}</div>";
          unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
          echo "<div class='successMsg'>{$_SESSION['success']}</div>";
          unset($_SESSION['success']);
        }
        ?>

        <div class="field">
          <i class="fa-sharp fa-solid fa-user"></i>
          <select name="type" id="type" required>
            <option value="">Vous êtes ?</option>
            <option value="entreprise">Entreprise</option>
            <option value="société">Société</option>
            <option value="lauréat">Lauréat</option>
          </select>
        </div>
        <div class="field">
          <i class="fa-sharp fa-solid fa-user"></i>
          <input type="text" name="name" id="name" placeholder="Votre nom complet" required>
        </div>
        <div class="field">
          <i class="fa-solid fa-envelope"></i>
          <input type="text" name="email" id="email" placeholder="Votre email" required>
        </div>
        <div class="field">
          <i class="fa-solid fa-phone"></i>
          <input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone" required>
        </div>

        <div class="btns">
          <button class="btn" id="btn-reset" type="reset">Réinitialiser</button>
          <button class="btn" id="btn-send" type="submit">Envoyer</button>
        </div>

      </form>
    </div>
  </div>

  <!-- registration ends -->

  <!-- contact starts -->

  <div class="contact" id="contact">
    <div class="title">
      <h1 class="title">CONTACTEZ NOUS !</h1>
    </div>
    <div class="itemsContact">
      <span class="tel tel1"> <i class="fa-solid fa-phone"></i> +212 670 098 888</span>
      <span class="mail"><a href="mailto:manifestation-fstg.contact@uca.ac.ma"> <i class="fa-solid fa-envelope"></i> manifestation-fstg.contact@uca.ac.ma</a></span>
    </div>
  </div>

  <!-- contact ends -->

  <!-- javaScript -->
  <script src="js/main.js"></script>
  <script src="js/navigation.js"></script>
  <script src="js/animation.js"></script>



</body>

</html>