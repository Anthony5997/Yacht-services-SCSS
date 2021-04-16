<?php
include("partials/header.php");
include("partials/nav.php");
?>
<div class="map-content">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92299.36306442364!2d7.182777568251079!3d43.70316906751322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0106a852d31%3A0x40819a5fd979a70!2sNice!5e0!3m2!1sfr!2sfr!4v1618304554569!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="fullscreen" loading="lazy"></iframe>
</div>
    <div class="map-search col-12">
        <div class="grid">
            <form action="#"></form>
                <label for="destination col-12 col-2@sm">Destination</label>
                <input class="form-control col-12 col-2@sm" id="destination" type="text">
                <input class="form-control col-12 col-2@sm" type="date" placeholder="date de départ">
                <input class="form-control col-12 col-2@sm" type="date" placeholder="date d'arrivée">
                <input class="form-control col-12 col-2@sm" type="number" placeholder="taille du bateau">
                <button class="btn btn--slide-fx btn--slide-fx-replace-label js-btn--slide-fx btn-home-style col-12 col-2@sm">Rechercher</button>
            </form>
        </div>
    </div>
    <div class="search-result">
        <h1>Résultat de votre recherche</h1>
        <a>ou voir tout les yachts disponible</a>
        <div class="filter-selection grid">
            <h3 class="col-12 col-2@sm">Filter <small>la selection</small></h3>
            <a class="col-12 col-2@sm">Taille du bateau</a>
            <a class="col-12 col-2@sm">points d'achat</a>
            <a class="col-12 col-2@sm">Personne à bord</a>
            <label class="col-12 col-2@sm" for="dispo">Disponibilitée</label>
            <input class="col-12 col-2@sm" id="dispo" type="checkbox">
        </div>
        <div class="article-board grid">
            <div class="articles col-12 col-8@md">
               <?php
               for($i=0; $i<12; $i++){
                   echo '<div class="card-custom col-12 col-4@md">
                            <img src="assets/images/yacht-1.jpg">
                            <div class="text-zone">
                                <h5>Nom du yacht</h5>
                                <ul>
                                    <li><span>&#128197;Disponible </span> 7jours</p></li>
                                    <li><p class="description-yacht">Lorem ipsum dolor sit amet consectetur adipisicing.</p></li>
                                    <li><p class="info-card">&#128101; 12 | &#9875; port | <button class="btn-book">Book</button></p></li>
                                </ul>
                            </div>
                        </div>';
               }               
               ?>
            </div>
            <div class="sidebar-custom col-12 col-4@md">
                <div class="sidebar-up">
                    <p class="lateral-text"> 
                    </p>

                
                </div>
                <div class="sidebar-down"></div>
            </div>
        </div>
        <h1>Les actualités du Yacht</h1>
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
<div>

    </div>
</div>
<?php
include("partials/footer.php");
?>