<?php $this->titre = $billet['titre']; ?>

<article>
    <header>
        <h2 class="titreBillet"><?= $billet['titre'] ?></h2>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<header>
    <h3 id="titreReponses">Réponses : <?= $billet['titre'] ?></h3>
</header>
<ul class="list-group">  
<?php foreach ($commentaires as $commentaire): ?>
	<li class="list-group-item">
		<h4><?= $commentaire['auteur'] ?> <small><?= $commentaire['contenu'] ?></small></h4>

	</li>
<?php endforeach; ?>
</ul> 
<hr />
<div class="form-group">
<form method="post" action="index.php?action=commenter" >
    <input id="auteur" name="auteur" type="text" class="form-control" placeholder="Votre pseudo" required /><br />
    <textarea id="txtCommentaire" name="contenu" class="form-control" rows="5" placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" class="btn btn-default"/>
</form>
</div>

