<x-mail::message>
  # {{$nomeSerie}} criada

  A serie {{$nomeSerie}} com {{$qtdTemporadas}} temporadas e {{$qtdEpisodios}} episódios por temporada foi criada.

  Acesse aqui:

  <x-mail::button :url="route('seasons.index', $idSerie)">
    Ver serie
  </x-mail::button>
</x-mail::message>