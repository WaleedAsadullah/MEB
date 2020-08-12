 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="assets/images/users/logo.jpg" alt="The Brainic School" title="The Brainic School" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#"> <?php echo $_SESSION['name'] ?></a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="logout.php" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li class="active">
                    <a href="Teacher-mod-video-leacture.php" class="waves-effect"><i class="fa fa-video-camera"></i> <span>  Video Lecture </span> </a>
                </li>

                
                 <li>
                    <a href="Teacher-mod-homework.php" class="waves-effect"><i class="fa fa-book"></i> <span> Homework
                     </span> </a>
                </li>

                <li>
                    <a href="Teacher-mod-report-card.php" class="waves-effect"><i class="fa fa-vcard"></i> <span> Report Card </span> </a>
                </li>

                <li>
                    <a href="Teacher-mod-gradebook.php" class="waves-effect"><i class="zmdi zmdi-account-box-mail"></i> <span> Gradebook </span> </a>
                </li>

                <li>
                    <a href="Teacher-mod-blog.php" class="waves-effect"><i class="zmdi zmdi-blogger"></i> <span> Blog </span> </a>
                </li>
                <li>
                    <a href="Teacher-mod-announcement.php" class="waves-effect"><i class="fa fa-comment"></i> <span> Announcement
                     </span> </a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
 