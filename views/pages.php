<?php
// var_dump($_GET);
// die;

?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
            echo '<h4 class="text-center my-3">'.$_GET["theme"].'</h4>';
            for($i = 0; $i < $radioCookie; $i++){

                $description = htmlspecialchars_decode($themes[$_GET["theme"]]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                $datetime = date_create($themes[$_GET["theme"]]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<div class="card mb-3 bg-secondary align-items-center " ><div class="row g-0"><div class="col-lg-4 d-flex justify-content-center align-items-center"><img class="imgCard" src="'."$getImgClean ".'"> </div> <div class="col-lg-8"> <div class="card-body"> <h4 class="card-title">'.($themes[$_GET["theme"]]->channel->item[$i]->title).'</h4><p> ' . $date . '</p><p class="cardDesc"> ' . $themes[$_GET["theme"]]->channel->item[$i]->description . '</p></div></div></div></div>';
            }
            echo '</div>';
        ?>
        </div>
    </div>
</div>