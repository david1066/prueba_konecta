<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
     

     public function store(Request $request){

      $categoria=new  Categoria();
      $categoria->nombre=$request->nombre;
      $categoria->save();
      $nombre =$request->nombre;
      if($categoria->id!=null){ 
          $message='Agregado correctamente';
        return view('categoria.index',compact('nombre','message'));
    
        }else{
            $message='No ha sido creado';
            return view('categoria.index',compact('nombre','message'));
        }

    }
}
