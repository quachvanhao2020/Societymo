<?php
namespace Societymo\Storage;

use YPHP\ArrayObject;
use Societymo\Communication;
use Societymo\Storage\Iterator\CommunicationIterator;

class CommunicationStorage extends ArrayObject{

        /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CommunicationIterator
     */
    public function getIterator()
    {
        return new CommunicationIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Communication[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }

                /**
     * Set the value of storage
     *
     * @param  \Societymo\Communication[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }

}