<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
        <?php
        foreach($topics as $entry){
            ?>
            <li><a href="/ci/index.php/topic/<?=$entry['id']?>"><?=$entry['title']?></a></li>
            <?
        }
        ?>
    </ul>
</div>