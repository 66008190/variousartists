<!-- Page Title
		============================================= -->

<section id="page-title">

    <div class="container clearfix">
        <h1><?=$list['list']['event_name'];?></h1>
        <ol class="breadcrumb">
            <li><a href="<?=RELA_DIR?>">خانه</a></li>
            <li><a href="<?=RELA_DIR?>event">رویدادها</a></li>
            <li class="active"><?=$list['list']['event_name'];?></li>
        </ol>
    </div>

</section><!-- #page-title end -->
<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="single-event col-md-10 col-md-offset-1 center">

                <?$newDate = ($list['list']['date']!="0000-00-00" ? convertDate($list['event_time']):"");?>
                    <div class="panel panel-default events-meta" id="changeNumber">
                        <div class="panel-heading">
                            <h3 class="panel-title">رویداد:<?=$list['event_name']?></h3>
                        </div>

                        <form action="<?= RELA_DIR ?>sales" method="POST" data-validate="form" role="form">
                               <div class="col-md-offset-4 ">
                                <ul class="iconlist nobottommargin ">
<br>
                                    <br><br>
                                    <li><i class="icon-map-marker2"></i> محل برگزاری:    <?=$list['place_name']?></li>
                                    <br>
                                    <li><i class="icon-paperplane"></i> بخش انتخابی:   <?=$list['part_name']?></li>
                                    <br>
                                    <li><i class="icon-ticket"></i> صندلی انتخاب شده: شماره     <?=$list['sandali']?></li>
                                    <br>
                                    <li><i class="icon-time"></i> تاریخ و ساعت انتخاب شده:    <?=$newDate?></li>
                                    <br>
                                    <li><i class="icon-calculator"></i>جمع فاکتور:    </li>
                                   <br>
                                    <li><i class="icon-paypal"></i>درگاه پرداخت : بانک پاسارگاد    </li>
                                    </li><br>
                                    <br><br><br>   </ul>
                               </div>
                            <div class="form-group form-actions">
                                <input type="submit" class="btn btn-primary btn-default btn-block text-white text-16" value="پرداخت">
                            </div>
                            </form>                     </div>
        </div>


            </div>

        </div>


</section><!-- #content end -->





