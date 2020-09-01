<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Videogame List</title>
  </head>
  <body>
    <h1>Videogame List</h1>

    @php
      foreach ($videogame as $platform) {
        foreach ($platform as $game) {
          @endphp
          <li> @php echo $game; @endphp </li>
          @php
        }
      }
    @endphp
  </body>
</html>
