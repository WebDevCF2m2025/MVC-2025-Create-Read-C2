<?php
/**
 * Fonction qui affichera les articles (voir la table `article`) par ordre de publication `article_date_published` descendant SI `article_is_published` => 1 (0 si non publié)
 */

function getArticles (PDO $connection, bool $publish = true): array
{
    // si publié
    $isPublish = $publish? "WHERE a.article_is_published = 1" : "";

    $sql = "
    SELECT a.*, u.user_name
        FROM article a
        INNER JOIN user u
            ON u.iduser = a.user_iduser
        $isPublish
        # AND a.idarticle=1
    ORDER BY a.article_date_published DESC,
             a.article_date_created DESC;
    ;
    ";

    $prepare = $connection->prepare($sql);

    try{
        $prepare->execute();
        $result = $prepare->fetchAll();
        $prepare->closeCursor();
        return $result;
    }catch(Exception $e){
        die($e->getMessage());
    }

}