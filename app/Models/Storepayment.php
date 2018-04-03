<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storepayment extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'store_payments';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'store_payment_id'
    ];

    /**
     * Fillable fields for a Storepayment
     *
     * @var array
     */
    protected $fillable = [
        'store_payment_owner_plan_id',
        'store_payment_amount',
        'store_payment_method',
    ];


    /**
     * A Storepayment belongs to a storeownerplan
     *
     * @return mixed
     */
    public function storeownerplan()
    {
        return $this->belongsTo('App\Models\Storeownerplan');
    }

   
}