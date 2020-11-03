<?php
namespace Societymo;
use Societymo\Storage\ArticleStorage;
use YPHP\Entity;

class NewsList extends Entity{

    const ARTICLES = "articles";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::ARTICLES => $this->getArticles(),
        ]);
    }
    /**
     * 
     *
     * @var ArticleStorage
     */
    protected $articles;

    /**
     * Get the value of articles
     *
     * @return  ArticleStorage
     */ 
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     *
     * @param  ArticleStorage  $articles
     *
     * @return  self
     */ 
    public function setArticles(ArticleStorage $articles = null)
    {
        $this->articles = $articles;

        return $this;
    }
}