<div class="navbar">
    <ul>
        <li>
            <a href="?page=about-me" class="<?= $currentPage == 'about-me' ? 'activeNavbarLink' : ''; ?>">
                <img style="width: 30px; height: 30px;" src="../src/components/navbar/img/home.svg" alt="">
                About me
            </a>
        </li>
        <li>
            <a href="?page=projects" class="<?= $currentPage == 'projects' ? 'activeNavbarLink' : ''; ?>">
                <img style="width: 30px; height: 30px;" src="../src/components/navbar/img/projects.svg" alt="">
                Projects
            </a>
        </li>
        <li>
            <a href="?page=contact" class="<?= $currentPage == 'contact' ? 'activeNavbarLink' : ''; ?>">
                <img style="width: 30px; height: 30px;" src="../src/components/navbar/img/contact.svg" alt="">
                Contact
            </a>
        </li>
    </ul>
</div>