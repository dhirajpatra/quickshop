<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storedb extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store_dbs';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'store_db_id'
    ];

    /**
     * Fillable fields for a Storeplanfeature
     *
     * @var array
     */
    protected $fillable = [
        'store_db_name',
        'store_db_owner_plan_id',
    ];


    /**
     * A Storedb belongs to a Storeownerplan
     *
     * @return mixed
     */
    public function storeownerplan()
    {
        return $this->belongsTo('App\Models\Storeownerplan');
    }


}