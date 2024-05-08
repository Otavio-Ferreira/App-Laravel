<x-series.form :action="route('series.update', $data->id)" :nome="$data->nome" title="Editar série {{$data->nome}}">
</x-series.form>