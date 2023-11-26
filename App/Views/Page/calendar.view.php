<?php
include_once(__DIR__ . "/components/create-event.component.php");
?>

<div class="container">
    <div class="row">
        <button class="btn btn-primary col-lg-2 col-md-3 col-sm-6" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">
            Crear evento
        </button>
    </div>
</div>



<div class="hero">
    <div id="calendar"></div>
</div>

<script src="<?= URL_PATH ?>/Public/Assets/js/evo-calendar.js"></script>
<script>
    console.log("-------------");
    let eventos = <?= json_encode($data['eventos']); ?>;
    console.log(eventos);
    $(document).ready(function () {
        $('#calendar').evoCalendar({
            theme: 'Midnight Blue',
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            firstDayOfWeek: 0,
            calendarEvents: eventos
        })
    })
</script>