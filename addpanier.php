<?php
require 'init.php';

$json = array('error' => true);

header('Content-Type: text/html; charset=utf-8');
if(isset($_GET['id'])) {
    $product = $DB->query('SELECT id,name FROM products WHERE id=:id', array('id' => $_GET['id']));
    /*var_dump($product);*/
    if(empty($product)){
        $json['message'] = "This products not exist";
    }
    $panier->add($product[0]->id);
    $json['error']   = false;
    $json['count']   = $panier->count();
    $json['id']      = $product[0]->id;
    $json['message'] = 'The product "'. $product[0]->name .'" have been successfully added to your cart.';
}else{
    $json['message'] = "You do not selected an existing product";
}
echo json_encode($json);