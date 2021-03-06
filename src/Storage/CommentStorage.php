<?php
namespace Societymo\Storage;

use Societymo\Comment;
use Societymo\Storage\Iterator\CommentIterator;
use YPHP\Storage\EntityStorage;

class CommentStorage extends EntityStorage{
    const ENTITY = Comment::class;
        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CommentIterator
     */
    public function getIterator()
    {
        return new CommentIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Comment[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                /**
     * Set the value of storage
     *
     * @param  \Societymo\Comment[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}