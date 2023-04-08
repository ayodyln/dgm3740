<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <title>
        <?php echo wp_title(); ?>
    </title>
</head>

<body class="flex flex-col min-h-screen">
    <div class="navbar bg-base-100 h-fit">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <?php wp_nav_menu(
                    array(
                        'menu_class' => 'menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52',
                    )
                ); ?>
            </div>

            <a href="/" class="btn btn-ghost normal-case text-xl flex gap-1">
                <svg class="w-10 fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 966.32 901.07">
                    <path
                        d="m610.07,791.39c-287.72,0-520.96-233.24-520.96-520.96,0-99.03,27.63-191.6,75.6-270.43C63.34,95.05,0,230.18,0,380.11c0,287.72,233.24,520.96,520.96,520.96,188.69,0,353.95-100.32,445.36-250.53-93.17,87.35-218.46,140.85-356.24,140.85Z" />
                    <polygon
                        points="288.86 62.04 311.37 107.64 361.69 114.96 325.28 150.45 333.87 200.58 288.86 176.91 243.85 200.58 252.44 150.45 216.03 114.96 266.35 107.64 288.86 62.04" />
                    <polygon
                        points="652.16 169.11 682.48 230.55 750.29 240.4 701.22 288.23 712.81 355.76 652.16 323.88 591.51 355.76 603.1 288.23 554.03 240.4 621.84 230.55 652.16 169.11" />
                    <polygon
                        points="361.69 314.43 391.11 374.04 456.88 383.59 409.29 429.99 420.52 495.5 361.69 464.57 302.86 495.5 314.1 429.99 266.5 383.59 332.28 374.04 361.69 314.43" />
                </svg>

                <h2 class="text-3xl">Dreamers Vacations</h2>
            </a>
        </div>

        <div class="navbar-end hidden lg:flex">
            <?php wp_nav_menu(
                array(
                    'menu_class' => 'menu menu-horizontal px-1',
                )
            ); ?>

            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered" />
            </div>
        </div>
    </div>

    <main class="flex-grow">