<?php
echo "<h2>" . htmlspecialchars($title) . "</h2>";//securise le titre

for ($i=0; $i < count($listeArticle); $i++){
    $article = $listeArticle[$i]->getTitre();//on recupere le titre de l'article
    $id = $listeArticle[$i]->getId();//on recupere l'id de l'article      
   $protectedArticle = htmlentities($article,ENT_QUOTES);//securise le titre
    echo ("<a href=\"index.php?action=detailArticle&id=$id\">$protectidActicle checkI</a> <br/>");
}