<?php
require_once("./model/user.php");
require_once('./data/user_data.php');
require_once('./model/product.php');
require_once('./data/product_data.php');
require_once('./data/comment_data.php');
require_once("./model/comment.php");


$newUser = new User('pedro','pedro@bol.com','1234');
// $newUser2 = new User('José','jose@bol.com','5555');
$userData = $newUser->add($userData);

// $userData = $newUser2->add($userData);

$newProduct = new Product('Lápis', 'Escreve bem', '2');
$productData = $newProduct->add($productData);

$newComment = new Comment('12.03', 'Produto muito bom', $newUser->getId(), '1');
$commentData = $newComment->add($commentData);

Comment::show($newComment->getId() , $commentData);

// User::list($userData);
// Product::show(1, $productData);
// User::show(2, $userData);