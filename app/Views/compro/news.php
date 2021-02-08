<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        NewsLayout
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <form action="<?= base_url('News'); ?>">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Post</button>
        </form>
    </div>
</div>
<div class="intro-y grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Blog Layout -->
    <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
        <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
            <div class="w-10 h-10 flex-none image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-8.jpg">
            </div>
            <div class="ml-3 mr-auto">
                <a href="#" class="font-medium">Johnny Depp</a>
                <div class="flex text-gray-600 truncate text-xs mt-0.5"> <a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="#">Photography</a> <span class="mx-1">•</span> 11 seconds ago </div>
            </div>
            <div class="dropdown ml-3">
                <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-600 dark:text-gray-300"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                <div class="dropdown-box w-40">
                    <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="h-40 xxl:h-56 image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="/assets/dist/images/preview-1.jpg">
            </div>
            <a href="#" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a>
            <div class="text-gray-700 dark:text-gray-600 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
        </div>

        <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
            <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                <div class="mr-2"> Comments: <span class="font-medium">155</span> </div>
                <div class="mr-2"> Views: <span class="font-medium">90k</span> </div>
                <div class="ml-auto"> Likes: <span class="font-medium">39k</span> </div>
            </div>
            <div class="w-full flex items-center mt-3">
                <div class="w-8 h-8 flex-none image-fit mr-3">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-8.jpg">
                </div>
                <div class="flex-1 relative text-gray-700">
                    <input type="text" class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Post a comment...">
                    <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
        <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
            <div class="w-10 h-10 flex-none image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-14.jpg">
            </div>
            <div class="ml-3 mr-auto">
                <a href="#" class="font-medium">Angelina Jolie</a>
                <div class="flex text-gray-600 truncate text-xs mt-0.5"> <a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="#">Electronic</a> <span class="mx-1">•</span> 47 seconds ago </div>
            </div>
            <div class="dropdown ml-3">
                <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-600 dark:text-gray-300"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                <div class="dropdown-box w-40">
                    <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="h-40 xxl:h-56 image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="/assets/dist/images/preview-4.jpg">
            </div>
            <a href="#" class="block font-medium text-base mt-5">Dummy text of the printing and typesetting industry</a>
            <div class="text-gray-700 dark:text-gray-600 mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
        </div>

        <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
            <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                <div class="mr-2"> Comments: <span class="font-medium">31</span> </div>
                <div class="mr-2"> Views: <span class="font-medium">36k</span> </div>
                <div class="ml-auto"> Likes: <span class="font-medium">51k</span> </div>
            </div>
            <div class="w-full flex items-center mt-3">
                <div class="w-8 h-8 flex-none image-fit mr-3">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-14.jpg">
                </div>
                <div class="flex-1 relative text-gray-700">
                    <input type="text" class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Post a comment...">
                    <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
        <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
            <div class="w-10 h-10 flex-none image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-14.jpg">
            </div>
            <div class="ml-3 mr-auto">
                <a href="#" class="font-medium">Denzel Washington</a>
                <div class="flex text-gray-600 truncate text-xs mt-0.5"> <a class="text-theme-1 dark:text-theme-10 inline-block truncate" href="#">Sport &amp; Outdoor</a> <span class="mx-1">•</span> 46 seconds ago </div>
            </div>
            <div class="dropdown ml-3">
                <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-600 dark:text-gray-300"> <i data-feather="more-vertical" class="w-4 h-4"></i> </a>
                <div class="dropdown-box w-40">
                    <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5">
            <div class="h-40 xxl:h-56 image-fit">
                <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="/assets/dist/images/preview-12.jpg">
            </div>
            <a href="#" class="block font-medium text-base mt-5">Desktop publishing software like Aldus PageMaker</a>
            <div class="text-gray-700 dark:text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
        </div>

        <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
            <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                <div class="mr-2"> Comments: <span class="font-medium">20</span> </div>
                <div class="mr-2"> Views: <span class="font-medium">189k</span> </div>
                <div class="ml-auto"> Likes: <span class="font-medium">87k</span> </div>
            </div>
            <div class="w-full flex items-center mt-3">
                <div class="w-8 h-8 flex-none image-fit mr-3">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/assets/dist/images/profile-14.jpg">
                </div>
                <div class="flex-1 relative text-gray-700">
                    <input type="text" class="input w-full rounded-full bg-gray-200 pr-10 placeholder-theme-13" placeholder="Post a comment...">
                    <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Pagination -->
</div>