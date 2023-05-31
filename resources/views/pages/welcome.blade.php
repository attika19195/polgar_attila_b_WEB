<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="css/welcome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="module" src="{{ url('/script/main.js') }}"></script>
</head>

<body>
    <header>
        <p>Szótár</p>
        <p>Szavak</p>
    </header>
    <article>
        <label>
            <select class="temak_article">
                <option value="" disabled selected>Válassz témát!</option>
                
            </select>
        </label>
        <div class="mezoLeiro">
            <p>ANGOL</p>
            <p>MAGYAR</p>
            <p>visszajelzés</p>
        </div>

        <div class="szavak_article">
        </div>

    </article>


</body>

</html>