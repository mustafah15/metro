<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 23/04/17
 * Time: 08:13 م
 */

namespace App\Classes;

class Graph
{
    private $verticies;

    public function __construct()
    {
        $this->verticies = array();
    }

    public function addVertex($name, $edges)
    {
        $this->verticies[ $name ] = $edges;
    }

    public function shortestPath($start, $finish)
    {
        $distances = array();
        $previous = array();
        $nodes = new Queue();
        foreach ($this->verticies as $vertex => $value) {
            if ($vertex === $start) {
                $distances[ $vertex ] = 0;
                $nodes->insert($vertex, 0);
            } else {
                $distances[ $vertex ] = PHP_INT_MAX;
                $nodes->insert($vertex, PHP_INT_MAX);
            }
            $previous[ $vertex ] = null;
        }
        $nodes->top();
        while ($nodes->valid()) {
            $smallest = $nodes->current();
            if ($smallest === $finish) {
                $path = array();
                while ($previous[ $smallest ]) {
                    $path[] = $smallest;
                    $smallest = $previous[ $smallest ];
                }
                $path[] = $start;
                return array_reverse($path);
            }
            if ($smallest === null || $distances[ $smallest ] === PHP_INT_MAX) {
                break;
            }
            foreach ($this->verticies[ $smallest ] as $neighbor => $value) {
                $alt = $distances[ $smallest ] + $this->verticies[ $smallest ][ $neighbor ];
                if ($alt < $distances[ $neighbor ]) {
                    $distances[ $neighbor ] = $alt;
                    $previous[ $neighbor ] = $smallest;
                    $nodes->insert($neighbor, $alt);
                }
            }
            $nodes->next();
        }
        return $distances;
    }
}
