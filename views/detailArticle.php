<?php

if($article){
echo ("<h2>" . $article["titre"] . "</h2>");//affiche le titre de l'article//qui vient de LA views/detailArticle.php//
echo ($article["texte"]); //affiche le texte de l'article//qui vient de LA views/detailArticle.php//
}else{
    echo("L'article n'existe pas");
}