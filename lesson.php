<?php include 'header.php';?>

<?php include 'top-nav.php';?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content pb-0">

    <div class="bg-gradient-primary pb-lg-64pt py-32pt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt video-player">
                        <div class="player embed-responsive-item">
                            <div class="player__content">
                                <div class="player__image" style="--player-image: url(assets/images/illustration/player.svg)"></div>
                                <a href="" class="player__play">
                                    <span class="material-icons">play_arrow</span>
                                </a>
                            </div>
                            <div class="player__embed d-none">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-sm video-list">
                        <?php  
                            for ($x = 0; $x <= 10; $x++) {
                                echo '<div class="card-body d-flex align-items-center">
                                <a href="course.html" class="avatar avatar-4by3 mr-16pt">
                                    <img src="assets/images/paths/angular_testing_200x168.png" alt="Angular Unit Testing" class="avatar-img rounded">
                                </a>
                                <div class="flex">
                                    <a class="card-title mb-4pt" href="course.html">Angular Unit Testing</a>
                                    <div class="player__content">
                                        <div class="player__image" style="--player-image: url(assets/images/illustration/player.svg)"></div>
                                        <div class="d-flex align-items-center">
                                            <span class="player__play _player__play">
                                                <span class="material-icons">play_arrow</span>
                                            </span>
                                            <span class="text-muted mb-0 px-2">3min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 bg-white border-bottom-2">
        <div class="container page__container">
            <div class="d-flex align-items-center justify-content-between">
                <h2>About this course</h2>
                <a href="" class="btn btn-primary">screenshots</a>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <h4>About me</h4>
                    <p>Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>
                </div>
            </div>
        </div>
        <div class="page-separator-mask__content">
            <div class="page-separator-mask__top"></div>
            <div class="page-separator-mask__bottom"></div>
            <div class="page-separator">
                <a href="#" class="page-separator__text link-text">read more <i class="material-icons">keyboard_arrow_down</i></a>
            </div>
        </div>
    </div>

</div>
<!-- // END Header Layout Content -->

<?php include 'footer.php';?>