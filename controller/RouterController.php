<?php

// pages communes à private et public
if(!isset($_GET['p'])){
    // appel de la vue
    include "../view/homepage.html.php";
}elseif ($_GET['p']==='about'){

}