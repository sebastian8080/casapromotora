<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();

        return view('admin.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'titulo' => 'required',
        //     'tiempo_lectura' => 'required',
        //     'url_img_principal' => 'required',
        //     'url_img_secundaria' => 'required',
        //     'url_img_terciaria' => 'required',
        //     'contenido' => 'required',
            
        //     'metadescripcion' => 'required',
        //     'keywords' => 'required'

        // ]);

        $post = Post::create([
            
            'titulo' => $request->titulo,
            'tiempo_lectura' => $request->tiempo_lectura,
            'url_img_principal' => $request->url_img_principal,
            'url_img_secundaria' => $request->url_img_secundaria,
            'url_img_terciaria' => $request->url_img_terciaria,
            'contenido' => $request->contenido,
            'metadescripcion' => $request->metadescripcion,
            'keywords' => $request->keywords
            //$post->save();

        
        ]);
    $post->slug = Str::slug($post->titulo);
    $post->save();
    
            return redirect()->route('admin.blog.index', $post)->with('info', 'Nuevo blog creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id);
        return view('admin.blog.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::find($id);
        $post = Post::where('id', $post)->first();
        
        return view('admin.blog.create');
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->update($request->all());
        return redirect()->route('admin.blog.create')->with('success', 'Post actualizado correctamente');
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Post $post)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Post $post)
    // {
    //     //
    // }
