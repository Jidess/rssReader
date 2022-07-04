<div class="container">
    <div class="row ">
    <div class="col-12 col-md-4 d-flex flex-column">
        <?php
            echo '<h4 class="text-center">'.$sujet1.'</h4>';
            echo '<div>';
            for($i = 0; $i < $radioCookie; $i++){
                
                $description = htmlspecialchars_decode($themes[$sujet1]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                echo '<div class="card bg-secondary d-flex flex-column justify-content-center align-items-center cardHome mb-5"><div>'.'<img class="card-img-top imgCard" src="'.$getImgClean.'"> </div> <div class="card-body d-flex flex-column justify-content-center align-items-center"> <p class="card-text">'.($themes[$sujet1]->channel->item[$i]->title).'</p><a href="'.$themes[$sujet1]->channel->item[$i]->link.'"><button class="btn btn-danger"> En savoir plus </button> </a></div></div>';
            }
            echo '</div>';
        ?>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column">
        <?php
            echo '<h4 class="text-center">'.$sujet2.'</h4>';
            echo '<div>';
            for($i = 0; $i < $radioCookie; $i++){
                
                $description = htmlspecialchars_decode($themes[$sujet2]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                echo '<div class="card bg-secondary d-flex flex-column justify-content-center align-items-center cardHome mb-5"><div>'.'<img class="card-img-top imgCard" src="'.$getImgClean.'"> </div> <div class="card-body d-flex flex-column justify-content-center align-items-center"> <p class="card-text">'.($themes[$sujet2]->channel->item[$i]->title).'</p><a href="'.$themes[$sujet2]->channel->item[$i]->link.'"><button class="btn btn-danger"> En savoir plus </button> </a></div></div>';
            }
            echo '</div>';
        ?>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column">
        <?php
            echo '<h4 class="text-center">'.$sujet3.'</h4>';
            echo '<div>';
            for($i = 0; $i < $radioCookie; $i++){
                
                $description = htmlspecialchars_decode($themes[$sujet3]->channel->item[$i]->description);
                preg_match('/src="([^"]+)"/', $description, $matches);
                $getImgClean = substr($matches[0], 0, -1); // Enlever un quote en trop à la fin
                $getImgClean = substr($getImgClean, 5); // Nettoyer le lien pour n'avoir que l'url en supprimant src="
                
                echo '<div class="card bg-secondary d-flex flex-column justify-content-center align-items-center cardHome mb-5"><div>'.'<img class="card-img-top imgCard" src="'.$getImgClean.'"> </div> <div class="card-body d-flex flex-column justify-content-center align-items-center"> <p class="card-text">'.($themes[$sujet3]->channel->item[$i]->title).'</p><a href="'.$themes[$sujet3]->channel->item[$i]->link.'"><button class="btn btn-danger"> En savoir plus </button> </a></div></div>';
            }
            echo '</div>';
        ?>
        </div>
    </div>
</div>

