<?php
namespace Societymo;

use YPHP\EntityFertility;
use UltimateModel\Technology\Media\ImageModel;

class ArticleModel extends EntityFertility{

    const CONTENT = "content";
    const COUNTCOMMENT = "countComment";
    const LOGO = "logo";

    public function __toArray(){
        return array_merge([
            self::CONTENT => $this->getContent(),
            self::COUNTCOMMENT => $this->getCountComment(),
            self::LOGO => $this->getLogo(),
        ],parent::__toArray());
    }

    public static function propertySpecificity(){

        return self::CONTENT;
    }

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
    protected $countComment;


        /**
     * 
     *
     * @var ImageModel
     */
    protected $logo;
    

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
     * Get the value of logo
     *
     * @return  ImageModel
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  ImageModel  $logo
     *
     * @return  self
     */ 
    public function setLogo(ImageModel $logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of countComment
     *
     * @return  int
     */ 
    public function getCountComment()
    {
        return $this->countComment;
    }

    /**
     * Set the value of countComment
     *
     * @param  int  $countComment
     *
     * @return  self
     */ 
    public function setCountComment(int $countComment)
    {
        $this->countComment = $countComment;

        return $this;
    }
}