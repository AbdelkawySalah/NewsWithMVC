      <?php require("header.php"); ?>
      
        <section class="section wb">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="portfolio row">
                                  <?php foreach($alldata as $c):  ?>
                                    <div class="pitem item-w1 item-h1">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="<?=  Domain_Path; ?>home/details/<?= $c['id'];  ?> " title="">
                                                <img src="<?=  Domain_Path; ?>images/<?= $c['image']; ?>" style="width:300px;height:300px" alt="">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <span class="bg-grey"><a href="blog-category-01.html" title=""><?=   $c['name']; ?></a></span>
                                            <h4><a href="<?=  Domain_Path; ?>home/details/<?= $c['id'];  ?> " title=""><?=   $c['article_Title']; ?></a></h4>
                                            
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                                  <?php endforeach; ?>
                            </div><!-- end portfolio -->
                        </div><!-- end page-wrapper -->
                      
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
       <?php require("footer.php"); ?>