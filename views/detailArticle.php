<?php

if($article){
echo ("<h2>" . $article->getTitre() . "</h2>");//affiche le titre de l'article//qui vient de LA views/detailArticle.php//
echo ($article->getTexte()); //affiche le texte de l'article//qui vient de LA views/detailArticle.php//
}else{
    echo("L'article n'existe pas");
}