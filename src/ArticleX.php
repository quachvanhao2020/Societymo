<?php
namespace Societymo;
use Identimo\User;

class ArticleX extends Article {
    const USEROWN = "userOwn";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::USEROWN => $this->getUserOwn(),
        ]);
    }


    /**
     * 
     *
     * @var User
     */
    protected $userOwn;

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