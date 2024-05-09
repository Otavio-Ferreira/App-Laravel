<x-layout title="Editar série '{!!$data->nome!!}'">
  <x-series.form :action="route('series.update', $data->id)" :nome="$data->nome" :update="true"/>
</x-layout>