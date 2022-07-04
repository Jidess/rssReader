<?php
// var_dump($_GET);
// die;

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
        <?php
            echo '<h4>'.$sujet1.'</h4>';
            echo '<ul>';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$_GET["theme"]]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li><a href="'.$themes[$_GET["theme"]]->channel->item[$i]->link.'">'.($themes[$_GET["theme"]]->channel->item[$i]->title).'</a> ' . $date . ' ' . $themes[$_GET["theme"]]->channel->item[$i]->description . '</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>