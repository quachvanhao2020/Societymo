<?php
namespace Societymo;

class ArticleXX extends ArticleX{

    const DIRFILECONTENT = "dirFileContent";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::DIRFILECONTENT => $this->getDirFileContent(),
        ]);
    }
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
    public function setDirFileContent(string $dirFileContent = null)
    {
        if(file_exists($dirFileContent)){
            $this->setContent(file_get_contents($dirFileContent));
        }
        $this->dirFileContent = $dirFileContent;
        return $this;
    }

}