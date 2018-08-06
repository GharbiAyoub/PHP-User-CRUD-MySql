<?php
require('controller/admin.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            //listPosts();
        }
        elseif ($_GET['action'] == 'add') {
            add();
        }
        elseif ($_GET['action'] == 'addUser') {
            addUser($_POST['nom'],$_POST['prenom']);
        }
		elseif ($_GET['action'] == 'delete') {
            deleteUser($_GET['id']);
        }
    }
    else {
        listUsers();
		//echo 'get Users()';
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
