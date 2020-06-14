<?php include 'header.php';?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content pb-0">

    <div class="navbar navbar-submenu navbar-light border-0 navbar-expand">
        <div class="container">
            <div class="media flex-nowrap">
                <div class="media-left mr-16pt">
                    <a href="course.html"><img src="assets/images/paths/angular_64x64.png" width="40" alt="Angular" class="rounded"></a>
                </div>
                <div class="media-body">
                    <a href="course.html" class="card-title text-body mb-0">Angular Fundamentals</a>
                    <p class="lh-1 d-flex align-items-center mb-0">
                        <span class="text-50 small font-weight-bold mr-8pt">Elijah Murray</span>
                        <span class="text-50 small">Software Engineer and Developer</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
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

            <div class="d-flex flex-wrap align-items-end mb-16pt">
                <h1 class="text-white flex m-0">Introduction to TypeScript</h1>
                <p class="h1 text-white-50 font-weight-light m-0">50:13</p>
            </div>

            <p class="hero__lead measure-hero-lead text-white-50 mb-24pt">JavaScript is now used to power backends, create hybrid mobile applications, architect cloud solutions, design neural networks and even control robots. Enter TypeScript: a superset of JavaScript for scalable, secure, performant and feature-rich applications.</p>

            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                <a href="lesson.html" class="btn btn-outline-white mb-16pt mb-sm-0 mr-sm-16pt">Watch trailer <i class="material-icons icon--right">play_circle_outline</i></a>
                <a href="pricing.html" class="btn btn-white">Get started</a>
            </div>
        </div>
    </div>

</div>
<!-- // END Header Layout Content -->

<?php include 'footer.php';?>