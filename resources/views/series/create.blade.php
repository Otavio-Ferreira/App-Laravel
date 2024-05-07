<x-layout title="Nova série">
    <form action="{{route('series.store')}}" method="POST" class="bg-primary-subtle rounded shadow m-5 p-3">
        @csrf
        <div class="form-control">
            <label for="nome" class="form-label">Nome da série:</label>
            <input type="text" id="nome" name="nome" class="form-input form-control">
        </div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
</x-layout>