<?php
namespace Societymo\Factory;

use Societymo\Article;
use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;
use Societymo\Storage\ArticleStorage;
use YPHP\Factory\BaseEntityFactory;

abstract class BaseArticleFactory extends BaseEntityFactory{

    const ENTITY = Article::class;
    const STORAGE = ArticleStorage::class;

    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     * @return mixed Article.
     */
    public abstract function get($id);
            /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param FilterInputInterface $filter
     * @param SortingInputInterface $sort
     * @return ArticleStorage
     */
    public abstract function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null);
    /**
     * @param string $id Identifier of the entry to look for.
     * @param Article $entity
     * @return bool
     */
    public abstract function update($id,$entity);
        /**
     * @param string $id Identifier of the entry to look for.
     * 
     * @return bool
     */
    public abstract function delete($id);
}