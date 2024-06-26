@extends('layouts.master')

@section('styles')

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header md:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> File Manager List</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced UI
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        File Manager List
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box !bg-transparent border-0 shadow-none p-0">
                                <div class="md:flex justify-between space-y-2 md:space-y-0">
                                    <div class="relative max-w-xs my-auto">
                                    <label class="sr-only">Search</label>
                                    <input type="text" class="p-3 ltr:pl-10 rtl:pr-10 ti-form-input" placeholder="Search for items">
                                    <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                        <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </div>
                                    </div>
                                    <div class="sm:space-x-3 space-x-0 sm:flex space-y-2 sm:space-y-0 items-center rtl:space-x-reverse">
                                    <button type="button" class="ti-btn ti-btn-primary m-0">Upload New Files</button>
                                    <div class="my-auto">
                                        <nav class="flex sm:justify-center" aria-label="Tabs" role="tablist">
                                        <button aria-label="button" type="button" class="hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mb-px py-2 px-3 inline-flex items-center bg-gray-50 text-sm font-medium text-center border text-gray-500 ltr:rounded-l-sm rtl:rounded-r-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" role="tab">
                                        <i class="ri ri-layout-grid-line"></i>
                                        </button>
                                        <button aria-label="button" type="button" class="hs-tab-active:!bg-primary hs-tab-active:!text-white dark:hs-tab-active:border-b-white/10 -mb-px py-2 px-3 inline-flex items-center bg-gray-50 text-sm font-medium text-center border ltr:border-l-0 rtl:border-r-0 text-gray-500 ltr:rounded-r-sm rtl:rounded-l-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" role="tab">
                                            <i class="ri ri-list-check"></i>
                                        </button>
                                        </nav>
                                    </div>
                                    <div class="hs-dropdown my-auto">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger" type="button" class="hs-dropdown-toggle py-2 px-3 ti-dropdown-toggle rounded-sm dark:hover:bg-black/20">
                                        <i class="ri ri-time-line"></i>
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Date
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Name
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Type
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Size
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Starred
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                        <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/2.png')}}" alt="img">
                                        </a>
                                        <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger1" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger1">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">File.pdf</p><p class="text-gray-500 dark:text-white/70 text-xs">20MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/2.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                    <img class="mx-auto" src="{{asset('build/assets/img/files/6.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger2" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger2">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">Image1.png</p><p class="text-gray-500 dark:text-white/70 text-xs">10MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/2.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/20.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="sm:h-[146px] w-full" src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-5 ltr:left-5 rtl:right-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-5 ltr:right-5 rtl:left-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger3" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger3">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">Hillstation.jpg</p><p class="text-gray-500 dark:text-white/70 text-xs">30MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/5.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger4" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger4">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">My Documents</p><p class="text-gray-500 dark:text-white/70 text-xs">1.5GB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/4.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger5" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger5">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.xls</p><p class="text-gray-500 dark:text-white/70 text-xs">34MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="sm:h-[146px] w-full" src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-5 ltr:left-5 rtl:right-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-5 ltr:right-5 rtl:left-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger6" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger6">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">Nature.jpg</p><p class="text-gray-500 dark:text-white/70 text-xs">10MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="sm:h-[146px] w-full" src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-5 ltr:left-5 rtl:right-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-5 ltr:right-5 rtl:left-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger7" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger7">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">ice.jpg</p><p class="text-gray-500 dark:text-white/70 text-xs">10MB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-2 rtl:space-x-reverse">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/4.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/20.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/7.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger8" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger8">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.ppt</p><p class="text-gray-500 dark:text-white/70 text-xs">10KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/1.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger9" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger9">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.docx</p><p class="text-gray-500 dark:text-white/70 text-xs">30KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/19.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/8.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger10" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger10">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.mp4</p><p class="text-gray-500 dark:text-white/70 text-xs">100KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/3.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger11" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger11">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.jpg</p><p class="text-gray-500 dark:text-white/70 text-xs">1.5KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="sm:h-[146px] w-full" src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-5 ltr:left-5 rtl:right-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-5 ltr:right-5 rtl:left-5 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger12" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger12">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">Study.jpg</p><p class="text-gray-500 dark:text-white/70 text-xs">1.5KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/9.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base"></i></a>
                                    </div>
                                        <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger13" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger13">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project2.docx</p><p class="text-gray-500 dark:text-white/70 text-xs">1.5KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 md:!col-span-4 xxl:!col-span-2">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative mx-auto">
                                    <a href="{{url('file-details')}}">
                                        <img class="mx-auto" src="{{asset('build/assets/img/files/10.png')}}" alt="img">
                                    </a>
                                    <div class=" absolute top-0 ltr:left-0 rtl:right-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <a aria-label="anchor" href="javascript:void(0);"><i class="ri ri-star-line hover:text-warning text-base text-warning"></i></a>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown  absolute top-0 ltr:right-0 rtl:left-0 block text-gray-500 dark:text-white/70 text-xs">
                                        <button aria-label="button" id="hs-dropdown-custom-icon-trigger14" type="button"
                                            class="hs-dropdown-toggle p-0 !bg-transparent border-0 shadow-none focus:ring-0 focus:ring-offset-0  ti-dropdown-toggle">
                                            <svg class="ti-dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu ti-dropdown-menu" aria-labelledby="hs-dropdown-custom-icon-trigger14">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-edit-2-line text-lg"></i>Edit</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-share-line text-lg"></i>share</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-download-2-line text-lg"></i>Download</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-delete-bin-6-line text-lg"></i>Delete</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i class="ri ri-information-line text-lg"></i>Info</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between overflow-hidden">
                                    <div class="space-y-1"><p class="text-sm font-semibold">project.zip</p><p class="text-gray-500 dark:text-white/70 text-xs">1.5KB</p></div>
                                    <div class="my-auto">
                                        <div class="flex -space-x-1">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/8.jpg')}}" alt="Image Description">
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-gray-200" src="{{asset('build/assets/img/users/7.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

@endsection