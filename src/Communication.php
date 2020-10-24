<?php
namespace Societymo;
use Societymo\Storage\CommentStorage;

class Communication{
    /**
     * 
     *
     * @var CommentStorage
     */
    protected $comments;

    /**
     * Get the value of comments
     *
     * @return  CommentStorage
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @param  CommentStorage  $comments
     *
     * @return  self
     */ 
    public function setComments(CommentStorage $comments)
    {
        $this->comments = $comments;

        return $this;
    }
}