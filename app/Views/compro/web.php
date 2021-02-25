<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add New Slider
    </h2>
</div>

<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Post Content -->
    <div class="intro-y col-span-12 lg:col-span-8">

        <form method="post" action="<?= base_url('web/update/1'); ?>" enctype="multipart/form-data">

            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Nama PT </div>
            <input type="text" name="judul" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" value="<?= $web['nama_pt']; ?>">

            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <div class="tab-content__pane p-5 active" id="content">

                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Profile PT </div>
                            <div class="mt-5">
                                <div class="mt-2">
                                    <textarea data-simple-toolbar="true" class="editor" id="editor" name="editor"><?= $web['profile_pt']; ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Logo PT </div>
                            <div class="mt-5">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="file" name="foto" class="form-control" value="<?= $web['logo_pt']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> No. Telp </div>
                            <input type="text" name="no_telp" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" value="<?= $web['no_telp']; ?>">
                        </div>

                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Email </div>
                            <input type="text" name="email" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" value="<?= $web['email']; ?>">
                        </div>

                        <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Tempat </div>
                            <input type="text" name="tempat" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" value="<?= $web['tempat']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="button mt-5">
                <button type="submit" class="button text-white bg-theme-1 shadow-md mr-2">Update</button>
            </div>
        </form>
    </div>
</div>