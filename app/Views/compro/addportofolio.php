<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Upload Portofolio
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Single File Upload -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base mr-auto">
                    File Upload
                </h2>
            </div>
            <div class="p-5" id="single-file-upload">
                <div class="preview">
                    <?php if (isset($portofolio)) : ?>
                        <form method="post" action="<?= base_url('Portofolio/update') . '/' . $portofolio['id']; ?>" enctype="multipart/form-data">
                        <?php else : ?>
                            <form method="post" action="<?= base_url('Portofolio/save'); ?>" enctype="multipart/form-data">
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" name="porto" class="form-control">
                                </div>
                            </div>

                            <div class="button mt-5">
                                <button type="submit" class="button text-white bg-theme-1 shadow-md mr-2">Upload New Files</button>
                            </div>
                            </form> </br></br></br>
                </div>
            </div>
        </div>
        <!-- END: Single File Upload -->
    </div>
</div>