<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add Videos Layout
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">

    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Form Layout -->
        <form action="<?= base_url('videos/save'); ?>" method="POST">
            <div class="intro-y box p-5">
                <div>

                    <label>Title</label>
                    <input name="judul" type="text" class="input w-full rounded-full border mt-2" placeholder="Input title">
                </div>
                <div>
                    <label>Link Videos</label>
                    <input name="link" type="text" class="input w-full rounded-full border mt-2" placeholder="Input link videos">
                </div>
                <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <textarea data-simple-toolbar="true" class="editor" id="editor" name="editor"></textarea>
                    </div>
                </div>
                <div class="text-right mt-5">
                    <a href="<?= base_url('Admin/Videos'); ?>" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancel</a>
                    <button type="submit" id="save" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>