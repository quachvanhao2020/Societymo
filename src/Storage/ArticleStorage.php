<?php
namespace Societymo\Storage;

use Societymo\Storage\Iterator\ArticleIterator;
use Societymo\Article;
use YPHP\Storage\EntityStorage;

class ArticleStorage extends EntityStorage{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArticleIterator
     */
    public function getIterator()
    {
        return new ArticleIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  Article[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Societymo\Article[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}