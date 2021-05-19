<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Document</title>
    </head>
    <body>
        <h1 align="center">Lista de paises</h1>
        <div style="text-align: center">
        <table class="table table-striped ">
            <tr>
                <th><span class="text-info">Nombre</span></th>
                <th><span class="text-info">Capital</span></th>
                <th><span class="text-info">Moneda</span></th>
                <th><span class="text-info">Poblacion</span></th>
            </tr>
            @foreach ($naciones as $nombre => $nacion)
                <tr>
                    <td>{{$nombre}}</td>
                    <td>{{$nacion["capital"]}}</td>
                    <td>{{$nacion["moneda"]}}</td>
                    <td>{{$nacion["poblacion"]}}</td>
                </tr>
            @endforeach
        </table>
        </div>
    </body>
</html>
