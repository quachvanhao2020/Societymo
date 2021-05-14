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
use Societymo\Communication;
use Societymo\Storage\CommunicationStorage;

class ExcelCommunicationFactory extends BaseCommunicationFactory{
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
            Communication::COMMENTS => [
                "strategy" => $storage_strategy,
                "recursive" => true,
                "children" => [],
            ],
            Communication::TARGET => [
                "strategy" => $minimum_new_class,
                "recursive" => true,
                "children" => [],
            ],
        ];
    }

    /**
     * Get the value of storage
     *
     * @return  CommunicationStorage
     */ 
    public function getStorage()
    {
        if(!$this->storage) $this->storage = new CommunicationStorage();
        return $this->storage;
    }

    public function getClassEntity(){
        return Communication::class;
    }

    protected function _convertArraySheet(array &$array){
        return;
    }
}