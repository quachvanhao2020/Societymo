<?php
namespace Societymo\Factory;
use Societymo\Factory\BaseArticleFactory;
use Societymo\Storage\ArticleStorage;
use Societymo\Article;
use Laminas\Hydrator\Strategy\DateTimeArrayFormatterStrategy;
use Laminas\Hydrator\Strategy\EnumStrategy;
use Laminas\Hydrator\Strategy\NewClassStrategy;
use Laminas\Hydrator\Strategy\StorageStrategy;
use Laminas\Hydrator\HydratorInterface;
use Laminas\Hydrator\Strategy\StreamStrategy;
use YPHP\Factory\ExcelEntityFactoryTrait;
use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;

class ExcelArticleFactory extends BaseArticleFactory{
    const ENTITY = Article::class;
    const STORAGE = ArticleStorage::class;

    use ExcelEntityFactoryTrait;

        /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param ArticleFilter $filter
     * @param SortingInputInterface $sort
     * @return mixed
     */
    public function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null){
        $storage = $this->storage;
        $filter && $filter->filter($storage);
        return $storage;
    }

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
        $streamStrategy = new StreamStrategy();
        $stream_storage_strategy = new StorageStrategy($streamStrategy);
        return [
            Article::STATUS => [
                "strategy" => new EnumStrategy(),
                "recursive" => true,
                "children" => [],
            ],
            Article::LOGO => [
                "strategy" => $streamStrategy,
                "recursive" => true,
                "children" => [],
            ],
        ];
    }

    /**
     * Get the value of storage
     *
     * @return  ArticleStorage
     */ 
    public function getStorage()
    {
        if(!$this->storage) $this->storage = new ArticleStorage();
        return $this->storage;
    }

    public function getClassEntity(){
        return Article::class;
    }

    protected function _convertArraySheet(array &$array){
        return;
    }
}