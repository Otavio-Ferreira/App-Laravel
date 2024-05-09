<x-layout title="Nova série">
  <form action="{{ route('series.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="text-white mb-2">Nome da série</label>
        <input type="text" id="nome" name="nome" value="{{old('nome')}}" class="form-control bg-transparent text-white">
    </div>
    <div class="d-flex w-100 gap-2">
      <div class="mb-3 w-100">
          <label for="seasonQty" class="text-white mb-2">№ Temporadas</label>
          <input type="text" id="seasonQty" name="seasonQty" value="{{old('seasonQty')}}" class="form-control bg-transparent text-white">
      </div>
      <div class="mb-3 w-100">
          <label for="episodeQty" class="text-white mb-2">№ de Episodios</label>
          <input type="text" id="episodeQty" name="episodeQty" value="{{old('episodeQty')}}" class="form-control bg-transparent text-white">
      </div>
    </div>
    <button class="btn btn-outline-success" type="submit">Salvar</button>
  </form>
</x-layout>
