<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/04/17
 * Time: 01:23 ص
 */

namespace App\Traits;

use App\NodesNode;
use App\Repositories\NodeRepository;
use Illuminate\Database\Eloquent\Model;

trait Graphable
{
    public function buildGraph($nodeId)
    {

    }

    public function buildMatrix()
    {
        $paths = NodesNode::all(['from_node','to_node'])->toArray();
        $result = [];
        foreach ($paths as $path) {
            $result[$path['from_node']][$path['to_node']] = 1;
        }
        return $result;
    }

    public function path($sourceId, $destinationId)
    {
        $stack = [];
        $repository = new NodeRepository();
        $previous = [];
        $visited = [$sourceId];
        $stack = $repository->getBoundariesNodes($sourceId)->toArray();
        while (true) {
            if (!$stack) {
                return 0;
            }
            foreach ($stack as $node) {
                if (in_array($node, $visited)) {
                    continue;
                }
                $array = $repository->getBoundariesNodes($node)->toArray();
                foreach ($array as $item) {
                    $stack[] = $item;
                }
                $visited[] = $previous[] = $node;
                if ($node == $destinationId) {
                    return $previous;
                }
            }
        }
    }

    public function paths($graph, $sourceId, $destinationId, $visited = [])
    {
        if (key($graph[$sourceId]) == $destinationId) {
            return $visited;
        }

        if (!in_array($graph[$sourceId], $visited))
            $visited[] = key($graph[$sourceId]);
        
        return $this->paths($graph, key($graph[$sourceId]), $destinationId, $visited);
    }
}
