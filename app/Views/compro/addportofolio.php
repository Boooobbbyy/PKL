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
                    <form data-single="true" action="http://midone.left4code.com/file-upload" class="dropzone">
                        <div class=" border-gray-200 border-dashed">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="button text-white bg-theme-1 shadow-md mr-2">Upload New Files</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Single File Upload -->
    </div>
</div>