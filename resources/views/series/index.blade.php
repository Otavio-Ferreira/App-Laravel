<x-layout title="Series" :messagem="$messagem">
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('series.create')}}" class="btn btn-sm text-white" style="background: #E07B67;">
            <i class="bi bi-folder-plus"></i>
            Adicionar série
        </a>
    </div>
    <table class="table table-dark tbale-hover ">
        <thead>
            <tr>
                <th style="color: #E07B67;">Nome da série</th>
                <th width="10%"></th>
                <th width="10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($series as $serie)
            <tr>
                <th class="fw-normal"><a href="{{route('seasons.index', $serie->id)}}" class="text-decoration-none text-white">{{ $serie->nome }}</a></th>
                <th>
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-pencil-square"></i>
                        Editar
                    </a>
                </th>
                <th>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm w-100">
                            <i class="bi bi-trash3"></i>    
                            Deletar
                        </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>