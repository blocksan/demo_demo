<?php 
class product_search{
	public $color="blue";
	public $name="sandeep";

}
$obj_product=new product_search;/*
echo $obj_product->color;

echo '<br>'.$obj_product->name;*/
$obj_product->name="rahul";
$_SESSION['product_object']=$obj_product;

echo $_SESSION['product_object']->color;

echo '<br>'.$_SESSION['product_object']->name;
?>