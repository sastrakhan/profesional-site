<?php /* Template Name: sean-home */ ?>
<?php get_header(); 
        
?>
 
<main class="container content-area ">
    <div id="primary" class="row-m-t"> 

        <article class="row smt-10 pt-4">
            <!-- <section class="col-sm-6">
                <h1 id="home-banner">Skills &amp; Projects</h1>
            </section> -->
            <blockquote  id="homeTopQuote" class="blockquote offset-md-3 col-md-6">
                    <?php 
                        $bannerQuote = '';
                        if(isset($_SESSION['isSuperUser'])){
                            ob_start(); ?>

                            <h3 class="NotoFont text-primaryDark text-center">
                                <small><i class="small fa fa-quote-left"></i></small>
                                    Full-stack developer ready for new opportunities &amp; languages,
                                    eager to <large class="text-secondaryDark">learn from your team</large> and
                                    be part of <large class="text-secondaryDark">something bigger</large>.
                                <small><i class="small fa fa-quote-right"></i></small> 
                                <br class="d-sm-block d-md-none" />
                            </h3>
                            <p id="home-quote" class="text-center">-I said about myself</p>
                            <?php 
                            $bannerQuote = ob_get_clean();

                        } else{
                            ob_start(); ?>

                            <h3 class="NotoFont text-primaryDark text-center">
                                <small><i class="small fa fa-quote-left"></i></small>
                                    A full-stack developer who values <large class="text-secondaryDark">learning</large> 
                                    and <large class="text-secondaryDark">collaboration</large> over comfort and predictability.
                                <small><i class="small fa fa-quote-right"></i></small> 
                                <br class="d-sm-block d-md-none" />
                                <span id="home-quote">-I said about myself</span>
                            </h3>

                            <?php 
                            $bannerQuote = ob_get_clean();
                        }

                        echo $bannerQuote;
                    ?>
                        
                    <hr class="post-Portfolio mt-4 mb-4" />
            </blockquote>  

        </article>
        <section class="">
                <h1 class="text-uppercase page-banner" id="home-banner">Skills &amp; Projects</h1>
        </section>
        <aside class="clearfix">
                <div class="d-sm-none d-none d-md-block float-left">
                    <a href="https://www.github.com/sastrakhan?tab=stars" target="_blank"><span class="fa fa-3x fa-github text-secondaryLight"></span></a>
                </div>
                
                <a target="_blank" href="http://sean-professional.azurewebsites.net/wp-content/uploads/2018/09/Sean-Astrakhan-Resume.pdf">  
                    <button type="button" class="btn btn-resume float-md-right col-md-2 col-4 offset-4">
                        <i class="fa fa-download" aria-hidden="true"></i> Resume 
                    </button>
                </a>
        </aside>

            
        <ul id="project-list" class="nav nav-tabs row mt-2" id="myTab" role="tablist">
            <li class="nav-item col-6 nav-item-l">
                <div class="nav-link active" aria-selected="true" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="home">
                    <section class="row skillsTab">
                        <div class="col-md-6 skillsList">
                            <h2 class="d-sm-none d-none d-md-block">Backend</h2>
                            <h2 class="d-sm-block d-md-none">Back/Front</h2>
                            <ul>
                                <li>C#/.Net</li>
                                <li>PHP</li>
                                <!-- <li>Need something</li> -->
                            </ul>
                        </div>
                        <div class="col-md-6 skillsList">
                            <h2 class="d-sm-none d-none d-md-block">Javascript</h2>
                            <ul>
                                <li>React</li>
                                <li>Angular</li>
                                <li>Handlebars</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </li>
            <li class="nav-item col-6 nav-item-r">
                <div class="nav-link" id="data-exp-tab" data-toggle="tab" href="#data-exp" role="tab" aria-controls="data-exp" aria-selected="false">
                    <section class="row skillsTab">
                            <div class="col-md-6 skillsList">
                                <h2 class="d-sm-none d-none d-sm-none d-md-block">Data</h2>
                                <h2 class="d-sm-block d-md-none">Data/SAAS</h2>
                                <ul>
                                    <li>SQL</li>
                                    <li>SSIS</li>
                                    <li>Power-BI</li>
                                </ul>
                            </div>
                            <div class="col-md-6 skillsList">
                                <h2 class="d-sm-none d-none d-sm-none d-md-block">SAAS</h2>
                                <ul>
                                    <li>CRM</li>
                                    <li>WordPress</li>
                                    <li>SharePoint</li>
                                </ul>
                            </div>
                    </section>
                </div>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                <!--Serverside Content-->
                <?php buildPostExcerpt(array ( 0 => "serverside", 1 => "javascript")); ?>
            </div>
            <div class="tab-pane fade" id="data-exp" role="tabpanel" aria-labelledby="data-exp-tab">
                <!--Data Content-->
                <?php buildPostExcerpt(array ( 0 => "data", 1 => "saas")); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col bg-primaryMid rounded-top container">
            <h3 class="text-white mt-4">In the Community...</h3>
            <p class="text-white"><i>“It’s easy to make a buck.  It’s a lot tougher to make a difference. ”</i> – Tom Brokaw</p>
            <!-- Card Narrower -->
            <div class="card card-cascade narrower mb-3">
                <!-- Card image -->
                <a href="http://www.baltimoredcp.org/" target="_blank">
                    <div class="view view-cascade overlay bdcp-image darken-overlay" >
                            <h4 class="pt-2 volunteerCardText" style=""><strong>Baltimore Dance Crews Project</strong></h4>
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                            <h4 class="card-title ">Dancer &amp; Developer</h4>
                        <!-- Text -->
                        <p class="card-text text-primaryDarkGrey">
                            Volunteering with their data and CRM needs to help more people hear about their incredible mission...    
                        </p>
                    </div>
                </a>
                <!-- <a href="https://www.youtube.com/watch?v=2Nm68FW_dDI&feature=youtu.be" target="_blank">
                            <i class="fa fa-video-camera text-secondaryDark" aria-hidden="true"></i>    
                </a>  -->
            </div>
            <!-- Card Narrower -->
            <div class="card card-cascade narrower mb-3">
                <!-- Card image -->
                <a href="http://www.codeforbaltimore.org/team/" target="_blank">
                    <div class="view view-cascade overlay code4bmore-image darken-overlay">
                                <h3 class="pt-2 text-white volunteerCardText"><strong>Code 4 Baltimore</strong></h3>
                        </div>
                        <!-- Card content -->
                        <div class="card-body card-body-cascade">
                            <!-- Title -->
                                <h4 class="card-title">Tech Lead</h4>
                            <!-- Text -->
                            <p class="card-text text-primaryDarkGrey">
                                Volunteering on tech projects to create solutions that aid local government...  
                            </p>
                        </div>
                    </div>
                </a>
            <!-- Card Narrower -->
        </section>
        <section class="col flex-260">
            <section class="mt-3 mb-5">
                    <h1 class="text-uppercase page-banner" id="home-banner">Recent Blog Posts</h1>
                    <hr class="post-Portfolio" />
            </section>
                <?php createBlogList() ?>
        </section>
    </div>
  
</main>

<script src="./wp-content/themes/custom_sean_theme/js/bubbles/rAF.js"></script>
<script src="./wp-content/themes/custom_sean_theme/js/bubbles/demo-2.js"></script>
 
<?php 
    function createBlogList(){
        $blogPosts = getPosts(array ( 0 => "Uncategorized"), 3);

        foreach($blogPosts as $blogPost){
            $description_trimmed = mb_strimwidth($blogPost -> min_description, 0, 150, '...<br />');

            echo    '<div class="row">';
            echo       '<div class="col-2 wrapper">';
            echo          '<img class="rounded-circle img-responsive circle" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo       '</div>';
            echo       '<div class="offset-1 col-9 col-lg-8">';
            echo         '<a href="' . $blogPost -> link . '#">';
            echo           '<h4 class="text-primaryMid">' . $blogPost -> title . '</h4>';
            echo           '<p>' . $description_trimmed . '</p>';
            echo           '<div class="container row justify-content-between">';
            echo               '<div class"col-4">';
            echo                   '<p class="text-muted"><i>' . $blogPost -> dateCreated . '</i></p>';
            echo               '</div>';
            echo               '<div class"col-4">';
            //echo                '<p>' . $blogPost -> tags_formatted . '</p>';
            echo               '</div>';
            echo           '</div>';
            echo        '</a>';
            echo       '</div>';
            echo    '</div>';
        }
    }

    function getPosts($categoryNames, $amount){
        require_once('template-parts/seanPost.php');

        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => $amount,
            'category_name' =>  implode (", ", $categoryNames)
        );

        $the_query = new WP_Query( $args ); 
        return getPostProperties($the_query);
    }

    function buildPostExcerpt($category){

        $blogPosts = getPosts($category, 10);

        echo '<div class="row">';
        foreach($blogPosts as $blogPost){
            $post_URL = '<a href="' . $blogPost -> link . '#">Read more</a>';
            $post_min_desc_parsed = explode("Features", $blogPost -> min_description, 2);
            $post_min_description = $post_min_desc_parsed[0];
            $post_mobile_description = mb_strimwidth($post_min_description, 0, 50, "...");
            $tags_formatted = buildTagBtns($blogPost -> tags);

            echo     '<a class="col-md-5 blog-card-row" href="' . $blogPost -> link . '#">';
            echo        '<section class="container bg-white p-0 blog-card">';
            echo            '<div class="row">';
            echo                '<div class="col-md-4 col-3 p-0">';
            echo                    '<img class="card-img-top col rounded workPostImg p-0" src="' . $blogPost -> imgURL . '" alt="TODO Change to image name">';
            echo                '</div>';
            echo                '<div class="col-md-8 col-9 pt-3">';
            echo                    '<h3 class="">' . $blogPost -> title . '</h3>';
            echo                    '<p class="mb-0 text-primaryDarkGrey d-none d-sm-none d-md-block">' . $post_min_description . '</p>';
            echo                    '<p class="mb-0 text-primaryDarkGrey d-sm-block d-md-none">' . $post_mobile_description . '</p>';
            echo                     '<div class="mb-1">' . $tags_formatted . '</div>';
            echo                '</div>';
            echo            '</div>';
            echo        '</section>';
            echo     '</a>';
        }
        echo '</div>';

    }
    get_footer(); 
?>

