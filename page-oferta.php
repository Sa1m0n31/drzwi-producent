<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drzwiproducent
 */

get_header();
?>

    <div class="section w">
        <span class="section__header--before">
            Drzwi drewniane, transport i montaż
        </span>
        <h3 class="section__header">
            Nasza oferta
        </h3>
        <p class="offer__text">
            Posiadamy szeroki wybór drzwi drewnianych, które oferujemy jako producent. Nasze drzwi wyróżniają się wysoką jakością wykonania i użytych materiałów, co zapewnia nie tylko estetyczny wygląd, ale także trwałość i bezpieczeństwo użytkowania. W naszej ofercie znajdują się drzwi wewnętrzne i zewnętrzne, dostępne w różnych rozmiarach i kolorach, dopasowanych do różnych stylów wnętrz i elewacji.
        </p>

        <div class="flex section__offer">
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Drzwi wewnetrzne')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-1.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Drzwi wewnętrzne
                </h4>
                <p class="section__offer__item__text">
                    Drzwi drewniane wewnętrzne to doskonały wybór dla tych, którzy szukają eleganckiego, naturalnego wykończenia wnętrz swojego domu.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Drzwi zewnetrzne')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-2.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Drzwi zewnętrzne
                </h4>
                <p class="section__offer__item__text">
                    Nasze drzwi zewnętrzne są wykonane z najwyższej jakości materiałów, które zapewniają trwałość, wytrzymałość i ochronę przed warunkami atmosferycznymi.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Osnieznice drewniane')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-3.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Ośnieżnice drewniane
                </h4>
                <p class="section__offer__item__text">
                    Nasze ościeżnice są wykonane z najwyższej jakości drewna, które zostało starannie wyselekcjonowane i poddane obróbce, aby zapewnić trwałość i estetykę.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Opaski drzwiowe')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-4.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Opaski drzwiowe
                </h4>
                <p class="section__offer__item__text">
                    Są to akcesoria, które umożliwiają ciche i płynne zamykanie drzwi bez uderzania i hałasu. Nasze opaski drzwiowe to wysokiej jakości produkty, które są nie tylko funkcjonalne, ale również estetyczne.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Budy dla psow')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-5.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Budy dla psów
                </h4>
                <p class="section__offer__item__text">
                    Drewniane budy dla psów to doskonałe rozwiązanie dla właścicieli, którzy chcą zapewnić swojemu psu wygodne i bezpieczne miejsce do spania oraz odpoczynku na świeżym powietrzu.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
            <a class="section__offer__item" href="<?php echo get_page_link(get_page_by_title('Wzornik kolorow')->ID); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-6.svg"; ?>" alt="oferta" />

                <h4 class="section__offer__item__header">
                    Wzornik kolorów
                </h4>
                <p class="section__offer__item__text">
                    Nasz wzornik kolorów to bogaty wybór odcieni, które umożliwiają łatwe dopasowanie kolorów do indywidualnych potrzeb i upodobań.
                </p>

                <span class="section__offer__item__link">
                    Więcej informacji
                </span>
            </a>
        </div>
    </div>

    <div class="section w" id="kontakt">
         <span class="section__header--before">
            Skontaktuj się z nami
        </span>
        <h3 class="section__header">
            Zostaw kontakt do siebie, a my oddzwonimy
        </h3>

        <div class="flex section__contact">
            <div class="contact__form">
                <label>
                    Imię i nazwisko
                    <input class="input" />
                </label>
                <label>
                    Nr telefonu
                    <input class="input" />
                </label>
                <label>
                    Adres e-mail
                    <input class="input" />
                </label>
                <label>
                    Treść wiadomości
                    <textarea class="input input--textarea">

                    </textarea>
                </label>

                <button class="btn btn--submit">
                    Wyślij wiadomość
                </button>
            </div>
            <div class="map">
                <?php
                echo do_shortcode('[wpgmza id="1"]');
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
