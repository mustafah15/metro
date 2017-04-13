<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/04/17
 * Time: 11:22 ص
 */

namespace App\Repositories;


use App\Node;

class NodeRepository extends BaseRepository
{
    /**
     * NodeRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(new Node());
    }

    /**
     * return previous nodes and next node
     * @param $nodeId
     * @return /Illuminate/Collection
     */
    public function getBoundariesNodes( $nodeId )
    {
        //get perv node
        $fromNodes = $this->getPreviousNodes( $nodeId );

        //get next node
        $toNodes = $this->getNextNodes( $nodeId );

        //return collection
        $nodes = collect( array_merge( $fromNodes->toArray(), $toNodes->toArray() ) );

        return $nodes ;
    }

    /**
     * @param $nodeId
     * @return /Illuminate/Collection
     */
    public function getPreviousNodes( $nodeId )
    {
        return $this->model->with('fromNodes')->where( 'id', $nodeId )->get()[0]->fromNodes;
    }

    /**
     * @param $nodeId
     * @return /Illuminate/Collection
     */
    public function getNextNodes( $nodeId )
    {
        return $this->model->with('toNodes')->where( 'id', $nodeId )->get()[0]->toNodes;
    }

}