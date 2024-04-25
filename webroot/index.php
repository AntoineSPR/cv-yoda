<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="media/jedi-order.png">
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/objectives.css" />
    <link rel="stylesheet" href="styles/skills.css" />
    <link rel="stylesheet" href="styles/cards.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/69553e1ade.js" crossorigin="anonymous"></script>
    <title>Trouver un travail Yoda doit</title>
</head>

<body>
    <header>
        <section class="profile">
            <div class="picture">
                <img preserveAspectRatio="xMidYMid meet" viewBox="0 0 580 580" width="100%" height="100%"
                    src="media/meteor.svg" />
                <img src="media/Yoda-Retina_2a7ecc26.jpeg" />
            </div>
            <div class="introduction">
                <h1>Yoda</h1>
                <h2>Maître Jedi</h2>
                <p>Trouver un travail je dois, la faute aux Sith c'est</p>
            </div>
        </section>

        <input type="checkbox" id="checkbox-menu" />
        <div class="black-sun"></div>

        <nav>
            <img src="media/menu(1).png" />
            <a href="#experience" class="button-experience">
                <img src="media/saturn.png" />
                <p>Expérience</p>
            </a>
            <a href="#skills" class="button-skills">
                <img src="media/astrological.png" />
                <p>Compétences</p>
            </a>
            <a href="#education" class="button-education">
                <img src="media/emblem.png" />
                <p>Formation</p>
            </a>
            <a href="#contact" class="button-contact">
                <img src="media/shooting-star(1).png" />
                <p>Contact</p>
            </a>
        </nav>
    </header>
    <main>
        <div id="objective">
            <p>OBJECTIFS</p>
        </div>
        <section class="objective">
            <p>Former les futurs JEDI à la sagesse de la Force.</p>
            <p>Sélectionner l'élu parmi eux pour vaincre l'armée de l'Empire.</p>
            <p>Cours Magistraux à l'Université Supérieure des JEDI.</p>
        </section>

        <div id="experience">
            <p>EXPERIENCES</p>
        </div>
        <section class="experience">
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/yodacouncil.jpg" />
                    <div class="card-back">
                        <h3>Maître au Conseil Jedi</h3>
                        <p>Coruscant</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/555b40df69bedda148891f6e.webp" />
                    <div class="card-back">
                        <h3>Général vétéran</h3>
                        <p>Coruscant</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/yodaluke.jpg" />
                    <div class="card-back">
                        <h3>Professeur particulier</h3>
                        <p>Dagoba</p>
                    </div>
                </div>
            </div>
        </section>

        <div id="skills">
            <p>COMPETENCES</p>
        </div>
        <!--DESKTOP-->
        <section class="skills__desktop">
            <div>
                <p>Maîtrise de la Force</p>
            </div>
            <div>
                <p>Combat au sabre laser</p>
            </div>
            <div>
                <p>Transmission de son savoir</p>
            </div>
            <div></div>
            <div>
                <p>Sagesse légendaire</p>
            </div>
            <div>
                <p>Direction d'ordre monastique</p>
            </div>
        </section>
        <!--MOBILE-->
        <section class="skills__mobile">
            <div>
                <div></div>
                <p>Maîtrise de la Force</p>
            </div>
            <div>
                <div></div>
                <p>Combat au sabre laser</p>
            </div>
            <div>
                <div></div>
                <p>Enseignement</p>
            </div>
            <div>
                <div></div>
                <p>Sagesse légendaire</p>
            </div>
            <div>
                <div></div>
                <p>Direction d'ordre monastique</p>
            </div>
        </section>

        <div id="education">
            <p>FORMATION</p>
        </div>
        <section class="education">
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/A_Plot_to_Destroy_the_Jedi.webp" />
                    <div class="card-back">
                        <h3>Jedi</h3>
                        <p>Tython</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/yodafight.jpg" />
                    <div class="card-back">
                        <h3>Ecole de guerre</h3>
                        <p>Coruscant</p>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <img class="card-front" src="media/artworks-kunFNf6PdEtzx4ZI-lYSQBw-t500x500.jpg" />
                    <div class="card-back">
                        <h3>Ecole de l'humour</h3>
                        <p>Tatooine</p>
                    </div>
                </div>
            </div>
        </section>

        <div id="contact">
            <p>CONTACT</p>
        </div>
        <section class="contact">
            <form action="result.php" method="post">
                <p>De la sagesse de Yoda, vous avez besoin ?</p>
                <div>
                    <label for="reason"> Objet de votre demande : </label>
                    <select for="reason" name="reason" size="1" required="true">
                        <?php require 'reasons.php'; ?>
                        <?php foreach ($reasons as $key => $reason): ?>
                            <option selected="selected" value="<?php $key ?>"><?= $key ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div>
                    <label for="name">Votre nom : </label>
                    <input type="text" id="name" name="name" required="true" />
                </div>
                <div>
                    <label for="email">Votre email : </label>
                    <input type="email" id="email" name="email" required="true" />
                </div>
                <div>
                    <label for="message" id="message">Votre message : </label>
                    <textarea name="message" id="message" rows="10" minlength="30" required="true"></textarea>
                </div>
                <button type="submit">Envoyer ma demande</button>
            </form>
        </section>
        <section class="contact-details">
            <div>
                <p>
                    <a href="https://www.linkedin.com/in/ma%C3%AEtre-yoda-999463131/?originalSubdomain=fr"
                        target="_blank"><i class="fa-brands fa-linkedin"></i>linkedin.com/in/maitre-yoda</a>
                </p>
                <p>
                    <a href="https://github.com/UtrechtUniversity/yoda" target="_blank"><i
                            class="fa-brands fa-square-github"></i>https://github.com/MaitreYoda</a>
                </p>
            </div>
            <div>
                <p>
                    <a href="mailto: yodathechef@gmail.com"><i class="fa-solid fa-envelope"></i>maitre-yoda@gmail.fr</a>
                </p>
                <p>
                    <a href="tel:0978450438"><i class="fa-solid fa-square-phone"></i>09 78 45 04 38</a>
                </p>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <q>Robuste je suis grâce à la Force, mais pas à ce point-là.</q>
        </div>
        <p>Fait avec ❤️ par Anna & Antoine</p>
    </footer>
</body>

</html>