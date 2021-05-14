<?php
namespace Societymo;
use Societymo\Storage\CommentStorage;
use YPHP\Entity;

class Communication extends Entity{
    const COMMENTS = "comments";
    const TARGET = "target";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::COMMENTS => $this->getComments(),
            self::TARGET => $this->getTarget(),
        ]);
    }
    /**
     * 
     *
     * @var CommentStorage
     */
    protected $comments;

    /**
     * 
     *
     * @var Entity
     */
    protected $target;

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

    /**
     * Get the value of target
     *
     * @return  Entity
     */ 
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set the value of target
     *
     * @param  Entity  $target
     *
     * @return  self
     */ 
    public function setTarget(Entity $target)
    {
        $this->target = $target;

        return $this;
    }
}