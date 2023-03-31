<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drzwiproducent
 */

get_header();
?>

    <!-- PAGE -->
    <main class="hero">
        <img class="img d-desktop" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/strona-glowna.jpg"; ?>" alt="drzwi-producent" />
        <img class="img d-mobile" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/hero-mobile.jpg"; ?>" alt="drzwi-producent" />

        <div class="hero__content w">
            <h1 class="hero__content__header">
                Producent <span class="color-primary">drzwi drewnianych</span>, ościeżnic i akcesoriów
            </h1>
            <h2 class="hero__content__subheader">
                Jesteśmy producentem drzwi drewnianych zewnętrznych i wewnętrznych,
                ościeżnic oraz akcesoriów drewnianych. Świadczymy swoje usługi na
                terenie Krakowa, Katowic oraz całej Polski.
                Naszą markę charakteryzuje solidność oraz terminowość.
            </h2>

            <a href="#kontakt"
               class="btn btn--hero">
                Skontaktuj się z nami
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right.svg"; ?>" alt="dalej" />
            </a>
        </div>
    </main>

    <div class="section w" id="onas">
        <span class="section__header--before">
            Producent drzwi drewnianych
        </span>
        <h3 class="section__header">
            O naszej marce
        </h3>

        <div class="flex section__main">
            <figure>
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/placeholder-1.jpg"; ?>" alt="drzwi-producent" />
            </figure>
            <div class="section__main__content">
                <h4 class="section__main__content__header">
                    Producent drzwi drewnianych, hurtownia drzwi. Tanie drzwi drewniane - Warszawa, Kraków, Katowice
                </h4>
                <div class="section__main__content__text">
                    Nasze drzwi drewniane docenili klienci indywidualni i firmy z
                    największych miast w Polsce jak Warszawa, Kraków czy Katowice,
                    co jest dla nas najlepszą rekomendacją profesjonalizmu produkcji
                    oraz obrazowym wskaźnikiem stosunku jakości do atrakcyjnej ceny. <br/><br/>
                    W naszej ofercie dostępny jest tak szeroki asortyment drzwi, że każdy
                    z pewnością znajdzie coś dla siebie. Zaopatrujemy zarówno klientów
                    indywidualnych jak i hurtowych (składy budowlane, sklepy).
                    W ciągu ponad 30-letniej obecności firmy Stolarstwo Marek Kęsek na rynku,
                    zaopatrzyliśmy różnego rodzaju państwowe i prywatne instytucje, w tym szkoły,
                    strażnice, kluby sportowe, świetlice, a także wiele hoteli i pensjonatów. <br/><br/>
                    Nasze drzwi wykonane są z drewna litego klejonego -
                    sosny lub dębu, zarówno wykonujemy drzwi drewniane wewnętrzne jak i zewnętrzne.
                </div>

                <a class="btn btn--hero btn--hero--section" href="#oferta">
                    Dowiedz się o nas więcej
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right.svg"; ?>" alt="dalej" />
                </a>
            </div>
        </div>
    </div>

    <div class="section w" id="oferta">
        <span class="section__header--before">
            Drzwi drewniane, transport i montaż
        </span>
        <h3 class="section__header">
            Jakie produkty tworzymy?
        </h3>

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

    <div class="section section--grey">
        <div class="w">
            <span class="section__header--before">
            Referencje
        </span>
            <h3 class="section__header">
                Opinie naszych Klientów
            </h3>

            <div class="references">
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Polecam z czystym sumieniem, 6 par drzwi już zamontowane, wszystko starannie wykonane i na czas.Jesteśmy mega zadowoleni.
                    </p>
                    <p class="references__item__author">
                        Paweł Zybowski (opinie Google)
                    </p>
                </div>
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Łóżko jest bardzo dobrej jakości, łatwe w montażu, solidne. Kierowca pomógł z wniesieniem do domu.
                    </p>
                    <p class="references__item__author">
                        Beata S (opinie Google)
                    </p>
                </div>
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Super Drzwi!!! 100% drewno, szybki pomiar, krótki czas realizacji, nawet przyjechali i zamontowali, Cena bardzo dobra jak za takie solidne drzwi. Gorąco polecam tą firmę!!!!
                    </p>
                    <p class="references__item__author">
                        Zenek M (opinie Google)
                    </p>
                </div>
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Tu jest jakość! Drzwi pięknie wyszlifowane,
                        Gładziutkie jak lustro. Sprawny montaż w całym domu. Terminy długie, ale warto było czekać. Mnie gwiazdek brakuje. Jest się czym cieszyć. Polecam gorąco stolarnie Kęska!
                    </p>
                    <p class="references__item__author">
                        fiona12 (opinie Google)
                    </p>
                </div>
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Warto czekać na takich fachowców. Drzwi bardzo ładne, solidnie wykonane, fachowy i sprawny montaż. Niecały dzień i drzwi w całym domu zamontowane. Termin dotrzymany. POLECAM.
                    </p>
                    <p class="references__item__author">
                        Sławek Paliszuk (opinie Google)
                    </p>
                </div>
                <div class="references__item">
                    <figure>
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/opinie.jpg"; ?>" alt="opinia" />
                    </figure>

                    <p class="references__item__text">
                        Polecam, bardzo sympatyczni Panowie, a wykonanie fenomenalne.
                    </p>
                    <p class="references__item__author">
                        Bartek Kościelniak (opinie Google)
                    </p>
                </div>
            </div>

            <div class="references__panel flex">
                <button class="btn--references btn--prev" onclick="referencesPrev()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right.svg"; ?>" alt="poprzedni" />
                </button>

                <div class="references__panel__dots flex">
                    <button class="btn btn--dot" onclick="referencesSlide(0)">
                        <span></span>
                    </button>
                    <button class="btn btn--dot" onclick="referencesSlide(1)">
                        <span></span>
                    </button>
                    <button class="btn btn--dot" onclick="referencesSlide(2)">
                        <span></span>
                    </button>
                </div>

                <button class="btn--references btn--next" onclick="referencesNext()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right.svg"; ?>" alt="poprzedni" />
                </button>
            </div>
        </div>
    </div>

    <div class="section w">
        <span class="section__header--before">
            Poznaj nasze zalety
        </span>
        <h3 class="section__header">
            Dlaczego warto nas wybrać?
        </h3>
        <div class="flex section__main">
            <figure>
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/placeholder-2.jpg"; ?>" alt="drzwi-producent" />
            </figure>
            <div class="section__main__content">
                <h4 class="section__main__content__header section__main__content__header--second">
                    Wybór producenta drzwi Stolarstwo Marek Kęsek to dobra decyzja?
                </h4>

                <p>
                    Dlaczego warto nas wybrać?
                </p>

                <ul class="section__main__list">
                    <li class="section__main__list__item">Solidne wykonanie i wysoka jakość</li>
                    <li class="section__main__list__item">Indywidualne podejście do klienta</li>
                    <li class="section__main__list__item">Bogaty wybór wzorów i kolorów</li>
                    <li class="section__main__list__item">Konkurencyjne ceny i atrakcyjne promocje</li>
                    <li class="section__main__list__item">Szybka realizacja zamówień i profesjonalna obsługa klienta</li>
                </ul>

                <a class="btn btn--contact" href="#kontakt">
                    Skontaktuj się z nami
                </a>
            </div>
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
