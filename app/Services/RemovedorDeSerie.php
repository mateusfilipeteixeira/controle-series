<?php

namespace App\Services;

use App\{Serie, Temporada, Episodio};
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function removerSerie(int $serieId): string
    {
        $nomeSerie = '';
        DB::transaction(function() use($serieId, &$nomeSerie){
            $serie = Serie::find($serieId);

            $nomeSerie = $serie->nome;

            $this->removerTemporadas($serie);
        });

        return $nomeSerie;
    }

    public function removerTemporadas($serie){
        $serie->temporadas->each(function ($temporada){
            $temporada->episodios->each(function ($episodio){
                $episodio->delete();
            });
            $temporada->delete();
        });

        $serie->delete();
    }
}
