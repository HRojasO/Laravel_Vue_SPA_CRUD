<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all(['id','imagen','marca','placa','fabricacion','tipo','color','precio','combustible','nombres','apellidos','cell' ]);
        return response()->json($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->hasFile("imagen")){
        //     $imagen = $request->file("imagen");
        //     $nombreImagen = Str::slug($request->name).".".$imagen->guessExtension();
        //     $ruta = public_path("/assets/img/publicaciones/");
        //     $imagen->move($ruta,$nombreImagen);
        //     $blog = Blog::create($request->post());
        //     return response()->json([           
        //         'blog'=>$blog,
        //         'imagen' => $nombreImagen,
        //     ]);
        // }else

        $request->validate([
            'imagen'=>'required|file',
   
            'cell'=>'required|integer',

        ]);

        $url=Storage::url($request->file('imagen')->store('img','public'));

           $blog=new Blog();
           $blog-> imagen=$url;
           $blog-> marca=$request->marca;
           $blog-> placa=$request->placa;
           $blog-> fabricacion=$request->fabricacion;
           $blog-> tipo=$request->tipo;
           $blog-> color=$request->color;
           $blog-> precio=$request->precio;
           $blog-> combustible=$request->combustible;
           $blog-> nombres=$request->nombres;
           $blog-> apellidos=$request->apellidos;
           $blog-> cell=$request->cell;


           $blog->save();
           return $blog;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return response()->json($blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->fill($request->post())->save();
        return response()->json([            
            'blog'=>$blog
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json([
            'mensaje'=>'¡Registro eliminado correctamente!'
        ]);
    }
}
