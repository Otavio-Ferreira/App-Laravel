<x-layout title="Series">
    <div class="card m-3">
        <div class="card-header d-flex flex-wrap justify-content-between align-content-center">
            <p class="text-muted fw-bold mt-auto mb-auto">Tabela de séries</p>
            <a href="/series/criar" class="btn btn-primary">Adicionar</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nome da série</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($series as $serie)
                    <tr>
                        <th>{{ $serie->nome }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>