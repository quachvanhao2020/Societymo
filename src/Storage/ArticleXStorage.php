<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Societymo\Storage\Iterator\ArticleXIterator;
use Societymo\ArticleX;

class ArticleXStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArticleXIterator
     */
    public function getIterator()
    {
        return new ArticleXIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  ArticleX[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  ArticleX[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}