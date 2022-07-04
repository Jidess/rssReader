<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet1.'</h4>';
            echo '<ul>';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet1]->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$themes[$sujet1]->channel->item->link.'">'.($themes[$sujet1]->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet2.'</h4>';
            echo '<ul>';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet2]->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$themes[$sujet2]->channel->item->link.'">'.($themes[$sujet2]->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet3.'</h4>';
            echo '<ul>';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$sujet3]->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$themes[$sujet3]->channel->item->link.'">'.($themes[$sujet3]->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>

<!-- // echo '<li>'.strip_tags($item->description, '<img>').'</li>'; -->