<?php include 'header.php';?>

    <div class="mdk-header-layout__content page-content pb-0">
            <?php include 'top-nav.php';?>
            
            <div class="mdk-box bg-dark mdk-box--bg-gradient-primary js-mdk-box mb-0" data-effects="blend-background">
                <div class="mdk-box__content">
                    <div class="hero py-64pt text-center text-sm-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h1 class="text-white">Angular Fundamentals</h1>
                                    <p class="lead text-white-50 measure-hero-lead">It’s not every day that one of the most important front-end libraries in web development gets a complete overhaul. Keep your skills relevant and up-to-date with this comprehensive introduction to Google’s popular community project.</p>
                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                                        <button data-toggle="modal" data-target="#Watch-trailer" class="btn btn-outline-white mb-16pt mb-sm-0 mr-sm-16pt">Watch trailer <i class="material-icons icon--right">play_circle_outline</i></button>
                                        <a href="pricing.html" class="btn btn-white">Start your free trial</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="position-sticky">
                                        <div class="card p-0 mb-0 justify-content-center border-left-lg">
                                            <div class="card-body flex-0 text-center">
                                                <div>
                                                    <i class="material-icons text-muted">timer</i>
                                                </div>
                                                <h4 class="my-8pt"><strong>Unlock All Videos</strong></h4>
                                                <p class="text-70 mb-24pt">Get access to all videos in the library</p>
                                                <a href="pricing.html" class="btn btn-outline-primary mb-8pt">Get started</a>
                                                <p>Have an account? <a href="login.html">Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-section border-bottom-2">
                <div class="container page__container">

                    <h4>Table of Contents</h4>
                    <div class="card-group card-group--lg-up mb-0">
                        <div class="card col-lg-12 p-0">


                            <ul class="accordion accordion--boxed js-accordion list-group-flush" id="course-toc">
                                <li class="accordion__item open">
                                    <a class="accordion__toggle" data-toggle="collapse" data-parent="#course-toc" href="#course-toc-1">
                                        <span class="flex">Course Overview</span>
                                        <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                    </a>
                                    <div class="accordion__menu">
                                        <ul class="list-unstyled collapse show" id="course-toc-1">
                                            <li class="accordion__menu-link active">
                                                <span class="material-icons icon-16pt icon--left text-primary">play_circle_outline</span>
                                                <a class="flex" href="lesson.html">Watch Trailer</a>
                                                <span class="text-muted">1m 10s</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion__item open">
                                    <a class="accordion__toggle" data-toggle="collapse" data-parent="#course-toc" href="#course-toc-2">
                                        <span class="flex">Getting Started with Angular</span>
                                        <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                    </a>
                                    <div class="accordion__menu">
                                        <ul class="list-unstyled collapse show" id="course-toc-2">
                                            <li class="accordion__menu-link">
                                                <span class="material-icons icon-16pt icon--left text-muted">lock</span>
                                                <a class="flex" href="lesson.html">Introduction</a>
                                                <span class="text-muted">8m 42s</span>
                                            </li>
                                            <li class="accordion__menu-link">
                                                <span class="material-icons icon-16pt icon--left text-muted">lock</span>
                                                <a class="flex" href="lesson.html">Introduction to TypeScript</a>
                                                <span class="text-muted">50m 13s</span>
                                            </li>
                                            <li class="accordion__menu-link">
                                                <span class="material-icons icon-16pt icon--left text-muted">lock</span>
                                                <a class="flex" href="lesson.html">Comparing Angular to AngularJS</a>
                                                <span class="text-muted">12m 10s</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion__item">
                                    <a class="accordion__toggle" data-toggle="collapse" data-parent="#course-toc" href="#course-toc-3">
                                        <span class="flex">Creating and Communicating Between Angular Components</span>
                                        <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                    </a>
                                    <div class="accordion__menu">
                                        <ul class="list-unstyled collapse" id="course-toc-3">
                                            <li class="accordion__menu-link">
                                                <span class="material-icons icon-16pt icon--left text-muted">lock</span>
                                                <a class="flex" href="lesson.html">Angular Components</a>
                                                <span class="text-muted">04:23</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion__item">
                                    <a class="accordion__toggle" data-toggle="collapse" data-parent="#course-toc" href="#course-toc-4">
                                        <span class="flex">Exploring the Angular Template Syntax</span>
                                        <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                    </a>
                                    <div class="accordion__menu">
                                        <ul class="list-unstyled collapse" id="course-toc-4">
                                            <li class="accordion__menu-link">
                                                <span class="material-icons icon-16pt icon--left text-muted">lock</span>
                                                <a class="flex" href="lesson.html">Template Syntax</a>
                                                <span class="text-muted">04:23</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include 'footer.php';?>