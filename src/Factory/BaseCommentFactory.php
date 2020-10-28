<?php
namespace Societymo\Factory;

use YPHP\ContainerFactoryInterface;
use Societymo\Comment;
use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;

abstract class BaseCommentFactory implements ContainerFactoryInterface{

        /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     * @return Comment.
     */
    public abstract function get($id);
            /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param FilterInputInterface $filter
     * @param SortingInputInterface $sort
     * @return mixed
     */
    public abstract function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null);
    /**
     * @param string $id Identifier of the entry to look for.
     * @param Comment $entity
     * @return bool
     */
    public abstract function update(string $id,$entity);
        /**
     * @param string $id Identifier of the entry to look for.
     * 
     * @return bool
     */
    public abstract function delete(string $id);
}