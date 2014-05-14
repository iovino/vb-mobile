<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
    <link rel="shortcut icon" href="./assets/ico/favicon.ico">

    <?php include 'partials/headinclude.php'; ?>

    <title>vBulletin Mobile</title>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/navbar.php'; ?>

    <!-- search -->
    <div id="search">
        <form action="">
            <input class="search-box" type="text" name="" value="" placeholder="Search The Forums" />
        </form>
    </div>
    <!-- /search -->

    <!-- forumbits -->
    <div id="forums-list">
        <?php for($p = 0; $p < 3; $p++) : ?>
            <!-- parent forum -->
            <div class="box-container">
                <div class="box-head">Contractor Talk Forums</div>
                <div class="box-body">
                    <?php for($i = 0; $i < 3; $i++) : ?>
                        <!-- child-forum -->
                        <div class="forum-bit status-new">
                            <div class="forum-bit-wrap">
                                <a href="forumdisplay.php">
                                    <div class="info">
                                        <div class="forum-title">General Discussion</div>
                                        <div class="forum-summary">Discuss general topics that apply to all trades here. Please do not use this forum for Off Topic discussions.</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /child-forum -->
                    <?php endfor ?>
                </div>
            </div>
            <!-- parent forum -->
        <?php endfor ?>
    </div>
    <!-- /forumbits -->

    <!-- forum status keys -->
    <div id="forums-status">
        <div class="forum-status-new text-center">
            <div>Forum Contains New Posts</div>
            <div class="status-new-border"></div>
        </div>
        <div class="forum-status-old text-center">
            <div>Forum Contains Old Posts</div>
            <div class="status-old-border"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- forum status keys -->

    <!-- who's online -->
    <div class="box-container" id="whos-online">
        <div class="box-head">
            What's Going On?
        </div>
        <div class="box-body">
            <p class="active-text">Currently Active Users: 8711 (279 members and 8432 guests)</p>
            <p class="stats-text">Threads: 141,565, Posts: 1,994,879, Members: 103,468</p>
            <p class="stats-text">Welcome to our newest member, <a href="">spmarketing</a></p>
        </div>
    </div>
    <!-- /who's online -->

    <?php include 'partials/footer.php'; ?>
</body>
</html>
