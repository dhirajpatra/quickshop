<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storeplanfeature extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store_plan_features';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'store_plan_feature_id'
    ];

    /**
     * Fillable fields for a Storeplanfeature
     *
     * @var array
     */
    protected $fillable = [
        'store_plan_feature_plan_id',
        'store_plan_feature_name',
        'store_plan_feature_value',
    ];


    /**
     * A Storeplanfeature belongs to a Storeplan
     *
     * @return mixed
     */
    public function storeplan()
    {
        return $this->belongsTo('App\Models\Storeplan');
    }


}