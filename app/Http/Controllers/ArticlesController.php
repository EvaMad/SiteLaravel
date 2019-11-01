<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article as Article;
use App\Depots\ArticleDepot;

class ArticlesController extends Controller
{
    protected $ArticleDepot;
    public function __construct(ArticleDepot $ArticleDepot)
    {
        $this->ArticleDepot = $ArticleDepot;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $articles = Article::all();
      return view('articles.index', array('articles' => $articles));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Articles= $this->ArticleDepot->store($request->all());
        return redirect('articles')->withOk("L'Articles" . $article->name . " a été créé.");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Articles= Article::find($id);
      return view('articles.show', array('article' => $article));
    }
    
    public function edit($id)
    {
        $Articles= Article::find($id);
        return view('articles.edit', array('article' => $article));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->ArticleDepot->update($id, $request->all());
        return redirect('articles/')->withOk("L'Articles" . $request->input('name') . " a été modifié.");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ArticleDepot->destroy($id);
        return redirect('articles');
    }
}
