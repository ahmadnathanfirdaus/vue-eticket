<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check-in QR Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center text-center m-3">
        <div class="col-lg-4">
            <div class="block">
                <img src="{{ config('app.url') }}/images/itts.png" alt="itts" width="80">
                <img src="{{ config('app.url') }}/images/bem.png" alt="bem" width="80">
                <img src="{{ config('app.url') }}/images/esport.png" alt="esport" width="80">
            </div>
            <h1 class="my-4 text-center">Gunakan QR Code ini untuk check-in</h1>
            {!! SimpleSoftwareIO\QrCode\Facades\QrCode::size(150)->generate($ticket->code) !!} <br><br>
            {{ $ticket->code }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
