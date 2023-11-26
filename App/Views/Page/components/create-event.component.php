<?php
/**
 * Se crea este componente para crear un nuevo evento, será un modal desplegable en 
 * la ventana principal
 */

$modalId = 'modal-create-event';
?>

<div class="modal fade" id="<?= $modalId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro de un nuevo evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= URL_PATH ?>/Event/Create" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="ad-title" class="form-label">Título</label>
                        <input type="text" name="title_param" id="event-title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="ad-title" class="form-label">Fecha</label>
                        <input type="date" name="date_param" id="event-date" class="form-control">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="ad-description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="ad-description" rows="3" name="description"></textarea>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Crear evento"></input>
                </div>
            </form>
        </div>
    </div>
</div>