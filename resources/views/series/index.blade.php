<x-layout title="Series">
    @isset($messagem)
    <div class="alert alert-success mb-3">
        {{$messagem}}
    </div>
    @endisset
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('series.create')}}" class="btn btn-info btn-sm text-white">
            <i class="bi bi-folder-plus"></i>
            Adicionar série
        </a>
    </div>
    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>Nome da série</th>
                <th width="10%"></th>
                <th width="10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($series as $serie)
            <tr>
                <th class="fw-normal">{{ $serie->nome }}</th>
                <th>
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm w-100">
                        Editar
                    </a>
                </th>
                <th>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm w-100">
                            deletar
                        </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>