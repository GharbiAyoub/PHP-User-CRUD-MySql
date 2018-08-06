<?php $title = 'Mon blog - Liste Utilisateurs'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Liste des Utilisateurs</p>

<a href='index.php?action=add'> add User </a>
<?php
while ($data = $users->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['nom']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['id'])) ?> : <?= nl2br(htmlspecialchars($data['prenom'])) ?>
            <br />
			<a href="index.php?action=delete&amp;id=<?= $data['id'] ?>">Supprimer</a>
        </p>
		
    </div>
<?php
}
$users->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>