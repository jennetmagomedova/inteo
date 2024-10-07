<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <title>
      <?php the_title(); ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header container">
      <div class="header__logo">
        <?php the_custom_logo() ?>
      </div>
      <nav class="header__menu">
        <?php
          wp_nav_menu( [
            'theme_location' => 'main',
            'container' => '',
            'menu_class' => '',
            'menu_id' => ''
          ] ); 
        ?>
      </nav>
      <div class="header__button">
        <button type="button">
          <span>CONTACT US</span>
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_2018_158)">
              <path
                d="M14.1663 5.83337L5.83301 14.1667"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M6.66699 5.83337H14.167V13.3334"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
            <defs>
              <clipPath id="clip0_2018_158">
                <rect width="20" height="20" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </button>
      </div>
    </header>