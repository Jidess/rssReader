<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<ul>';
            foreach ($rssSec->channel->item as $item){
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$item->link.'">'.($item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<ul>';
            foreach ($rssTech->channel->item as $item){
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$item->link.'">'.($item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
        <div class="col-12 col-md-4">
        <?php
            echo '<ul>';
            foreach ($rssPc->channel->item as $item){
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$item->link.'">'.($item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>

