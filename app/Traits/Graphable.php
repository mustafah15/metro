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
        return $this->buildMatrix();
    }

    public function buildMatrix()
    {
        $paths = NodesNode::all(['from_node','to_node'])->toArray();
        $values = [];
        for ($i = 0; $i < count($paths); $i++) {
            if (array_values($paths[$i])[2]) {
                $values[array_values($paths[$i])[0]][array_values($paths[$i])[1]] = 1 ;
            }
        }
        return $values;
    }

    public function path($sourceId, $destinationId)
    {
        $repository = new NodeRepository();
        $previous = [];
        $next = '';
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
                $stack = array_merge($stack, $repository->getBoundariesNodes($node)->toArray());
                $visited[] = $previous[] = $node;
                if ($node == $destinationId) {
                    return ['previous,'=>$previous, 'visited'=>$visited];
                }
            }
        }
    }

    public function dijkstra($source, $destination)
    {
    }
}

