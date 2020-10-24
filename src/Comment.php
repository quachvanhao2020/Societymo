<?php
namespace Societymo;

use YPHP\EntityFertility;
use Identimo\User;
use Societymo\Storage\CommentStorage;

class Comment extends EntityFertility{

    const CONTENT = "content";
    const ISREPLY = "isReply";
    const USEROWN = "userOwn";
    const LIKE = "like";
    const UNLIKE = "unLike";
    const REPLYS = "replys";

    public function __toArray() {
        return array_merge([
            self::CONTENT => $this->getContent(),
            self::ISREPLY => $this->getIsReply(),
            self::USEROWN => $this->getUserOwn(),
            self::LIKE => $this->getLike(),
            self::UNLIKE => $this->getUnLike(),
            self::REPLYS => $this->getReplys(),
        ],parent::__toArray());

    }

        /**
     * 
     *
     * @var CommentModel
     */
    protected $parent;

    /**
     * 
     *
     * @var bool
     */
    protected $isReply = false;
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
     * 
     *
     * @var CommentStorage
     */
    protected $replys = [];

    public static function propertySpecificity(){

        return self::CONTENT;

    }

    public function replysExists(){
        return !empty($this->getReplys());
    }

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
    public function setContent(string $content)
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
    public function setLike(int $like)
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
    public function setUnLike(int $unLike)
    {
        $this->unLike = $unLike;

        return $this;
    }

    /**
     * Get the value of replys
     *
     * @return  CommentStorage
     */ 
    public function getReplys()
    {
        return $this->replys;
    }

    /**
     * Set the value of replys
     *
     * @param  CommentStorage  $replys
     *
     * @return  self
     */ 
    public function setReplys(CommentStorage $replys)
    {
        if(empty($replys)) return $this;

        foreach ($replys as $key => $value) {
            $value->setIsReply(true);
            $value->setParent($this);
        }

        $this->replys = $replys;

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
    public function setUserOwn(User $userOwn)
    {
        $this->userOwn = $userOwn;

        return $this;
    }

    /**
     * Get the value of isReply
     *
     * @return  bool
     */ 
    public function getIsReply()
    {
        return $this->isReply;
    }

    /**
     * Set the value of isReply
     *
     * @param  bool  $isReply
     *
     * @return  self
     */ 
    public function setIsReply(bool $isReply)
    {
        $this->isReply = $isReply;

        return $this;
    }
}