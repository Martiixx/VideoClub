<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Movie;

class CatalogController extends Controller
{

    public function getIndex(){
        $movies=Movie::all();
        //$movies=DB::table('movies')->get();
        return view("catalog.index")->with("arrayPeliculas",$movies);
    }
    
    public function getShow($id){
        //dd(array_key_exists('synopsis',$this->arrayPeliculas[$id]));
        // dd($this->arrayPeliculas[$id]);
        $movie=Movie::findOrFail($id);
        return view("catalog.show")->with("pelicula",$movie);
    }
    
    public function getCreate(){
        return view("catalog.create");
    }
    
    public function getEdit($id){
        $movie=Movie::findOrFail($id);
        return view("catalog.edit")->with("Pelicula",$movie);
    }
    
    public function postCreate(Request $request){
        $movie= new Movie;
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        //Notification::Success("La Pelicula se ha guardado con exito!");
        return $this->getIndex();
    }
    
    public function putEdit($id,Request $request){
        $movie=Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        //Notification::Success("La pelicula se ha Modificado con exito!");
        return $this->getShow($id);        
    }
    
    public function putRent($id){
        $movie=Movie::findOrFail($id);
        $movie->rented=true;
        $movie->save();
        //Notification::Success("Has alquilado la pelicula con exito!");
        return $this->getShow($id);
    }
    
    public function putReturn($id){
        $movie=Movie::findOrFail($id);
        $movie->rented=false;
        $movie->save();
        //Notification::Success("Has devuelto la pelicula con exito!");
        return $this->getShow($id);
    }
    
    public function deleteMovie($id){
        $movie=Movie::findOrFail($id);
        $movie->delete();
        //Notification::Success("Pelicula eliminada de los registros, redirigiendo al catalogo");
        return $this->getIndex();
        }
    
}
