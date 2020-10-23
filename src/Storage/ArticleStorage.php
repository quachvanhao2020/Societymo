<?php
namespace Societymo\Storage;

use YesPHP\ArrayObject;
use Societymo\Storage\Iterator\ArticleIterator;
use Societymo\Article;

class ArticleStorage extends ArrayObject{

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
     * @param  \UltimateModel\Model\Article[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}