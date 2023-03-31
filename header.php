<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drzwiproducent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- HEADER -->
    <div class="topBar">
        <div class="flex w">
            <span class="topBar__text white">
                Producent i hurtownia drzwi drewnianych - Kraków, Katowice, cała Polska
            </span>
            <div class="topBar__right flex">
                <a class="topBar__right__item flex-start white"
                   href="tel:+48100200300">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/phone.svg"; ?>" alt="telefon" />
                    600 100 200
                </a>
                <a class="topBar__right__item flex-start white"
                   href="mailto:kontakt@drzwi-producent.pl">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mail.svg"; ?>" alt="email" />
                    kontakt@drzwi-producent.pl
                </a>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="menuMobile d-mobile">
            <div class="menuMobile__inner">
                <button class="btn btn--closeMenu"
                        onclick="closeMenu()">
                    &times;
                </button>

                <h3 class="menuMobile__header">
                    Stolarstwo Marek Kęsek
                </h3>

                <a class="menuMobile__item" onclick="closeMenu()" href="<?php echo home_url(); ?>">Strona główna</a>
                <a class="menuMobile__item" onclick="closeMenu()" href="<?php echo home_url() . '#onas' ?>">O producencie</a>
                <a class="menuMobile__item" onclick="closeMenu()" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">Oferta</a>
                <a class="menuMobile__item" onclick="closeMenu()" href="<?php echo home_url() . '#kontakt' ?>">Kontakt</a>

                <div class="menuMobile__bottom">
                    <p class="menuMobile__bottom__text">
                        Producent i hurtownia drzwi drewnianych - Kraków, Katowice, cała Polska
                    </p>

                    <h4 class="menuMobile__bottom__header">
                        Zadzwoń do nas
                    </h4>
                    <a class="menuMobile__bottom__link" href="tel:+48601999893">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/phone.svg"; ?>" alt="telefon" />
                        601 999 893
                    </a>
                    <h4 class="menuMobile__bottom__header">
                        Napisz do nas
                    </h4>
                    <a class="menuMobile__bottom__link" href="mailto:stolarstwo.marek@op.pl">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mail.svg"; ?>" alt="telefon" />
                        stolarstwo.marek@op.pl
                    </a>
                </div>
            </div>
        </div>

        <div class="flex w">
            <a class="header__logo"
               href="/">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo.jpg"; ?>" alt="logo" />
            </a>

            <button class="btn btn--menu d-mobile" onclick="openMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu.svg"; ?>" alt="menu" />
            </button>

            <div class="header__menu flex d-desktop">
                <a class="header__menu__item"
                   href="<?php echo home_url(); ?>">
                    Strona główna
                </a>
                <a class="header__menu__item"
                   href="<?php echo home_url() . '#onas'; ?>">
                    O producencie
                </a>
                <a class="header__menu__item"
                   href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    Oferta
                </a>
                <a class="header__menu__item header__menu__item--contact"
                   href="<?php echo home_url() . '#kontakt'; ?>">
                    Kontakt
                </a>
            </div>
        </div>
    </div>
