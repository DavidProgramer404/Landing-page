
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Landing Page By DaveProgramer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  

  <nav class="nav container">
    <img src="./images/logo.svg" class="nav__img" >

    <div class="nav__hamburguer"></div>

    <div class="nav__overlay">
      <ul class="nav__menu">

        <li class="nav__item">
          <span class="nav__parent">Features
            <img src="./images/icon-arrow-down.svg" class="nav__arrow">            
          </span>

          <ul class="nav__inner">

            <li class="nav__dropdown">
              <a href="#" class="nav__link">
                <img src="./images/icon-todo.svg" class="nav__illustration">
                Todo List
              </a>
            </li>

            <li class="nav__dropdown">
              <a href="#" class="nav__link">
                <img src="./images/icon-calendar.svg" class="nav__illustration">
                Calendar
              </a>
            </li>

            <li class="nav__dropdown">
              <a href="#" class="nav__link">
                <img src="./images/icon-reminders.svg" class="nav__illustration">
                Reminder
              </a>
            </li>

            <li class="nav__dropdown">
              <a href="#" class="nav__link">
                <img src="./images/icon-planning.svg" class="nav__illustration">
                Planning
              </a>
            </li>


          </ul>

        </li>

        <li class="nav__item">

          <span class="nav__parent">Compañia
            <img src="./images/icon-arrow-down.svg" class="nav__arrow">            
          </span>

          <ul class="nav__inner">

            <li class="nav__dropdown">
              <a href="#" class="nav__link">Historia</a>
            </li>

            <li class="nav__dropdown">
              <a href="#" class="nav__link">tu equipo</a>
            </li>

            <li class="nav__dropdown">
              <a href="#" class="nav__link">Blog</a>
            </li>


          </ul>

        </li>

        <li class="nav__item">
          <a href="#" class="nav__link">Carreras</a>
        </li>

        <li class="nav__item">
          <a href="#" class="nav__link">Sobre nosotros</a>
        </li>

        <li class="nav__login">
          <a href="#" class="nav__sign">Login</a>
        </li>

        <li class="nav__login nav__login--border">
          <a href="#" class="nav__sign">Register</a>
        </li>

      </ul>
    </div>
  </nav>

  <main class="main">
    <section class="main__grid">

      <picture class="main__picture">

        <source srcset="./images/image-hero-desktop.png" class="main__img" media="(min-width:768px)">

        <img src="./images/image-hero-mobile.png" class="main__img">

      </picture>

      <article class="main__article">

        <div class="main__texts">

          <h1 class="main__title"> Haz que tu equipo esté sincronizado</h1>
          <p class="main__paragraph"> Sin importar tu ubicación. Optimice los procesos, cree rituales de equipo y observe cómo se dispara la productividad.
          </p>
          <a href="#" class="main__cta">Leer más</a>

        </div>

        <div class="main__brands">

          <img src="./images/client-databiz.svg" class="main__brand">
          <img src="./images/client-audiophile.svg" class="main__brand">
          <img src="./images/client-meet.svg" class="main__brand">
          <img src="./images/client-maker.svg" class="main__brand">

        </div>

      </article>

    </section>
  </main>
  

  
  <script src="./js/menu.js"></script>
</body>
</html>

