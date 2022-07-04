<div class="container">
    <div class="row ">
        <div class="col-12 col-md-4 d-flex flex-column align-item-center ">
        <?php
            echo '<h4 class="text-center">'.$sujet1.'</h4>';
            echo '<ul class="list-group">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet1]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                $description = htmlspecialchars_decode($themes[$sujet1]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                echo '<li class="list-group-item list-group-item-action bg-secondary"><div class="d-flex justify-content-center">'.'<img src="'.$getImgClean.'"> </div><a href="'.$themes[$sujet1]->channel->item[$i]->link.'">'.($themes[$sujet1]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column">
        <?php
            echo '<h4 class="text-center">'.$sujet2.'</h4>';
            echo '<ul class="list-group">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet2]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                $description = htmlspecialchars_decode($themes[$sujet2]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                echo '<li class="list-group-item list-group-item-action bg-secondary"><div class="d-flex justify-content-center">'.'<img src="'.$getImgClean.'"> </div><a href="'.$themes[$sujet2]->channel->item[$i]->link.'">'.($themes[$sujet2]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column ">
        <?php
            echo '<h4 class="text-center">'.$sujet3.'</h4>';
            echo '<ul class="list-group align-item-center  ">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet3]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                $description = htmlspecialchars_decode($themes[$sujet3]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                echo '<li class="list-group-item list-group-item-action bg-secondary"><div class="d-flex justify-content-center">'.'<img src="'.$getImgClean.'"> </div><a href="'.$themes[$sujet3]->channel->item[$i]->link.'">'.($themes[$sujet3]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>

