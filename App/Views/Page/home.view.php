<?php
//se añade el modal de crear anuncio
include_once(__DIR__ . "/components/create-ad.component.php");
?>

<div class="container overflow-hidden text-center">
    <div class="row gy-4">
        <div class="col-7"> <!--Empieza columna anuncios-->
            <?php
            //Se cargan los anuncios de los datos
            $anuncios = $data["anuncios"];

            //se recorren para generar las trajetas de anuncio
            foreach ($anuncios as $anuncio) {
                ?>
                <div class="p-3 border border-success p-2 mb-2 anuncios">
                    <div class="border border-success p-2 mb-2 new-title" style="--bs-border-opacity: .5;"><?= $anuncio['title']?></div>
                    <div class="grid">
                        <div>
                            <p class="text-justify"><?= $anuncio['description']?></p>
                        </div>
                    </div>
                    <div class="text-end small date"><?= $anuncio['date']?></div>
                </div>
            <?php } ?>

        </div><!--Termina columna anuncios-->
        <div class="col-3">
            <div class="btn-group-vertical border" role="group" aria-label="Vertical button group">
                <button type="button" class="btn border border-black" data-bs-toggle="modal"
                    data-bs-target="#<?= $modalId ?>">Nuevo Anuncio</button>
                <button type="button" class="btn border border-black">Buscar Anuncio</button>
            </div>
        </div>
    </div>
</div>