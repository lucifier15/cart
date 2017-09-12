<?php

namespace App;



class Cart
{
    public $items =null;
    public $totalQty =0;
    public $totalPrice =0;

    public function __construct($oldCart)  //checking old cart
    {
    	if ($oldCart){
    		$this->items =$oldCart->items;
    		$this->totalQty =$oldCart->totalQty;
    		$this->totalPrice =$oldCart->totalPrice;
    	}

    }

    public function add($item, $id){                                 //adding a new item
    	$storedItem =['qty' =>0,'price'=>$item->price,'item'=>$item]; 
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$storedItem =$this->items[$id];
    		}
    	}
        
        $storedItem['qty']++;                           //updating the group if item exits in cart
        $storedItem['price']= $item->price * $storedItem['qty'];
    	$this->items[$id]=$storedItem;
    	$this->totalQty++;
    	$this->totalPrice +=$item->price;
    }
}
