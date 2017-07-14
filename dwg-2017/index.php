<?php get_header(); ?>
<body>

    <header class="page-header" id="page-header">
        <!--<h1 class="page-title">Domek w Górach</h1>-->
        <a href="#main" title="go back to homepage">
            <!--<img src="img/logo-DwG-web-b.svg" alt="Domek w Górach - logo">-->
            <!--<object class="svgClass" type="image/svg+xml" data="img/logo-DwG-web-b.svg"></object>-->
            <object class="header-logo" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/logo-DwG-web.svg"></object>
        </a>
        <nav id="navigation" class="page-nav">
            <ul class="navigation-menu">
                <li><a class="menu-item" href="#1">O nas</a></li>
                <li><a class="menu-item" href="#2">Galeria</a></li>
                <li><a class="menu-item" href="#3">Dojazd</a></li>
                <li><a class="menu-item" href="#4">Kontakt</a></li>
                <li><a class="menu-item" href="tel:883752444">tel: 883 752 444</a></li>
            </ul>
            <button class="hamburger" id="hamburger">
                <i class="material-icons menu-icon">menu</i>
                <i class="material-icons clear-icon">clear</i>
            </button>
        </nav>
    </header>
    <main>
        <article class="article">
            <header class="article-header">
                <h2 class="article-title">Domek w Górach</h2>
                <p class="article-lead">Obiekt w trakcie uzyskiwania pozwoleń na otwarcie.<br>Zapraszamy już niedługo :)</p>
            </header>

            <section class="services">
                <div class="services">
                    <h2>Najważniejsze</h3>
                        <div class="border"></div>
                        <!--no space between div.service because of inline-black margin, or use -4px margin-left -->
                        <div class="service">
                            <i class="material-icons">volume_off</i>
                            <h3>Cisza</h3>
                            <p>Sit autem ipsam minus officiis in. Labore ipsum unde ipsum tenetur saepe ad quae. Illum nesciunt
                                minus quis accusantium laboriosam laborum magni? Fugiat sit excepturi ab mollitia modi exercitationem.
                                Sed.
                            </p>
                        </div>
                        <div class="service">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/service_2.jpg" alt="service 2">
                            <h3>Spokój</h3>
                            <p>Sit autem ipsam minus officiis in. Labore ipsum unde ipsum tenetur saepe ad quae. Illum nesciunt
                                minus quis accusantium laboriosam laborum magni? Fugiat sit excepturi ab mollitia modi exercitationem.
                                Sed.
                            </p>
                        </div>
                        <div class="service">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/service_3.jpg" class="rect" alt="service 3">
                            <h3>Życie</h3>
                            <p>Sit autem ipsam minus officiis in. Labore ipsum unde ipsum tenetur saepe ad quae. Illum nesciunt
                                minus quis accusantium laboriosam laborum magni? Fugiat sit excepturi ab mollitia modi exercitationem.
                                Sed.
                            </p>
                        </div>
            </section>

            <div class="article-content">
                <h2>About :)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum ullam maiores iure, voluptatem numquam itaque
                    doloribus odit tenetur quisquam, a esse, laudantium beatae veritatis porro maxime alias dolorum? Numquam,
                    aut.
                </p>
                <p>Mollitia ipsa, est magnam neque placeat dicta velit blanditiis explicabo asperiores tempora, ad possimus
                    incidunt ab quibusdam error, dolores sapiente optio itaque laudantium! Commodi unde eveniet laudantium
                    ipsa animi, ducimus.
                </p>
                <p>In architecto ea saepe, impedit eum labore voluptas alias nihil consectetur possimus earum natus doloremque
                    culpa unde nostrum officia repellat commodi, odio enim ad vero maxime dolores. Et, eius, ducimus.</p>
            </div>

            <div class="article-gallery">

                <h2>Galeria</h2>
                <div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/gallery/dwg_s_01.jpg);" i>
                    <div class="info">
                        <h3>Pokój gościnny</h3>
                    </div>
                </div>
                <div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/gallery/dwg_s_02.jpg);" i>
                    <div class="info">
                        <h3>Kuchnia</h3>
                    </div>
                </div>
                <div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/gallery/dwg_s_07.jpg);" i>
                    <div class="info">
                        <h3>Ogród</h3>
                    </div>
                </div>
                <div class="image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/gallery/dwg_s_05.jpg);" i>
                    <div class="info">
                        <h3>Sypialnie</h3>
                    </div>
                </div>
            </div>
        </article>
        <aside>
            <div class="article-map">
                <h2>Dojazd</h2>
                <div class="overlay" onClick="style.pointerEvents='none'"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6041.2819631720195!2d18.855660353114455!3d49.625278882057906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47141787bb087e59%3A0x48bda62cff6af0cf!2sOsiedle+Kobyla+2%2C+43-460+Wis%C5%82a!5e1!3m2!1spl!2spl!4v1499618987724"
                    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p>Zobacz na zdjęciach jak do nas dojechać</p>
        </aside>
        </div>
    </main>
    <footer>
        <div class="footer-column">
            <h2>Domek w Górach</h2>
            <p>Danuta Rodzeń
                <br>ul. Spokojna 2
                <br>tel. <b><a href="tel:883752444">883 752 444</a></b>
                <br>@: domek@w.gorach</p>
        </div>
    </footer>

    <script src="app.js"></script>
    <?php get_footer(); ?>
