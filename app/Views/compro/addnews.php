<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <?php if (isset($news)) : ?>
            Edit Post
        <?php else : ?>
            Add New Post
        <?php endif; ?>
    </h2>
</div>

<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Post Content -->
    <div class="intro-y col-span-12 lg:col-span-8">
        <?php if (isset($news)) : ?>
            <form method="post" action="<?= base_url('News/update') . '/' . $news['id']; ?>" enctype="multipart/form-data">
            <?php else : ?>
                <form method="post" action="<?= base_url('News/save'); ?>" enctype="multipart/form-data">
                <?php endif; ?>
                <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Judul Berita </div>
                <input type="text" name="judul" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Judul Berita" <?php if (isset($news)) echo 'value="' . $news['judul'] . '"'; ?>>
                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__content tab-content">
                        <div class="tab-content__pane p-5 active" id="content">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Deskripsi Berita </div>
                                <div class="mt-5">
                                    <div class="mt-2">
                                        <textarea data-simple-toolbar="true" class="editor" id="editor" name="editor"><?php if (isset($news)) echo $news['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Upload Images </div>
                                <div class="mt-5">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="file" name="foto" class="form-control" <?php if (isset($news)) echo 'value="' . $news['foto'] . '"'; ?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button mt-5">
                    <?php if (isset($news)) : ?>
                        <button type="submit" class="button text-white bg-theme-1 shadow-md mr-2">Edit Post</button>
                    <?php else : ?>
                        <button type="submit" class="button text-white bg-theme-1 shadow-md mr-2">Publish</button>
                    <?php endif; ?>
                </div>
                </form>
    </div>
</div>