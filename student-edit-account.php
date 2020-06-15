<?php include 'header.php';?>
    <?php include 'top-nav.php';?>

    <?php include 'header-layout.php';?>

    <div class="container page__container">
        <form action="student-edit-account.html">
            <div class="row">
                <div class="col-lg-9">

                    <div class="page-section">
                        <h4>Basic Information</h4>
                        <div class="list-group list-group-form">
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="Alexander" placeholder="Your first name ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="Watson" placeholder="Your last name ...">
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Email address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ...">
                                        <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 page-nav">
                    <div class="page-section pt-lg-112pt">
                        <nav class="nav page-nav__menu">
                            <a class="nav-link active" href="student-edit-account.html">Basic Information</a>
                            <a class="nav-link" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                            <a class="nav-link" href="student-edit-account-notifications.html">Email Notifications</a>
                            <a class="nav-link" href="student-edit-account-password.html">Change Password</a>
                        </nav>
                        <div class="page-nav__content">
                            <button type="submit" class="btn btn-accent">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php include 'footer.php';?>