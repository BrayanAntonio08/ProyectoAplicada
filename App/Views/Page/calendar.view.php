<div class="hero">
    <div id="calendar"></div>
</div>

<script src="<?= URL_PATH ?>/Public/Assets/js/evo-calendar.js"></script>
<script>
    $(document).ready(function() {
        $('#calendar').evoCalendar({
            theme: 'Midnight Blue',
            calendarEvents: [{
                        id: 'event1', // Event's ID (required)
                        name: "New Year", // Event name (required)
                        date: "January/1/2023", // Event date (required)
                        description: "Se celebra el año nuevo",
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        name: "Partido",
                        date: "Noviembre/5/2023", // Date range
                        type: "event"
                    },
                    {
                        name: "Partido",
                        date: "Noviembre/12/2023", // Date range
                        type: "event"
                    },
                    {
                        name: "Partido",
                        date: "Noviembre/19/2023", // Date range
                        type: "event"
                    },
                    {
                        name: "Partido",
                        date: "Noviembre/26/2023", // Date range
                        type: "event"
                    }
                ]
        })
    })
</script>