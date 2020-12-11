<?php require("header.php") ?>
  <section class="section wb">

  <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span>
                                <h3><?= $datadet->article_Title; ?></h3>
                            </div><!-- end title -->
                            <div class="single-post-media">
                                <img src="<?=  Domain_Path; ?>images/<?= $datadet->image; ?>" style="width:500px;height:500px;" alt="" class="img-fluid">
                            </div><!-- end media -->
                            <div class="blog-content">  
                                <div class="pp">
                                   <h1><?= $datadet->article_Details; ?></h1>
                                </div><!-- end pp -->
                            </div>end content
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
<?php require("footer.php") ?>