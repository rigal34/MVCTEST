<?php
echo "<h2>" . htmlspecialchars($title) . "</h2>";//securise le titre

for ($i=0; $i < count($listeArticle); $i++){
    $article = $listeArticle[$i]["titre"];//on recupere le texte de l'article
    $id = $listeArticle[$i]["id"];//on recupere l'id de l'article       
    print_r($article);
    echo ("<a href=\"index.php?action=detailArticle&id=$id\">$article</a> <br/>");
}