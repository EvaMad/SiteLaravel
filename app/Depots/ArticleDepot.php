<?php

namespace App\Depots;
use App\Article;

class ArticleDepot
{
    protected $article;
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    private function conserve(Article $article, Array $inputs)
    {
        $article->name = $inputs['name'];
        $article->price = $inputs['price'];
        $article->description = $inputs['description'];
        $article->conserve();
    }
 
    public function store(Array $inputs)
    {
        $article = new $this->article;
        $article->name = $inputs['name'];
        $article->description = $inputs['description'];
        $article->price = $inputs['price'];
        
        $this->conserve($article, $inputs);

        return $article;
    }

    /*setting up items in the store with the function Get */

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }
    public function getById($id)
    {
        return $this->article->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->conserve($this->getById($id), $inputs);
    }
    
}