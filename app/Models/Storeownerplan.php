<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storeownerplan extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store_owner_plans';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'store_owner_plan_id'
    ];

    /**
     * Fillable fields for a Storeownerplan
     *
     * @var array
     */
    protected $fillable = [
        'store_owner_id',
        'store_owner_plan_type_id',
        'store_owner_plan_domain',
    ];


    /**
     * A Storeownerplan belongs to a users
     *
     * @return mixed
     */
    public function storeowner()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * A Storeownerplan belongs to a storeplan
     *
     * @return mixed
     */
    public function storeplan()
    {
        return $this->belongsTo('App\Models\Storeplan');
    }


}