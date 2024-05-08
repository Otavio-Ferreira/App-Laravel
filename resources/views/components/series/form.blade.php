<x-layout title="{{$title}}">
    <form action="{{ $action }}" method="POST" class="">
        @csrf
        @isset($nome)
        @method('PUT')
        @endisset
        <div class="form-floating mb-3">
            <input type="text" id="nome" name="nome" class="form-control" placeholder="name@example.com"  @isset($nome) value="{{$nome}}" @endisset>
            <label for="nome">Nome da série</label>
        </div>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
</x-layout>