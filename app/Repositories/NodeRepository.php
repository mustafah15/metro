<?php

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
    public function getBoundariesNodes($nodeId)
    {
        //get perv node
        $fromNodes = $this->getPreviousNodes($nodeId)->toArray()[0]['from_nodes'];
        $fromArray = $this->getNodeIds($fromNodes);

        //get next node
        $toNodes = $this->getNextNodes($nodeId)->toArray()[0]['to_nodes'];
        $toArray = $this->getNodeIds($toNodes);
        //return collection
        $nodes = collect(array_merge($fromArray, $toArray));

        return $nodes ;
    }

    /**
     * @param $nodeId
     * @return /Illuminate/Collection
     */
    public function getPreviousNodes($nodeId)
    {
        return $this->model
            ->with('fromNodes')
            ->with('lines')
            ->where('id', $nodeId)->get();
    }

    /**
     * @param $nodeId
     * @return /Illuminate/Collection
     */
    public function getNextNodes($nodeId)
    {
        return $this->model
            ->with('toNodes')
            ->with('lines')
            ->where('id', $nodeId)->get();
    }

    /**
     * @param $nodeId
     * @return array
     */
    public function getNodeLines($nodeId)
    {
        return $this->model->with('lines')
            ->where('id', $nodeId)
            ->get()[0]->Lines->toArray();
    }

    /**
     * @param $nodes
     * @return array
     */
    private function getNodeIds($nodes)
    {
        $ids=[];
        foreach ($nodes as $node) {
            $ids[] =  $node['id'];
        }
        return $ids;
    }
}
