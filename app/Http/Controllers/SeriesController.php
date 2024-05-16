<?php

namespace App\Http\Controllers;

use App\Events\SeriesCreated;
use App\Events\SeriesDestroy;
use App\Http\Middleware\Autenticator;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        Autenticator::class;
    }
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
        $cover_path = $request->file("cover")->store('series_cover', 'public');
        $request->coverPath = $cover_path;
        $serie = $this->repository->add($request);

        SeriesCreated::dispatch(
            $serie->nome,
            $serie->id,
            $request->seasonQty,
            $request->episodesPerSeason
        );
        return to_route('series.index')->with('messagem', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        SeriesDestroy::dispatch(
            $series->cover
        );
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
