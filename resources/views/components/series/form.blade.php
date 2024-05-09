<form action="{{ $action }}" method="POST" class="">
        @csrf
        @if($update)
        @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nome" class="text-white mb-2">Nome da série</label>
            <input type="text" id="nome" name="nome" class="form-control bg-transparent text-white" @isset($nome) value="{{$nome}}" @endisset>
        </div>
        <button class="btn btn-outline-success" type="submit">Salvar</button>
</form>