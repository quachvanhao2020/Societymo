<?php
namespace Societymo;

use YPHP\Model\Media\Image;
use Societymo\Communication;
use YPHP\Entity;

class Article extends Entity{

    const TITLE = "title";
    const CONTENT = "content";
    const COUNTCOMMENT = "countComment";
    const LOGO = "logo";
    const COMMUNICATION = "communication";

    public function __toArray(){
        return array_merge([
            self::TITLE => $this->getTitle(),
            self::CONTENT => $this->getContent(),
            self::COUNTCOMMENT => $this->getCountComment(),
            self::LOGO => $this->getLogo(),
            self::COMMUNICATION => $this->getCommunication(),
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
     * @var string
     */
    protected $title;

        /**
     * 
     *
     * @var Communication
     */
    protected $communication;

    /**
     * 
     *
     * @var int
     */
    protected $countComment;


    /**
     * 
     *
     * @var Image
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
    public function setContent(string $content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of logo
     *
     * @return  Image
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  Image  $logo
     *
     * @return  self
     */ 
    public function setLogo(Image $logo = null)
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
     * Get the value of communication
     *
     * @return  Communication
     */ 
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Set the value of communication
     *
     * @param  Communication  $communication
     *
     * @return  self
     */ 
    public function setCommunication(Communication $communication = null)
    {
        $this->communication = $communication;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return  string
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */ 
    public function setTitle(string $title = null)
    {
        $this->title = $title;

        return $this;
    }
}