<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CMS_Kittens</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                    foreach($navi as $val):
                        $active = '';
                        if($val->slug == $slug):
                            $active = " class=\"active\"";
                        endif;
                        ?>
                        <li<?=$active?>><a href="index.php?p=<?=$val->slug?>"><?=$val->title?></a></li>
                        <?php
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
</nav>