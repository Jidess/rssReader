<?php
// var_dump($_GET);
// die;

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<ul>';
            foreach ($themes[$_GET["theme"]]->channel->item as $item){
                $datetime = date_create($item->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$item->link.'">'.($item->title).'</a> ('.$date.')</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>