<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex">
            <a href="<?= base_url('Admin'); ?>" class="">Application</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="<?= base_url('Admin') . '/' . $slug; ?>" class="breadcrumb--active"><?= ucfirst($slug); ?></a>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-auto sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer">
                <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
            </div>
            <div class="notification-content pt-2 dropdown-box">
                <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-10.jpg" />
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Bruce Willis</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">
                                    06:05 AM
                                </div>
                            </div>
                            <div class="w-full truncate text-gray-600 mt-0.5">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the
                                industry&#039;s standard dummy text ever since the 1500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                <img alt="Midone Tailwind HTML Admin Template" src="/assets/dist/images/profile-12.jpg" />
            </div>
            <div class="dropdown-box w-56">
                <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                        <div class="font-medium">Bruce Willis</div>
                        <div class="text-xs text-theme-41 mt-0.5 dark:text-gray-600">
                            Frontend Engineer
                        </div>
                    </div>
                    <div class="p-2">
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
                        </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account
                        </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset
                            Password
                        </a>
                    </div>
                    <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                        <a href="<?= base_url('Logout'); ?>" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>