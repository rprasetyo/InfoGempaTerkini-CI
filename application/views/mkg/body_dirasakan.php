
<div class="container-fluid" style="margin-top: 60px;" id="show">
    <div class="starter-template">
        <h1 style="font-size:4vw;">Gempa Bumi Dirasakan</h1>

        <div class="table-responsive pd-top">
            <table class="table table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Koordinat</th>
                    <th>Magnitude</th>
                    <th>Kedalaman</th>
                    <th>Keterangan</th>
                    <th>Dirasakan</th>
                </tr>
                </thead>
                <tbody id="gempabumidirasakan"></tbody>
                <tfoot class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Koordinat</th>
                    <th>Magnitude</th>
                    <th>Kedalaman</th>
                    <th>Keterangan</th>
                    <th>Dirasakan</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="pd-top text-center text-small">
                    Sumber data: <a href="http://data.bmkg.go.id" target="_blank">BMKG (Badan Meteorologi, Klimatologi, dan Geofisika)</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        jQuery.ajax({
            type: 'GET',
            url: 'https://hnf-cors.herokuapp.com/?http://data.bmkg.go.id/gempadirasakan.xml',
            dataType: 'xml',
            success: function(response) {
                var nomor = 1;
                $(response).find('Infogempa').children().each(function() {
                    $('#gempabumidirasakan').append('<tr>' +
                        '<td>' + nomor + '.</td>' +
                        '<td>' + $(this).find('Tanggal').text() + ', ' + $(this).find('Jam').text() + '</td>' +
                        '<td>' + $(this).find('Posisi').text() + '</td>' +
                        '<td>' + $(this).find('Magnitude').text() + ' SR</td>' +
                        '<td>' + $(this).find('Kedalaman').text() + '</td>' +
                        '<td>' + $(this).find('Keterangan').text() + '</td>' +
                        '<td>' + $(this).find('Dirasakan').text() + '</td>' +
                        '</tr>');
                    nomor += 1
                });
            },
            error: function() {}
        });
    });
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 10000);
</script>

