<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function index(){
        $film = $this->data();
        return view('content.films', [
            'film' => $film,
            'title' => "ALL FILM"
        ]);
    }

    public function data(){
        $film = DB::select('select *, f.id id_film from films f 
                            join genres g on f.genre = g.id order by f.id asc');
        // dd($film);
        $data = [];
        $nomor = 0;
        foreach($film as $f){
            $nomor++;
            $data[]=[
                'id' => $f->id_film,
                'nomor' => $nomor,
                'judul' => $f->judul,
                'actor' => $f->actor,
                'sipnosis' => $f->sipnosis,
                'author' => $f->created_by,
                'genre' => $f->name
            ];
        }
        // dd($data);
        return $data;
    }

    public function show($id){
        $film = film::all();
        return view('single.film',[
            "title" => $film->judul,
            "film" => film::find($id),
        ]);
    }

    

    public function simpan(Request $request){
        $id = new film;
        film::create([
            'judul' => $request->judul,
            'sipnosis' => $request->sipnosis,
            'genre' => $request->genre,
            'actor' => $request->actor,
            'created_by' => $request->author,
        ]);
    }

    // public function tambah(){

    // }

    public function edit(Request $request) {
        $film = film::find($request->id);
        $genre = Genre::all();
        return view('film.edit', ['film'=>$film], ['genre'=>$genre]);
    }
}
