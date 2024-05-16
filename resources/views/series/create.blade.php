<x-layout title="Nova série">
  <form action="{{ route('series.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nome" class="text-white mb-2">Nome da série</label>
      <input type="text" id="nome" name="nome" value="{{old('nome')}}" onkeyup="validate('nome')" class="form-control bg-transparent text-white" required>
    </div>
    <div class="d-flex w-100 gap-2">
      <div class="mb-3 w-100">
        <label for="seasonQty" class="text-white mb-2">№ Temporadas</label>
        <input type="number" id="seasonQty" name="seasonQty" value="{{old('seasonQty')}}" class="form-control bg-transparent text-white" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="mb-3 w-100">
        <label for="episodesPerSeason" class="text-white mb-2">№ de Episodios</label>
        <input type="number" id="episodesPerSeason" name="episodesPerSeason" value="{{old('episodesPerSeason')}}" class="form-control bg-transparent text-white" required>
      </div>
    </div>
    <div class="w-100 text-center">
      <label for="cover" class="rounded w-100 text-white mb-2 p-4" style="cursor: pointer;border: dashed 2px white;">
        <i class="bi bi-cloud-upload fs-1"></i> <br>
        Selecione uma imagem para a campa
      </label>
      <input type="file" onchange="showFile()" id="cover" name="cover" value="{{old('cover')}}" accept=".png, .jpg, .jpeg" class="form-control bg-transparent text-white is-valid" hidden required>
      <div class="" id="response">

      </div>
    </div>
    <button class="btn btn-outline-success" type="submit">Salvar</button>
  </form>
  @section('script')
  <script>
    function showFile() {
      const input = document.getElementById('cover');

      const file = input.files[0];
      if (!file) return;

      const fileName = file.name;
      const fileType = fileName.split('.').pop().toLowerCase();
      const area = document.getElementById('response');

      const allowedExtensions = ['png', 'jpg', 'jpeg'];

      if (allowedExtensions.includes(fileType)) {
        area.textContent = fileName + ' selecionado.';
        area.classList.add('valid-feedback');
        area.classList.remove('text-danger');
      } else {
        input.value = '';
        area.classList.add('text-danger');
        area.classList.remove('valid-feedback');
        area.textContent = 'Por favor, selecione um arquivo PNG, JPG, ou JPEG.';
      }
    }
  </script>
  @endsection
</x-layout>