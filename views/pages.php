<?php
// var_dump($_GET);
// die;

?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <?php
            
            echo '<ul class="list-group ">';
            echo '<li><h4 class="list-group-item text-center bg-secondary">'.$_GET["theme"].'</h4></li>';
            for($i = 0; $i < $radioCookie; $i++){
                $datetime = date_create($themes[$_GET["theme"]]->channel->item[$i]->pubDate);
                $date = date_format($datetime, 'd M Y, H\hi');
                echo '<li class="list-group-item bg-secondary "><a href="'.$themes[$_GET["theme"]]->channel->item[$i]->link.'">'.($themes[$_GET["theme"]]->channel->item[$i]->title).'</a> ' . $date . ' ' . $themes[$_GET["theme"]]->channel->item[$i]->description . '</li>';
            }
            echo '</ul>';
        ?>
        </div>
    </div>
</div>