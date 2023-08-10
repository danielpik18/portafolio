<div class="wrapper">
        <div class="contentBox">
            <?php if($currentPage == 'about-me' || $currentPage == ''): ?>
            
            <?php include '../src/pages/about-me/about-me.php' ?>

            <?php elseif($currentPage == 'projects'): ?>
            
            <?php include '../src/pages/projects/projects.php' ?>

            <?php elseif($currentPage == 'contact'): ?>
            
            <?php include '../src/pages/contact/contact.php' ?>

            <?php endif; ?>
        </div>

        <div class="menu">
            <ul>
                <li><a href="?page=about-me">About me</a></li>
                <li><a href="?page=projects">Projects</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>
    </div>