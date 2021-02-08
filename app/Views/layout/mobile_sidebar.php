<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="#" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="/assets/dist/images/logo.svg" />
        </a>
        <a href="javascript:;" id="mobile-menu-toggler">
            <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
        </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="index.html" class="menu <?php if ($slug == "dashboard") echo "side-menu--active"; ?>">
                <div class="menu__icon"><i data-feather="monitor"></i></div>
                <div class="menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu <?php if ($slug == "pegawai") echo "side-menu--active"; ?>">
                <div class="menu__icon"><i data-feather="users"></i></div>
                <div class="menu__title">
                    Data Pegawai
                </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu <?php if ($slug == "home") echo "side-menu--active"; ?>">
                <div class="menu__icon"><i data-feather="home"></i></div>
                <div class="menu__title">
                    Home
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu <?php if ($slug == "about") echo "side-menu--active"; ?>">
                <div class="menu__icon"><i data-feather="help-circle"></i></div>
                <div class="menu__title">
                    About
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu <?php if ($slug == "news") echo "side-menu--active"; ?>">
                <div class="menu__icon"><i data-feather="mail"></i></div>
                <div class="menu__title">
                    News
                </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="<?= base_url(); ?>" class="menu">
                <div class="menu__icon"><i data-feather="globe"></i></div>
                <div class="menu__title">
                    Visit Site
                </div>
            </a>
        </li>
    </ul>
</div