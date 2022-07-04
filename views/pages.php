<?php
// var_dump($_GET);
// die;

?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
            echo '<h4>'.$_GET["theme"].'</h4>';
            echo '<ul class="list-group ">';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$_GET["theme"]]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li class="list-group-item bg-secondary bg-opacity-25"><a href="'.$themes[$_GET["theme"]]->channel->item[$i]->link.'">'.($themes[$_GET["theme"]]->channel->item[$i]->title).'</a> ' . $date . ' ' . $themes[$_GET["theme"]]->channel->item[$i]->description . '</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>