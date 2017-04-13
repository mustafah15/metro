<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/04/17
 * Time: 01:23 ص
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
trait Graphable
{
    public function buildGraph(Model $node)
    {
        //get source node
        //get bound nodes
        //return relative nodes relations

    }

    public function shortPath( $sourceId, $destinationId )
    {

    }

    public function findPath($sourceNodeId)
    {

    }

    public function relax($graph)
    {

    }
}