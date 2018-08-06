<?php
function getUsers()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, nom, prenom, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM users ORDER BY creation_date DESC ');

    return $req;
}

/*
function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}
*/
function deleteUserModel($postId)
{
    $db = dbConnect();
    $users = $db->prepare('Delete from users where id = ?;');
    $addeduser = $users->execute(array($postId));

    return $addeduser;
}

function addUserModel($nom, $prenom)
{
	$db = dbConnect();
    $users = $db->prepare('INSERT INTO users(nom, prenom, creation_date) VALUES(?, ?, NOW())');
    $addeduser = $users->execute(array($nom, $prenom));

    return $addeduser;
}

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    return $db;
}
