<x-layout title="Temporadas de {!! $series->nome !!}">
    <table class="table table-dark tbale-hover ">
        <thead>
            <tr>
                <th style="color: #E07B67;">Temporada</th>
                <th width="10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($seasons as $season)
            <tr>
                <th class="fw-normal"><a href="{{ route('episodes.index', $season->id) }}" class="text-decoration-none text-white">Temporada {{ $season->number }}</a></th>
                <th class="text-end"><span class="badge text-bg-primary">{{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}</span></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>