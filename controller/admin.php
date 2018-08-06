<?php

require('model/admin.php');

function listUsers()
{
    $users = getUsers();
	require('view/backend/listUsersView.php');
}


function add()
{
    require('view/backend/addUser.php');
}

function addUser($nom, $prenom )
{
   
   $addedLine = addUserModel($nom, $prenom);
   
   if ($addedLine === false) {
        throw new Exception('Impossible d\'ajouter l utilisateur !');
    }
    else {
        header('Location: index.php?');
    }
}

function deleteUser($postId){
	$addedLine = deleteUserModel($postId);
   
   if ($addedLine === false) {
        throw new Exception('Impossible de supprimer l utilisateur !');
    }
    else {
        header('Location: index.php?');
    }
}
