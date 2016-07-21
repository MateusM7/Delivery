<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

   protected $fillable =[
       'client_id',
       'deliveryman_id',
       'total',
       'status'
       

    ];
   
   public function items()
   {

      return $this->hasOne(OrderItem::class);  // pegar os items do pedido

      /* | 
      */
    }

    public function deliveryman()
   {
      return $this->belongsTo(User::class); // pegar o entragado daquele pedido

      
    }

     public function product()
   {
      return $this->hasMany(product::class); // pegar o os Produtos

      
    }

}
