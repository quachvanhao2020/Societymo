<?php
namespace Societymo;

use YPHP\EntityFertility;
use Identimo\User;

class Comment extends EntityFertility{

    const CONTENT = "content";
    const USEROWN = "userOwn";
    const LIKE = "like";
    const UNLIKE = "unLike";

    public function __toArray() {
        return array_merge([
            self::CONTENT => $this->getContent(),
            self::USEROWN => $this->getUserOwn(),
            self::LIKE => $this->getLike(),
            self::UNLIKE => $this->getUnLike(),
        ],parent::__toArray());
    }

    /**
     * 
     *
     * @var User
     */
    protected $userOwn;
    /**
     * 
     *
     * @var string
     */
    protected $content;

    /**
     * 
     *
     * @var int
     */
    protected $like = 0;

    /**
     * 
     *
     * @var int
     */
    protected $unLike = 0;

    /**
     * Get the value of content
     *
     * @return  string
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param  string  $content
     *
     * @return  self
     */ 
    public function setContent(string $content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of like
     *
     * @return  int
     */ 
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set the value of like
     *
     * @param  int  $like
     *
     * @return  self
     */ 
    public function setLike(int $like = null)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get the value of unLike
     *
     * @return  int
     */ 
    public function getUnLike()
    {
        return $this->unLike;
    }

    /**
     * Set the value of unLike
     *
     * @param  int  $unLike
     *
     * @return  self
     */ 
    public function setUnLike(int $unLike = null)
    {
        $this->unLike = $unLike;

        return $this;
    }

    /**
     * Get the value of userOwn
     *
     * @return  User
     */ 
    public function getUserOwn()
    {
        return $this->userOwn;
    }

    /**
     * Set the value of userOwn
     *
     * @param  User  $userOwn
     *
     * @return  self
     */ 
    public function setUserOwn(User $userOwn = null)
    {
        $this->userOwn = $userOwn;

        return $this;
    }

}