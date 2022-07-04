<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet1.'</h4>';
            echo '<ul class="list-group">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet1]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li class="list-group-item"><a href="'.$themes[$sujet1]->channel->item[$i]->link.'">'.($themes[$sujet1]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet2.'</h4>';
            echo '<ul class="list-group">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet2]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li class="list-group-item"><a href="'.$themes[$sujet2]->channel->item[$i]->link.'">'.($themes[$sujet2]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet3.'</h4>';
            echo '<ul class="list-group">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet3]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li class="list-group-item"><a href="'.$themes[$sujet3]->channel->item[$i]->link.'">'.($themes[$sujet3]->channel->item[$i]->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>

