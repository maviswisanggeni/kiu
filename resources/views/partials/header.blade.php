<header id="main-header">
    <div class="logo">
        <a href="/">
            <img src="{{ Storage::url($site_logo) }}" alt="Logo">
        </a>
    </div>
    <div class="menu-container">
        <div class="menu" data-section="about">
            <a href="#about">About</a>
            <div class="rectangle"></div>
        </div>
        <div class="menu" data-section="work">
            <a href="#work">Work</a>
            <div class="rectangle"></div>
        </div>
        <div class="menu" data-section="departments">
            <a href="#departments">Departments</a>
            <div class="rectangle"></div>
        </div>
        <div class="menu" data-section="contact">
            <a href="#contact">Contact</a>
            <div class="rectangle"></div>
        </div>
    </div>

    <img src="{{ asset('assets/icons/hamburger-menu-dark.svg') }}" alt="" class="hamburger-menu">
    <img src="{{ asset('assets/icons/close-dark.svg') }}" alt="" class="close-menu">
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const closeMenu = document.querySelector('.close-menu');
        const menuContainer = document.querySelector('.menu-container');
        const menuItems = document.querySelectorAll('.menu');

        function hideMenu() {
            hamburgerMenu.style.display = 'block';
            closeMenu.style.display = 'none';
            menuContainer.style.display = 'none';
        }

        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                if (window.innerWidth < 768) {
                    hideMenu();
                }
                window.location.href = `/#${menuItem.dataset.section}`;
            });
        });

        hamburgerMenu.addEventListener('click', function () {
            hamburgerMenu.style.display = 'none';
            closeMenu.style.display = 'block';
            menuContainer.style.display = 'flex';
        });

        closeMenu.addEventListener('click', function () {
            hideMenu();
        });
    });
</script>

