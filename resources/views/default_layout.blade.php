
<!doctype html>
<html lang="de">
<head>
     <title>@yield("title")</title>
     <meta charset="UTF-8">
     <link href="{{asset("/css/app.css")}}" type="text/css" rel="stylesheet">
</head>

<body>
<header>
    <img src="{{asset("/images/Sc_500x500.png")}}" alt="Logo_Schwarz_Web_500X500">
    @section("header")
    @show
</header>


<main>
    @section("main-content")
        <div class="defaultContainer" >
      <p>
          Sie möchten eine Website? Komplett nach ihren Wunsch? Dann sind Sie hier genau richtig.

      </p></div>
    @show
</main>

<footer>
    @section("footer")
        <a href="/Impressum" >Impressum</a>
        <a href="/Datenschutz" >Datenschutz</a>
    @show
</footer>

</body>
</html>
