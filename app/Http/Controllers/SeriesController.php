<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::all();

        // $series = Serie::active(); Buscar o escopo das buscas

        $messagem = session('messagem');
        return view('series.index')->with('series', $series)->with('messagem', $messagem);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {  
        
        $serie = Series::create($request->all());
        return to_route('series.index')->with('messagem', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {

        $series->delete();
        return to_route('series.index')->with('messagem', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {

        $data = Series::find($series->id);
        return view('series.edit')->with('data', $data);
    }
 
    public function update(Series $series, SeriesFormRequest $request)
    {
        // $series->nome = $request->nome;
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('messagem', "Série '{$series->nome}' editada com sucesso");
    }
}
