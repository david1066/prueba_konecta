<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function index(Request $request){
       
        $productos= Producto::join('categorias','categorias.id','productos.categoria_id')->select('productos.id',
        'productos.nombre',
        'productos.referencia',
        'productos.precio',
        'productos.peso',
        'productos.stock',
        'categorias.nombre as nombrecategoria',
        'productos.created_at',
        'productos.updated_at')->get();
        return view('producto.index', compact('productos'));
    }
    public function create(Request $request){
        $categoria= Categoria::all();
        
        return view('producto.create', compact('categoria'));
    }

    public function store(Request $request){
        $producto=new  Producto();
        $producto->nombre=$request->nombre;
        $producto->referencia=$request->referencia;
        $producto->precio=$request->precio;
        $producto->peso=$request->peso;
        $producto->categoria_id=$request->categoria_id;
        $producto->stock=$request->stock;
        $producto->save();
        $categoria= Categoria::all();
        if($producto->id!=null){ 
            $message='Agregado correctamente';
            $status='success';
            return view('producto.create',compact('status','message','categoria'));
      
        }else{
            $status='danger';
            $message='No ha sido creado';
            return view('producto.create',compact('status','message','categoria'));
        }
    }

    public function destroy(Request $request,$id){
        $producto=Producto::where('id',$id)->first();
        
        if($producto->id!=null){ 
            $producto->delete();
            $message='Eliminado correctamente';
            $status='success';
            return compact('status','message');
      
        }else{
            $status='danger';
            $message='No ha sido creado';
            return compact('status','message');
        }
    }

    public function edit($id) {
        $producto= Producto::where('id',$id)->first();
        $categoria= Categoria::all();
        return view('producto.edit', compact('producto','categoria'));
    }

    public function update(Request $request, $id){
        $producto=Producto::where('id',$id)->first();
       
        $categoria= Categoria::all();
        if($producto->id!=null){ 

            $producto->nombre=$request->nombre;
            $producto->referencia=$request->referencia;
            $producto->precio=$request->precio;
            $producto->peso=$request->peso;
            $producto->categoria_id=$request->categoria_id;
            $producto->stock=$request->stock;
            $producto->save();
            $message='Actualizado correctamente';
            $status='success';
            return view('/producto/edit',compact('status','message','categoria','producto'));
      
        }else{
            $status='danger';
            $message='No ha sido actualizado';
            return view('producto.edit',compact('status','message','categoria','producto'));
        }
    }
}
