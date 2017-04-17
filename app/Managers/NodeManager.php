<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/04/17
 * Time: 01:19 ص
 */

namespace App\Managers;

use App\Traits\Graphable;

class NodeManager extends BaseManager
{
    use Graphable;
    /**
     * @param $item
     * @return array
     */
    public function wrap($item)
    {
        return ['name'=>$item->name];
    }
}
