      <?php require("header.php"); ?>
      
          
      <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>
                            <i class="fa fa-shopping-bag bg-red"></i> <?= $title; ?>
                        </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sports</a></li>
                            <li class="breadcrumb-item active">Socity</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                            <ul>
                            <li <?php foreach($dataspor as $c): ?>>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="<?=  Domain_Path; ?>home/details/<?= $c['id'];  ?> " title="">
                                                <img src="<?=  Domain_Path; ?>images/<?= $c['image']; ?>" width="150px" height="150px" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h1><a href="<?=  Domain_Path; ?>home/details/<?= $c['id'];  ?> " title=""><?=  $c['article_Title'];  ?></a></h1>
                                        <p><?=   $c['article_shortdec'];  ?></p>
                                       
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr>
                              <li <?php endforeach;   ?>>
                           </ul>
                          
                    </div><!-- end col -->

                 
                </div><!-- end row -->
            </div><!-- end container -->
        </section>



        <?php require("footer.php"); ?>
