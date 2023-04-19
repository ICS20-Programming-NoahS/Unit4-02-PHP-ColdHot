<!DOCTYPE html>
<!-- Unit4-02-HTML-ColdHot-->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Hot cold">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
  
    <!--Link to CSS file-->
    <link rel="stylesheet" href="./css/style.css">
  
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  
    <title>Is the temperature hot or cold?</title>
  
  </head>
  <body>
  <!--header-->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Is the temperature hot or cold?</span>
      </div>
    </header>
  </div>
    <main class="mdl-layout__content">
    <img src="./images/hot_cold.jpeg" alt="Hot or cold">
    <br>
    <br>
    <!-- Guess a number -->
    <form action="./results.php" method="post" target="results">
      <label for="hot-cold">Enter the temperature in Celsius:</label>
      <input type="number" id="hot-cold" placeholder="Enter the temperature"  name="hot-cold">
      <br>
      <input type="submit" value="calculate">
    </form>
      <p>
        <iframe id="results" name="results">
        </iframe>
      </p>
    </main>
  </body>
</html>
