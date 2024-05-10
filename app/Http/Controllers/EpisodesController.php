<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index')->with(['episodes' => $season->episodes, 'messagem' => session('messagem')]);
    }

    public function update(Request $request, Season $season)
    {

        DB::transaction(function () use ($season, $request) {
            $watchedEpisodes = $request->episodes;

            if (!is_array($watchedEpisodes)) {
                $watchedEpisodes = [];
            }

            $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
                if (!is_null($watchedEpisodes) && is_array($watchedEpisodes)) {
                    $episode->watched = in_array($episode->id, $watchedEpisodes);
                } else {
                    $episode->watched = false;
                }
            });

            $season->push();

        });

        return to_route('episodes.index', $season->id)->with('messagem', 'Episódios marcados como assistidos');
    }
}
