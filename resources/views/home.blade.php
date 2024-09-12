<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <title>treni in partenza</title>
</head>

<body>
    <div class="container-fluid">

        <h1>treni in partenza</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">azienda</th>
                    <th scope="col">numero treno</th>
                    <th scope="col">stazione di partenza</th>
                    <th scope="col">stazione di arrivo</th>
                    <th scope="col">orario partenza</th>
                    <th scope="col">orario arrivo</th>
                    <th scope="col">cancellato</th>



                </tr>
            </thead>
            <tbody>

                @foreach ($trains as $train)
                    <tr>
                        <th>{{ $train->Azienda }}</th>
                        <th>{{ $train->CodiceTreno }}</th>
                        <th>{{ $train->StazionePartenza }}</th>
                        <th>{{ $train->StazioneArrivo }}</th>
                        <th>{{ $train->OrarioPartenza }}</th>
                        <th>{{ $train->OrarioArrivo }}</th>
                        <th>{{ $train->Cancellato }}</th>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
