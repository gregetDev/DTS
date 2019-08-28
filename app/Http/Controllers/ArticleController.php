<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class ArticleController extends Controller
{
    
    public function search(Request $request)
	{
		$pencarian = $request->pencarian;
 
        $articles = DB::table('articles')
        ->join('admins', 'admins.username', '=', 'articles.author')
		->where('judul','like',"%".$pencarian."%")
		->orWhere('isi','like',"%".$pencarian."%")
		->orWhere('label','like',"%".$pencarian."%")
		->orWhere('author','like',"%".$pencarian."%")
		->paginate(10);
 
		return view('/admin/article/index',['articles' => $articles]);
 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')
            ->join('admins', 'admins.username', '=', 'articles.author')
            ->paginate(10);
        //Eloquent
        // $artikel = \App\artikel::with('User')->get();
        return view('/admin/article/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.add_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstensi_diperbolehkan	= array('png', 'PNG', 'Png','jpg', 'JPG', 'Jpg');
        $file = $request->file('file');
        $nama = $file->getClientOriginalName();
        $ekstensi = $file->getClientOriginalExtension();
        $ukuran = $file->getSize();
        $file_tmp = $file->getRealPath();

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, 'ckeditor/kcfinder/upload/images/'.$nama);

                Article::create([
                    'label'=> $request->label,
                    'judul'=> $request->judul,
                    'isi'=> $request->isi,
                    'author'=> 'admin',
                    'thumbnail'=>$nama
                    
                ]);

            }
        }

        return redirect('/artikel');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('/admin/article/edit_article', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article = $article::find($article->id);
        $article->label = $request->label;
        $article->judul = $request->judul;
        $article->isi = $request->isi;

        $article->save();

        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::find($article->id)->delete();

        return redirect('/artikel');
    }
}
