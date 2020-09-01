<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Videogame List</title>
  </head>
  <body>
    <h1>Videogame List</h1>

    <ul>
      @foreach ($videogame as $game)
        <li> {{$game->platform}} - {{$game->videogame}} </li>
      @endforeach
    </ul>
  </body>
</html>
