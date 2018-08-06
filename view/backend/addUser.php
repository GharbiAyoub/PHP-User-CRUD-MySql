<?php $title = 'Mon blog - Ajouter Utilisateur'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Ajouter Un Utilisateur</p>

<a href='index.php?'>Retour à la liste des Utilisateurs </a>
<form action="index.php?action=addUser" method="post">
<table>
<tr>
<td>Nom: </td><td> <input type="text" id="nom" name="nom" /></td>
</tr>
<tr>
<td>Prenom: </td><td> <input type="text" id="prenom" name="prenom" /></td>
</tr>
<tr>
<td>
<input type="submit" />
</td>
</tr>
</table>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>