<x-layout title="Temporadas de {!! $series->nome !!}">
    @section('css')
    <style>
        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background: blue;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-corner {
            background: #f1f1f1;
        }
    </style>
    @endsection
    <div class="row m-0 mt-5" style="height: 400px;">
        <div class="d-flex justify-content-center col-6 h-100">
            <img src="{{ asset('storage/'.$series->cover) }}" class="img-fluid" alt="">
        </div>
        <div class="col-6 h-100 overflow-x-auto">
            <table class="table table-dark tbale-hover col-6">
                <thead>
                    <tr>
                        <th style="color: #E07B67;">Temporadas</th>
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
        </div>
    </div>
</x-layout>