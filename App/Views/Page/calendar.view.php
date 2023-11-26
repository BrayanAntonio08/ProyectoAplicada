<?php
include_once(__DIR__ . "/components/create-event.component.php");
if (isset($data['eventos'])) {
    Console::log($data['eventos']);
}
?>

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
            calendarEvents: eventos
        })
    })
</script>

