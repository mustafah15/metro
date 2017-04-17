<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/04/17
 * Time: 01:00 م
 */

namespace App\Http\Controllers;

use App\Managers\NodeManager;
use Illuminate\Routing\Controller as BaseController;

class NodeController extends BaseController
{
    protected $manager ;

    public function __construct()
    {
        $this->manager = new NodeManager();
    }

    public function getIndex()
    {
        return dd($this->manager->buildGraph(5));
    }
}
