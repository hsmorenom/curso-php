<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar una nueva sesión de cURL; ch = cURL Handle
$ch = curl_init(API_URL);
# Indicar que queremos recibir el resultado de una peticion y no mostrarla en pantalla
/*si es la primera vez aue se usa un api en php, se debe descargar el certificado de autorización con este link:
    https://curl.se/ca/cacert.pem y guardarlo en este path: C:\php\extras\ssl a su vez en php.ini, agregar eta ruta en: curl.cainfo = "C:\php\extras\ssl\cacert.pem"

    */
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la petición
y guardamos el resultado
*/
$result = curl_exec($ch);
// una alternativa facil para obtener la info de la api es con file_get_contents
// $result = file_get_contents(API_URL), aca solo si se requiere el GET de una API

#aca se guarda la información
$data = json_decode($result, true);
#aca se cierra el api
curl_close($ch);
#Aca se mira el tipo de información que se guardo en $data
//var_dump($data);

?>

<head>
    <meta charset="UTF-8">
    <title>La proxima pelicula del año</title>
    <meta name="description" content="La proxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--se va a utilizar un framework llamado pico css sin clases classless-->
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>

    <!--<pre style="font-size: 8px; overflow: scroll; height: 250px; width: 900px ;">
        //<?= var_dump($data) ?>
    </pre> -->
    <section>
        <img
            src="<?= $data["poster_url"] ?>" width="50%" alt="Poster de <?= $data["title"] ?>"
            style="border-radius: 16px;" />

    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p>La siguiente película en estrena es: <?= $data["following_production"]["title"]; ?> </p>
    </hgroup>


</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>