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
