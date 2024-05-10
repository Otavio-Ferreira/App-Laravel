<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
  public function add(SeriesFormRequest $request) : Series
  {
    return DB::transaction(function () use ($request) {
      $serie = Series::create($request->all());

      $request->validate([
        'seasonQty' => ['required', 'integer', 'min:1'],
        'episodesPerSeason' => ['required', 'integer', 'min:1'],
      ], [
        'seasonQty.required' => 'O campo № Temporadas é obrigatório',
        'seasonQty.min' => 'O campo № Temporadas precisa de pelo menos :min caracteres',
        'episodesPerSeason.required' => 'O campo № de Episodios é obrigatório',
        'episodesPerSeason.min' => 'O campo № de Episodios precisa de pelo menos :min caracteres',
      ]);

      for ($i = 1; $i <= $request->seasonQty; $i++) {
        $seasons[] = [
          "series_id" => $serie->id,
          "number" => $i,
        ];
      }

      Season::insert($seasons);

      $episodes = [];

      foreach ($serie->seasons as $season) {
        for ($e = 1; $e <= $request->episodesPerSeason; $e++) {
          $episodes[] = [
            "season_id" => $season->id,
            "number" => $e,
          ];
        }
      }

      Episode::insert($episodes);

      return $serie;
    });
  }
}
