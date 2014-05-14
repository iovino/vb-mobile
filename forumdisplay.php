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
        <input class="search-box" type="text" name="" value="" placeholder="Search The 'General Discussion' Forums" />
    </form>
</div>
<!-- /search -->

<!-- sub-forumbits -->
<div id="forums-list">
    <?php for($p = 0; $p < 1; $p++) : ?>
        <!-- parent forum -->
        <div class="box-container">
            <div class="box-head">Sub-Forums: General Discussion</div>
            <div class="box-body">
                <?php for($i = 0; $i < 1; $i++) : ?>
                    <!-- child-forum -->
                    <div class="forum-bit status-new">
                        <div class="forum-bit-wrap">
                            <a href="forumdisplay.php">
                                <div class="info">
                                    <div class="forum-title">Lead RRP Discussion</div>
                                    <div class="forum-summary">Discuss the new EPA RRP rules here.</div>
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
<!-- /sub-forumbits -->

<!-- thread listings -->
<div class="box-container" id="threads-list">
    <div class="box-head">
        Threads in Forum : General Discussion
    </div>
    <div class="box-body">
        <?php for($i = 0; $i < 10; $i++) : ?>
        <div class="thread-bit status-new">
            <div class="thread-bit-wrap">
                <a href="showthread.php">
                    <div class="info">
                        <input type="checkbox" value="1" name="test[]" id="thread-1" />
                        <div class="thread-title">
                            <strong>Work LIfe Family Balance Vacation Family QT Enthusiasm Outside interests</strong>
                        </div>
                        <div class="thread-summary">
                            <div class="thread-author">User9654 Today 08:34 PM</div>
                            <div class="thread-stats">Comments: 8,762 | Views: 19,876</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endfor ?>
    </div>
</div>
<!-- /thread listings -->

<!-- pagination -->
<div class="text-center">
    <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>
<!-- /pagination -->

<!-- forum jump -->
<div class="forum-jump text-center">

    <select name="do">
        <optgroup label="Option">
            <option value="deletethread">Delete Threads</option>
            <option value="undeletethread">Undelete Threads</option>
            <option value="spamthread">Delete Threads as Spam</option>
            <option value="open">Open Threads</option>
            <option value="close">Close Threads</option>
            <option value="approvethread">Approve Threads</option>
            <option value="unapprovethread">Unapprove Threads</option>
            <option value="stick">Stick Threads</option>
            <option value="unstick">Unstick Threads</option>
            <option value="movethread">Move Threads</option>
            <option value="mergethread">Merge Threads</option>
        </optgroup>

        <optgroup label="____________________">
            <option value="viewthread">View Selected Threads</option>
            <option value="clearthread">Deselect All Threads</option>
        </optgroup>
    </select>
    <input type="submit" class="button" id="inlinego" value="Go" />

</div>
<!-- /forum jump -->

<!-- navigation menu -->
<nav id="menu-right" class="mmm-current mmm-opened">
    <div class="forumdisplay-menu">
        <ul>
            <li class="icon-messages">
                <a href="../private.php">
                    <span class="notifications">23</span>Private Messages
                </a>
            </li>
            <li class="icon-threads">
                <a href="">Subscribed Threads</a>
            </li>
            <li class="icon-newposts"><a href="">New Posts</a></li>

            <li class="menu-header">Your Profile</li>
            <li class="icon-pencil"><a href="">Edit Your Details</a></li>
            <li class="icon-lock"><a href="">Profile Privacy</a></li>
            <li class="icon-image"><a href="">Edit Profile Picture</a></li>

            <li class="menu-header">Settings &amp; Options</li>
            <li class="icon-image"><a href="">Edit Avatar</a></li>
            <li class="icon-signature"><a href="">Edit Signature</a></li>
            <li class="icon-wrench"><a href="">Edit Email & Password</a></li>
            <li class="icon-gear"><a href="">Edit Options</a></li>
            <li class="icon-ignore"><a href="">Edit Ignore List</a></li>
            <li class="icon-logout"><a href="">Log Out</a></li>

        </ul>
    </div>
</nav>
<!-- /navigation menu -->

<?php include 'partials/footer.php'; ?>

<script type="text/javascript">
    $(function() {
        $('#menu-right').mmenu({
            position	: 'right',
            classes		: 'forumdisplay-menu'
        });
    });
</script>

</body>
</html>
