<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $genre = $this->genres();
        $film = $this->data();
        return view('home.home', [
            'genre' => $genre,
            'film' => $film,
            'title' => "ALL FILM"
        ]);
    }

    public function data(){
        $film = DB::select('select *, f.id id_film from films f 
                            join genres g on f.genre = g.id order by f.id desc');
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
                'genre' => $f->name,
                'created_by' => $f->created_by
            ];
        }
        // dd($data);
        return $data;
    }

    public function genres(){
        $genre = DB::select('select * from genres');
        // dd($genre);
        $genres = [];
        foreach($genre as $g) {
            $genres[]=[
                'id' => $g->id,
                'name' => $g->name
            ];
        }
        return $genres;
    }

    public function create(){
        return view('register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'judul' => 'required|min:5|max:255',
            'sipnosis' => ['required', 'min:5', 'max:255',],
            'genre' => 'required|min:5|max:255'
        ]);
        
        film::create($validatedData);

        return redirect('/login')->with('Success', 'Registrasi Berhasil');
    }
}
