<x-layout title="Episódios" :messagem="$messagem">
  <form method="post">
    @csrf
    <table class="table table-dark tbale-hover ">
      <thead>
        <tr>
          <th style="color: #E07B67;">Episódios</th>
          <th width="10%"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($episodes as $episode)
        <tr>
          <th class="fw-normal">Episódio {{ $episode->number }}</th>
          <th class="text-end"><input type="checkbox" class="form-check-input" name="episodes[]" value="{{$episode->id}}" @if ($episode->watched) checked @endif /></th>
        </tr>
        @endforeach
      </tbody>
    </table>
    <button type="submit" class="btn btn-sm btn-outline-success">Salvar</button>
  </form>
</x-layout>