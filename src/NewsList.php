<?php
namespace Societymo;
use Societymo\Storage\ArticleStorage;
use YPHP\Entity;

class NewsList extends Entity{

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
    public function setArticles($articles)
    {
        $this->articles = $articles;

        return $this;
    }
}