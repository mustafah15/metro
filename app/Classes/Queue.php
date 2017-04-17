<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/04/17
 * Time: 02:30 ص
 */

namespace App\Classes;

class Queue extends \SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        if ($priority1 === $priority2) {
            return 0;
        }
        return $priority1 < $priority2 ? -1 : 1;
    }
}
