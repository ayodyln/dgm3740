<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick-theme.css" />

    <script src="https://www.google.com/recaptcha/api.js?render=6LcyZR8lAAAAAJybyFcQihPmax7x3FOnBfpNf_4F"></script>
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcyZR8lAAAAAJybyFcQihPmax7x3FOnBfpNf_4F', { action: 'submit' }).then(function (token) {
                    // Add your logic to submit to your backend server here.
                });
            });
        }
    </script>
    <title>
        <?php echo wp_title(); ?>
    </title>
</head>

<body>
    <section id="header__wrapper">
        <header>
            <div id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_assets/logo.png"
                    alt="Cabot Cruises Logo" srcset="
              <?php echo get_template_directory_uri(); ?>/images/logo_assets/logo1.png 1x,
              <?php echo get_template_directory_uri(); ?>/images/logo_assets/logo2.png 2x,
              <?php echo get_template_directory_uri(); ?>/images/logo_assets/logo3.png 3x
            " />
            </div>

            <a href="tel:+18005551234">1-800-555-1234</a>
        </header>
    </section>

    <section id="nav__wrapper">
        <div id="nav">
            <nav>
                <button id="hamburgerBtn">&#9776;</button>
                <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>
            </nav>

            <form id="searchInput">
                <input type="search" name="search" id="search" placeholder="Search..." />

                <button value="search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                    </svg>
                </button>
            </form>
        </div>
    </section>


    <main>