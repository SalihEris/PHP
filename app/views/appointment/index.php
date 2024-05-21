<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Bling Bling Nail Studio Chantel</h1>
    <form method="post" action="/appointment/create">
        <div style="display: flex; flex-direction: row">
            <input type="color1" name="color1" value="#014012" />
            <input type="color2" name="color2" value="#0bb839" />
            <input type="color3" name="color3" value="#d4d4d4" />
            <input type="color4" name="color4" value="#303631" />
        </div>
        <label for="phone_number">Uw telefoonnummer:</label>
        <input id="phone_number" name="phone_number" type="text" placeholder="+31 6 12345689" />
        <label for="email">Uw e-mailadres:</label>
        <input id="email" name="email" type="text" placeholder="example@gmail.com" />
        <label for="date">Afspraak datum:</label>
        <input id="date" name="date" type="date" />
        <div>
            <p>Soort behandeling:</p>
            <label for="nail_biting">Nagelbijt arrangement (termijnbetaling mogelijk) € 180</label>
            <input id="nail_biting" name="nail_biting" type="checkbox" style="float: left"/>
            <br>
            <label for="massage">Luxe manicure (massage en handpakking) € 30</label>
            <input id="massage" name="massage" type="checkbox" style="float: left"/>
            <br>
            <label for="nail_repair">Nagelreparatie per nagel (in eerste week gratis) € 5</label>
            <input id="nail_repair" name="nail_repair" type="checkbox" style="float: left"/>
        </div>
        <button>Sla op</button>
    </form>
    <button onclick="window.location.href='/appointment/create'">Reset</button>

</body>
</html>