<?php
include("partials/header.php");
include("partials/nav.php");
?>
<div class="wrap">
  <div id="arrow-left" class="arrow"></div>
  <div id="slider">
    <div class="slide slide1">
      <div class="slide-content">
       
      </div>
    </div>
    <div class="slide slide2">
      <div class="slide-content">
    
      </div>
    </div>
    <div class="slide slide3">
      <div class="slide-content">
    
      </div>
    </div>
  </div>
  <div id="arrow-right" class="arrow"></div>
</div>


<div class="info-content">
    <div class="header-info">
        <div class="col-10">
            <h2>Nom du Yacht - 42 mètres</h2>
        </div>
        <div class="col-2">
            <p>Port d'attache</p>
            <p><small>43°34 Nord 007° 05 Est</small></p>
        </div>    
    </div>
    <div class="header-info-text">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore perferendis animi explicabo 
        illo deserunt voluptates soluta autem obcaecati atque vero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea obcaecati atque dolor aliquid, nobis dolores! Expedita eligendi amet nemo ut aut fugit maiores animi ullam voluptatibus similique laboriosam dolorum earum consectetur inventore temporibus doloribus quaerat nam ipsa repellendus, reiciendis repellat rem obcaecati! Cumque ratione, quibusdam reiciendis nam esse quas quisquam blanditiis voluptates voluptatem consectetur nesciunt ipsam explicabo eos porro autem ipsa nobis recusandae suscipit? Ad pariatur reprehenderit, repellat eveniet consectetur magnam veritatis, assumenda facere nam aperiam unde distinctio et debitis hic. Quis voluptatem a aut aperiam exercitationem eaque ipsa, iure obcaecati pariatur nisi deleniti praesentium dolorum nihil, dolorem est possimus?
    </p>
    </div>

    <div class="info-body grid">
        <div class="tabs-v3 js-tabs col-12 col-9@md">
            <ul class="tabs-v3__controls js-tabs__controls" aria-label="Tabs Interface">
                <li><a href="#tab1Panel1" class="tabs-v3__control js-tab-focus" aria-selected="true">Options</a></li>
                <li><a href="#tab1Panel2" class="tabs-v3__control js-tab-focus">Disponibilités</a></li>
                <li><a href="#tab1Panel3" class="tabs-v3__control js-tab-focus">Equipage</a></li>
                <li><a href="#tab1Panel4" class="tabs-v3__control js-tab-focus">Galerie photos</a></li>
            </ul>

            <div class="tabs-v3__panels js-tabs__panels">
                <section id="tab1Panel1" class="tabs-v3__panel is-visible js-tabs__panel">
                <div class="text-component">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
                </div>
                <div class="listLogo grid">
                    <div class="logo-style col-10 col-2@sm">
                        <p>👥 10</p>
                    </div>
                    <div class="logo-style col-10 col-2@sm">
                        <p>🛏️ 10</p>
                    </div>
                    <div class="logo-style col-10 col-2@sm">
                        <p>🍴 10</p>
                    </div>
                    <div class="logo-style col-10 col-2@sm">
                        <p>⚓ 10</p>
                    </div>
                    <div class="logo-style col-10 col-2@sm">
                        <p>💻 10</p>
                    </div>
                    <div class="logo-style col-10 col-2@sm">
                        <p>⚙️ 10</p>
                    </div>
                </div>
                <div class="info-map grid">
                    <div class="list-info col-12 col-6@md">
                        <h1>Les +</h1>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                    <div class="map-only  col-12 col-6@md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92299.36306442364!2d7.182777568251079!3d43.70316906751322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0106a852d31%3A0x40819a5fd979a70!2sNice!5e0!3m2!1sfr!2sfr!4v1618304554569!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="fullscreen" loading="lazy"></iframe>

                    </div>
                </div>
                    
                </section>

                <section id="tab1Panel2" class="tabs-v3__panel js-tabs__panel">
                <div class="text-component">
                    <h1>Disponibilités</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
                    <div class="calendar-zone grid col-12">
                        <div class="calendar-container col-12 col-5@xl">
                            <div id="prev" class="prev"></div>
                            <div id="next" class="next"></div>
                            <article class="calendar" id="calendar1"></article>
                        </div>
                        <div class="calendar-container col-12 col-5@xl">
                            <div id="prev2" class="prev"></div>
                            <div id="next2" class="next"></div>
                            <article class="calendar" id="calendar2"></article>
                        </div>
                        
                    </div>
                    <div class="verifDispo col-12">
                            <form action="#"></form>
                            <h3 class="col-12">Vérifier la dispo</h3>
                                <input class="form-control col-12 col-3@lg" type="date" placeholder="date de départ">
                                <input class="form-control col-12 col-3@lg" type="date" placeholder="date d'arrivée">
                                <button class="btn btn--slide-fx btn--slide-fx-replace-label js-btn--slide-fx btn-home-style col-12 col-3@lg">Vérifier</button>
                            </form>
                    </div>
                </div>
                </section>

                <section id="tab1Panel3" class="tabs-v3__panel js-tabs__panel">
                <div class="text-component">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, veritatis. lorem</p>
                    <div class="card-zone">
                        <?php 
                            for($i=0; $i<6; $i++){
                                echo '
                                <div class="card-personal col-12 col-3@md">
                                    <div>
                                        <img src="assets/images/capitaine.jpg">
                                    </div>
                                    <div class="description-text">
                                        <h3>NOM PRENOM</h3>
                                        <h4>Poste, Langue, Age</h4>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>';

                            }
                        ?>
                    </div>
                </div>
                </section>

                <section id="tab1Panel4" class="tabs-v3__panel js-tabs__panel">
                <div class="text-component">
                    <h1>Galerie photos</h1>
                </div>
                <div class="contain-slider">
                    <div class="slider-gallery">
                        <img class="slid active" src="assets/images/yacht-concept-luxury.jpg" alt="">
                        <img class="slid" src="assets/images/Yacht-Co.jpg">
                        <img class="slid" src="assets/images/yacht03.jpeg">
                    </div>
                    <div class="cont-btn">
                        <div class="btn-nav left">❮</div>
                        <div class="btn-nav right">❯</div>
                    </div>
                </div>
                </section>

            </div>
        </div>
        <div class="sidebar-custom col-3@md">
            <h3>Récapitulatif de la demande</h3>
            <p>Nom du yacht</p>
            <p>42 mètres</p>
            <p><small>Equipage + infos sup</small></p>
            <input class="form-control" type="date" placeholder="Arrivé">
            <input class="form-control" type="date" placeholder="Départ">
            <input class="form-control" type="number" placeholder="Nombre de pers.">
            <p class="lorem">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum delectus at quae hic architecto, corrupti excepturi reiciendis ex ea quos id aperiam libero, esse repellat illo sapiente quia.</p>
            <button class="btn book-now">Book Now</button>
        </div>
    </div>
        <div class="containe-carousel">
            <div class="wrapper">
                <div class="carousel owl-carousel">
                    <?php
                    for($i=0; $i<9; $i++){
                    echo '<div class="card">
                            <img src="assets/images/yacht-1.jpg">
                            <div class="text-zone">
                                <h5>Nom du yacht</h5>
                                <p><span>&#128197;Disponible </span> 7jours</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p class="info-card">&#128101; 12 | &#9875; port | <button class="btn-book">Book</button></p>
                            </div>
                         </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
include("partials/footer.php");
?>