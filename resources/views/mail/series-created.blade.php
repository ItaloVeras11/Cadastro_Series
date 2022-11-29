@component('mail::message')

# {{ $nomeSerie }} criada

A serie {{ $nomeSerie }} com {{ $seasonsQty }} Temporadas e {{ $episodesPerSeason }} episodios por Temporada
foi criada

Acesse aqui:

@component('mail::button', ['url' => route('seasons.index', $idSerie)])
    Ver Serie
@endcomponent



@endcomponent
