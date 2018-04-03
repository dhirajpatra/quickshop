<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storeplan extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store_plans';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'store_plan_id'
    ];

    /**
     * Fillable fields for a Profile
     *
     * @var array
     */
    protected $fillable = [
        'store_plan_name',
        'store_plan_price',
        'store_plan_billing_cycle',
    ];


    /**
     * Storeplan Storeplanfeature Relationships
     *
     * @var array
     */
    public function storeplanfeature()
    {
        return $this->hasMany('App\Models\Storeplanfeature');
    }

    /**
     * Storeplan Storeownerplan Relationships
     *
     * @var array
     */
    public function storeownerplan()
    {
        return $this->hasMany('App\Models\Storeownerplan');
    }

}