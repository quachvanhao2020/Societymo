<?php
namespace Societymo\Factory;
use Laminas\Hydrator\Strategy\DateTimeArrayFormatterStrategy;
use Laminas\Hydrator\Strategy\EnumStrategy;
use Laminas\Hydrator\Strategy\NewClassStrategy;
use Laminas\Hydrator\Strategy\StorageStrategy;
use Laminas\Hydrator\HydratorInterface;
use YPHP\Factory\ExcelEntityFactoryTrait;
use Laminas\Hydrator\Strategy\Serializable\StaticServer;
use Laminas\Hydrator\Strategy\StreamStrategy;
use Societymo\Comment;
use Societymo\Storage\CommentStorage;

class ExcelCommentFactory extends BaseCommentFactory{
    use ExcelEntityFactoryTrait;

    /**
     * Get the value of strategys
     *
     * @return  StrategyInterface[]
     */ 
    public static function getStrategys(HydratorInterface $hydrator)
    {
        $minimum_new_class = new NewClassStrategy($hydrator);
        $new_class = new NewClassStrategy($hydrator,false);
        $storage_strategy = new StorageStrategy();
        $stream_strategy = new StreamStrategy(new StaticServer);
        return [
            Comment::PARENT => [
                "strategy" => $minimum_new_class,
                "recursive" => true,
                "children" => [],
            ],
            Comment::USEROWN => [
                "strategy" => $minimum_new_class,
                "recursive" => true,
                "children" => [],
            ],
            Comment::STATUS => [
                "strategy" => new EnumStrategy(),
                "recursive" => true,
                "children" => [],
            ],
            Comment::DATECREATED => [
                "strategy" => new DateTimeArrayFormatterStrategy(),
                "recursive" => true,
                "children" => [],
            ],
        ];
    }

    /**
     * Get the value of storage
     *
     * @return  CommentStorage
     */ 
    public function getStorage()
    {
        if(!$this->storage) $this->storage = new CommentStorage();
        return $this->storage;
    }

    public function getClassEntity(){
        return Comment::class;
    }

    protected function _convertArraySheet(array &$array){
        return;
    }
}