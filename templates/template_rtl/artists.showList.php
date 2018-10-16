<!-- Page Title
		============================================= -->
<section id="page-title" >

    <div class="container clearfix">
        <h1> هنرمندان</h1>
        <span>نمایش تمامی هنرمندان مطرح ایران</span>
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li class="active"> هنرمندان</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap" style="padding: 1px 0 0 0;">

        <div class="col-xs-12 col-sm-12 col-md-2 pull-right ">
            <?php //include_once("categoryList.php");?>
            <nav class=" nobottommargin category-ul">

                <? echo $list['export']['category'];?>
                <? echo $list['export']['genre'];?>

            </nav>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 pull-left">
        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio grid-container portfolio-6    portfolio-masonry mixed-masonry grid-container clearfix">
            <?
            if(count($list['list']) == 0 && isset($msg))
            {
            ?>
            <div class="whiteBg boxBorder roundCorner clear fullWidth ">
                <!-- separator -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <div class="alert alert-warning">
                            <strong>توجه! </strong><? echo $msg;?>
                        </div>
                    </div>
                </div>
            </div>
            <?
            }

            foreach($list['list'] as $k => $value)
            {
                ?>
                <article class="portfolio-item pf-media pf-icons <? /* if($k % 4 ==0){echo 'wide';} */?> ">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="<?php echo (strlen($value['logo']) ? RELA_DIR.'statics/files/'.$value['Artists_id'].'/'.$value['logo'] : TEMPLATE_DIR.'/assets/images/placeholder.png'); ?>" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <div class="portfolio-desc">

                                <h3><a href="<?php echo RELA_DIR . 'artists/Detail/' . $value['Artists_id'] . '/' . $value['artists_name']; ?>"><?php echo($value['artists_name'] != "" ? $value['artists_name'] : "-"); ?> </a></h3>
                                <!--<span><a href="#">Media</a>, <a href="#">Icons</a></span>-->
                            </div>
                            <a href="<?php echo (strlen($value['logo']) ? RELA_DIR.'statics/files/'.$value['Artists_id'].'/'.$value['logo'] : RELA_DIR.'templates/'.CURRENT_SKIN.'/assets/images/placeholder.png'); ?>" class="left-icon" data-lightbox="image"><i
                                    class="icon-line-zoom-in"></i></a>
                            <a href="<?php echo RELA_DIR . 'artists/Detail/' . $value['Artists_id'] . '/' . $value['artists_name']; ?>" class="right-icon"><i title="جزییات" class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                </article>

                <?php
            }
            ?>



        </div><!-- #portfolio end -->
            <div class="clearfix"></div>
            <?
            if(count($list['pagination']))
            {
                ?>
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <?
                    foreach($list['pagination'] as $key => $link)
                    {
                        if($key === 'current'){ continue;}
                        ?>
                        <li class="<?=(($key+1 == $list['pagination']['current']) || (empty($list['pagination']['current']) && $key == 0 ))?'active':'';?>" ><a href="<?=RELA_DIR.$link;?>"><?=$key+1?></a></li>
                        <?
                    }
                    ?>

                    <li><a href="#">&raquo;</a></li>
                </ul>


                <?php
            }
            ?>
            </div>

    </div>

</section><!-- #content end -->
                    <!-- separator -->




