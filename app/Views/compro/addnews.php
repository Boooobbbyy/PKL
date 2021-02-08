<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add New Post
    </h2>

</div>
<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Post Content -->
    <div class="intro-y col-span-12 lg:col-span-8">
        <form action="">
            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Judul Berita </div>
            <input type="text" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Judul Berita">
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <div class="tab-content__pane p-5 active" id="content">
                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Deskripsi Berita </div>
                            <div class="mt-5">
                                <div class="editor" name="editor">
                                    <p>Deskripsi Berita...</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Upload Images </div>
                            <div class="mt-5">

                                <div class="mt-3">
                                    <label>Upload Image</label>
                                    <div class="border-2 border-dashed dark:border-dark-5 rounded-md mt-3 pt-4">

                                        <form data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                            <div class="fallback"> <input name="file" type="file" /> </div>
                                            <div class="dz-message" data-dz-message>
                                            </div>
                                        </form>
                                    </div>
                                    <button class="dropdown-toggle button text-white bg-theme-1 shadow-md flex items-center"> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>