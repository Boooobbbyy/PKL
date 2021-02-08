<h2 class="intro-y text-lg font-medium mt-10">
    Data List Layout
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Product</button>
        <div class="dropdown">
            <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box w-40">
                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                    <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                    <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </div>
            </div>
        </div>
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
                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                    <th class="text-center whitespace-nowrap">STOCK</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 20 May 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 20 May 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 20 May 2021">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Nikon Z6</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Photography</div>
                    </td>
                    <td class="text-center">110</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-1.jpg" title="Uploaded at 3 January 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-11.jpg" title="Uploaded at 3 January 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-1.jpg" title="Uploaded at 3 January 2021">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Nike Air Max 270</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                    </td>
                    <td class="text-center">179</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-9.jpg" title="Uploaded at 26 August 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-6.jpg" title="Uploaded at 26 August 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-14.jpg" title="Uploaded at 26 August 2020">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Nikon Z6</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Photography</div>
                    </td>
                    <td class="text-center">105</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 19 December 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-5.jpg" title="Uploaded at 19 December 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-7.jpg" title="Uploaded at 19 December 2020">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                    </td>
                    <td class="text-center">60</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 23 May 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-5.jpg" title="Uploaded at 23 May 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-1.jpg" title="Uploaded at 23 May 2021">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                    </td>
                    <td class="text-center">141</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-3.jpg" title="Uploaded at 27 July 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-3.jpg" title="Uploaded at 27 July 2020">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 27 July 2020">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Apple MacBook Pro 13</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                    </td>
                    <td class="text-center">119</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-3.jpg" title="Uploaded at 14 September 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-1.jpg" title="Uploaded at 14 September 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-10.jpg" title="Uploaded at 14 September 2021">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                    </td>
                    <td class="text-center">178</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-9.jpg" title="Uploaded at 15 December 2022">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-14.jpg" title="Uploaded at 15 December 2022">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-14.jpg" title="Uploaded at 15 December 2022">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Nike Air Max 270</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                    </td>
                    <td class="text-center">164</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-3.jpg" title="Uploaded at 26 June 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-9.jpg" title="Uploaded at 26 June 2021">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full" src="/assets/dist/images/preview-8.jpg" title="Uploaded at 26 June 2021">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                    </td>
                    <td class="text-center">64</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
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
<!-- BEGIN: Delete Confirmation Modal -->
<div class="modal" id="delete-confirmation-modal">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
        </div>
        <div class="px-5 pb-8 text-center">
            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
            <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->