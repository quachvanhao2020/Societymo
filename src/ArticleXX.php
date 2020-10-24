<?php
namespace Societymo;

class ArticleXX extends ArticleX{

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
    protected $dirFileContent;

    /**
     * Get the value of dirFileContent
     *
     * @return  string
     */ 
    public function getDirFileContent()
    {
        return $this->dirFileContent;
    }

    /**
     * Set the value of dirFileContent
     *
     * @param  string  $dirFileContent
     *
     * @return  self
     */ 
    public function setDirFileContent(string $dirFileContent)
    {
        if(file_exists($dirFileContent)){
            $this->setContent(file_get_contents($dirFileContent));
        }

        $this->dirFileContent = $dirFileContent;
        return $this;
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
}