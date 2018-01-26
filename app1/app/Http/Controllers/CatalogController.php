<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    function getIndex(){
    	return view('catalog.index', array('arrayPeliculas'=>Movie::all()));
    }

    function getShow($id){
    	return view('catalog.show', array('pelicula'=>Movie::findOrFail($id)));
    }

    function getCreate(){
    	return view('catalog.create');
    }

    function getEdit($id){
    	return view('catalog.edit', array('pelicula'=>Movie::findOrFail($id)));
    }
}


