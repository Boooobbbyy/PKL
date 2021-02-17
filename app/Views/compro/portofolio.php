<div class="mx-6 mt-5">
    <div class="center-mode">
        <?php foreach ($portofolio as $p) : ?>
            <div class="h-48 px-2">
                <div class="h-full bg-gray-200 dark:bg-dark-1 rounded-md">
                    <div class="h-full image-fit rounded-md overflow-hidden"> <img alt="<?= $p['foto']; ?>" src="/uploads/porto/<?= $p['foto']; ?>" /> </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="<?= base_url('Portofolio'); ?>" class="button text-white bg-theme-1 shadow-md mr-2">Add New Portofolio</a>
        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">IMAGES</th>
                    <th class="whitespace-nowrap">NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($portofolio as $p) : ?>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-24 h-24 relative image-fit cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="<?= $p['foto']; ?>" src="/uploads/porto/<?= $p['foto']; ?>">
                                </div>
                            </div>
                        </td>
                        <td class="w-1">
                            <a class="font-medium whitespace-nowrap"><?= $p['foto']; ?></a>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="<?= base_url('Portofolio/edit') . '/' . $p['id']; ?>"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal<?= $p['id']; ?>"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="#">...</a> </li>
            <li> <a class="pagination__link" href="#">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="#">2</a> </li>
            <li> <a class="pagination__link" href="#">3</a> </li>
            <li> <a class="pagination__link" href="#">...</a> </li>
            <li>
                <a class="pagination__link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>
<?php foreach ($portofolio as $p) : ?>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div class="modal" id="delete-confirmation-modal<?= $p['id']; ?>">
        <div class="modal__content">
            <div class="p-5 text-center">
                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                <div class="text-3xl mt-5">Are you sure?</div>
                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
            </div>
            <div class="px-5 pb-8 text-center">
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                <a href="<?= base_url('Portofolio/delete') . '/' . $p['id']; ?>" type="button" class="button w-24 bg-theme-6 text-white">Delete</a>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
<?php endforeach; ?>