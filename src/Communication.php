<?php
namespace Societymo;
use Societymo\Storage\CommentStorage;
use YPHP\Entity;

class Communication extends Entity{
    const COMMENTS = "comments";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::COMMENTS => $this->getComments(),
        ]);
    }
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
    public function setComments(CommentStorage $comments = null)
    {
        $this->comments = $comments;

        return $this;
    }
}