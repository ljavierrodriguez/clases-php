<!-- El archivo de encabezado de la pagina web (css)-->
<?php include './header.php' ?>

<!-- Contenido de Mi pagina Principal -->
<div class="container">
    <div class="row">
        <div class="col-md-12 pb-3">
            <div id="carouselExample" class="carousel slide shadow">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/100/900/400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/120/900/400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/140/900/400" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Home</h4>
        </div>
    </div>
</div>

<!-- El archivo de pie de la pagina web (scripts) -->
<?php include './footer.php' ?>