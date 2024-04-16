<?php

use Classes\Admin;
use Classes\User;
use Classes\Tweet;
use Data\Data;
use Classes\Like;
use Classes\Reply;

require_once './Data/Data.php';
require_once './Classes/Roles.php';
require_once './Classes/User.php';
require_once './Classes/Admin.php';
require_once './Classes/Tweet.php';
require_once './Classes/Like.php';
require_once './Classes/Reply.php';

echo '<pre>';
echo "<h1>Grow Twitter</h1>";

$db = new Data([
  'tweets' => [],
  'accounts' => [],
]);


// users
$user1 = new User('maria.silva', 'maria@gmail.com', '6789');
$user2 = new User('pedro.alvez', 'pedro@email.com', '234');
$user3 = new User('joao.dos.santos', 'joao@email.com', '111111');

$adm1 = new Admin('xdevx', 'dev.coffe@email.com', '192837');


// Seguindo usuários
$user1->follow($user3);
$user1->follow($user2);
$user2->follow($user1);
$user3->follow($user1);


$db->persist('accounts', $user1);
$db->persist('accounts', $user2);
$db->persist('accounts', $user3);
$db->persist('accounts', $adm1);


// Criação de Tweets
$tweet = new Tweet($user1, "PHP morreu! mude para uma linguagem mais atual...");
$tweet1 = new Tweet($user2, "Novamente 3 horas procuando bug e era uma maldita vírgula");
$tweet2 = new Tweet($user3, "Consegui meu primeiro emprego na área Tech, não me aguento de felicidade!!!");



$db->persist('tweets', $tweet);
$db->persist('tweets', $tweet1);
$db->persist('tweets', $tweet2);



//Criação de Likes 
$like1 = new Like($user2->getName(), $user2->getId(), $tweet->getId());
$like2 = new Like($user3->getName(), $user3->getId(), $tweet1->getId());
$like3 = new Like($user1->getName(), $user1->getId(), $tweet1->getId());
$like4 = new Like($user1->getName(), $user1->getId(), $tweet2->getId());
$like5 = new Like($user2->getName(), $user2->getId(), $tweet2->getId());


$tweet->giveLike($like1);
$tweet1->giveLike($like2);
$tweet1->giveLike($like3);
$tweet2->giveLike($like4);
$tweet2->giveLike($like5);


// Comentários
$reply1 = new Reply("Não concordo, falou besteira", $tweet->getId(), $user3->getName());
$reply2 = new Reply("Muito eu hahahah!", $tweet1->getId(), $user1->getName());
$reply3 = new Reply("Que Massa!!!", $tweet2->getId(), $user1->getName());
$reply4 = new Reply("Boaaaa, só esperando minha vez", $tweet2->getId(), $user2->getName());

$tweet->reply($reply1);
$tweet1->reply($reply2);
$tweet2->reply($reply3);
$tweet2->reply($reply4);



// Tweets
echo "<h2>Todos os Tweets</h2>";
Tweet::listAll($db->getAll('tweets'));



// feed do usuário
echo "<hr>";
echo "<h2>Feed do Usuário</h2>";

$tweets = $db->getAll('tweets');
User::showFeed($user2->getId(), $user2->getFollowing(), $tweets);