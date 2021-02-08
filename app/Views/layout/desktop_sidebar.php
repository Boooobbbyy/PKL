<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="#" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="/assets/dist/images/logo.svg" />
            <span class="hidden xl:block text-white text-lg ml-3">
                Mid<span class="font-medium">one</span>
            </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="index.html" class="side-menu <?php if ($slug == "dashboard") echo "side-menu--active"; ?>">
                    <div class="side-menu__icon"><i data-feather="monitor"></i></div>
                    <div class="side-menu__title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="index.html" class="side-menu <?php if ($slug == "pegawai") echo "side-menu--active"; ?>">
                    <div class="side-menu__icon"><i data-feather="users"></i></div>
                    <div class="side-menu__title">Data Pegawai</div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="index.html" class="side-menu <?php if ($slug == "home") echo "side-menu--active"; ?>">
                    <div class="side-menu__icon"><i data-feather="home"></i></div>
                    <div class="side-menu__title">Home</div>
                </a>
            </li>
            <li>
                <a href="index.html" class="side-menu <?php if ($slug == "about") echo "side-menu--active"; ?>">
                    <div class="side-menu__icon"><i data-feather="help-circle"></i></div>
                    <div class="side-menu__title">About</div>
                </a>
            </li>
            <li>
                <a href="index.html" class="side-menu <?php if ($slug == "news") echo "side-menu--active"; ?>">
                    <div class="side-menu__icon"><i data-feather="mail"></i></div>
                    <div class="side-menu__title">News</div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="<?= base_url(); ?>" class="side-menu side-menu">
                    <div class="side-menu__icon"><i data-feather="globe"></i></div>
                    <div class="side-menu__title">Visit Site</div>
                </a>
            </li>
        </ul>
    </nav>