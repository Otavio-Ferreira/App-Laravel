<x-layout title="Series">
    @isset($messagem)
        <div class="alert alert-success m-3">
            {{$messagem}}
        </div>
    @endisset
    <div class="card m-3">
        <div class="card-header d-flex flex-wrap justify-content-between align-content-center">
            <p class="text-muted fw-bold mt-auto mb-auto">Tabela de séries</p>
            <a href="{{route('series.create')}}" class="btn btn-primary">Adicionar</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nome da série</th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($series as $serie)
                    <tr>
                        <th>{{ $serie->nome }}</th>
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
        </div>
    </div>
</x-layout>