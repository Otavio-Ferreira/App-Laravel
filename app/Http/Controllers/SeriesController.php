<?php

namespace App\Http\Controllers;


use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome', 'desc')->get();
        $messagem = session('messagem');
        return view('series.index')->with('series', $series)->with('messagem', $messagem);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        return to_route('series.index')->with('messagem', "A serie '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Serie $series){

        $series->delete();
        return to_route('series.index')->with('messagem', "A serie '{$series->nome}' removida com sucesso");
    }
}
