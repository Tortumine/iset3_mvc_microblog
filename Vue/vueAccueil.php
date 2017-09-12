<?php $this->titre = "Aliaksei Mazurchyk"; ?>
<div class="list-group">  
<?php foreach ($billets as $billet):
    ?>
	 <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>" class="list-group-item">
    <article>
        <header>
           
                <h2 class="titreBillet"><?= $billet['titre'] ?></h2>
            
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
	</a>
<?php endforeach; ?>
</div>
