<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Societymo\Storage\Iterator\ArticleXXIterator;
use Societymo\ArticleXX;

class ArticleXXStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ArticleXXIterator
     */
    public function getIterator()
    {
        return new ArticleXXIterator($this->storage);
    }


    /**
     * Get the value of storage
     *
     * @return  ArticleXX[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

            /**
     * Set the value of storage
     *
     * @param  \Societymo\ArticleXX[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}