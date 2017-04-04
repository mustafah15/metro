<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/4/17
 * Time: 1:32 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $table = 'nodes';

    protected $fillable = [
        'name',
        'description'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fromNodes()
    {
        return $this->belongsToMany('App\node','node_nodes','from_node','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function toNodes()
    {
        return $this->belongsToMany('App\node','node_nodes','to_node','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lines()
    {
        return $this->belongsToMany('App\Line','node_lines','node_id','line_id');
    }

}