<div class="container resized">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<div class="cardType glassMorph pt-3 pb-3"><ul><h4>'.($rssSec->channel->title).'</h4>';
            for ($i = 0; $i < 3; $i++){
                $datetime = date_create($rssSec->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$rssSec->channel->item->link.'">'.($rssSec->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul><button class="buttonColor">Voir plus...</button></div>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<div class="cardType glassMorph pt-3 pb-3"><ul><h4>'.($rssTech->channel->title).'</h4>';
            for ($i = 0; $i < 3; $i++){
                $datetime = date_create($rssTech->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$rssTech->channel->item->link.'">'.($rssTech->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul><button class="buttonColor">Voir plus...</button></div>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<div class="cardType glassMorph pt-3 pb-3"><ul><h4>'.($rssPc->channel->title).'</h4>';
            for ($i = 0; $i < 3; $i++){
                $datetime = date_create($rssPc->channel->item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$rssPc->channel->item->link.'">'.($rssPc->channel->item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul><button class="buttonColor">Voir plus...</button></div>';
        ?>
        </div>
    </div>
</div>

