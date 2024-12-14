<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - <?php echo e(config('app.name', 'Laravel')); ?> - Tailwind Admin Dashboard Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/vendors/tippy.css">
        <link rel="stylesheet" href="dist/css/vendors/litepicker.css">
        <link rel="stylesheet" href="dist/css/vendors/tiny-slider.css">
        <link rel="stylesheet" href="dist/css/themes/rubick/side-nav.css">
        <link rel="stylesheet" href="dist/css/vendors/leaflet.css">
        <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
        <link rel="stylesheet" href="dist/css/components/mobile-menu.css">
        <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <div>
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                        <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                    </a>
                    <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                        <div class="flex flex-col">
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Themes</div>
                                <div class="mt-0.5 text-slate-500">Choose your theme</div>
                                <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                    <div>
                                        <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/rubick.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            rubick
                                        </div>
                                    </div>
                                    <div>
                                        <a href="icewall-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/icewall.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            icewall
                                        </div>
                                    </div>
                                    <div>
                                        <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/tinker.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            tinker
                                        </div>
                                    </div>
                                    <div>
                                        <a href="enigma-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                                <img class="w-full h-full" src="dist/images/themes/enigma.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            enigma
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Layouts</div>
                                <div class="mt-0.5 text-slate-500">Choose your layout</div>
                                <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                                    <div>
                                        <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/side-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            side menu
                                        </div>
                                    </div>
                                    <div>
                                        <a href="rubick-simple-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/simple-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            simple menu
                                        </div>
                                    </div>
                                    <div>
                                        <a href="rubick-top-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                            <div class="w-full h-full overflow-hidden rounded-md">
                                                <img class="w-full h-full" src="dist/images/layouts/top-menu.png" alt="Midone - Admin Dashboard Template">
                                            </div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            top menu
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Accent Colors</div>
                                <div class="mt-0.5 text-slate-500">
                                    Choose your accent color
                                </div>
                                <div class="mt-5 grid grid-cols-2 gap-3.5">
                                    <div>
                                        <a data-theme-color="default" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 default"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 default"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-1" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-1"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-1"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-2" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-2"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-2"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-3" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-3"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-3"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a data-theme-color="theme-4" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md">
                                                <div class="flex items-center h-full gap-1 -mx-2">
                                                    <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-4"></div>
                                                    <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-4"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-dashed"></div>
                            <div class="px-8 pt-6 pb-8">
                                <div class="text-base font-medium">Appearance</div>
                                <div class="mt-0.5 text-slate-500">
                                    Choose your appearance
                                </div>
                                <div class="mt-5 grid grid-cols-2 gap-3.5">
                                    <div>
                                        <a data-appearance-mode="light" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            Light
                                        </div>
                                    </div>
                                    <div>
                                        <a data-appearance-mode="dark" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                            <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                        </a>
                                        <div class="mt-2.5 text-center text-xs capitalize">
                                            Dark
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 right-0 z-50 flex items-center justify-center mb-5 mr-5 text-white rounded-full shadow-lg cursor-pointer h-14 w-14 bg-theme-1" data-tw-toggle="modal" data-tw-target="#theme-switcher">
                <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 w-5 h-5 animate-spin"></i>
            </div>
        </div>
        <div class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
            <!-- BEGIN: Mobile Menu -->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.mobile-menu', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-919487734-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!-- END: Mobile Menu -->
            <div class="mt-[4.7rem] flex md:mt-0">
                <!-- BEGIN: Side Menu -->
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.sidebar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-919487734-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                    <!-- BEGIN: Top Bar -->
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.topbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-919487734-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <!-- END: Top Bar -->
                    <div class="grid grid-cols-12 gap-6">
                        <?php echo e($slot); ?>

                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: Vendor JS Assets-->
        <script src="dist/js/vendors/dom.js"></script>
        <script src="dist/js/vendors/tailwind-merge.js"></script>
        <script src="dist/js/vendors/lucide.js"></script>
        <script src="dist/js/vendors/tippy.js"></script>
        <script src="dist/js/vendors/dayjs.js"></script>
        <script src="dist/js/vendors/litepicker.js"></script>
        <script src="dist/js/vendors/popper.js"></script>
        <script src="dist/js/vendors/dropdown.js"></script>
        <script src="dist/js/vendors/tiny-slider.js"></script>
        <script src="dist/js/vendors/transition.js"></script>
        <script src="dist/js/vendors/chartjs.js"></script>
        <script src="dist/js/vendors/leaflet-map.js"></script>
        <script src="dist/js/vendors/axios.js"></script>
        <script src="dist/js/utils/colors.js"></script>
        <script src="dist/js/utils/helper.js"></script>
        <script src="dist/js/vendors/simplebar.js"></script>
        <script src="dist/js/vendors/modal.js"></script>
        <script src="dist/js/components/base/theme-color.js"></script>
        <script src="dist/js/components/base/lucide.js"></script>
        <script src="dist/js/components/base/tippy.js"></script>
        <script src="dist/js/components/base/litepicker.js"></script>
        <script src="dist/js/components/report-line-chart.js"></script>
        <script src="dist/js/components/report-pie-chart.js"></script>
        <script src="dist/js/components/report-donut-chart.js"></script>
        <script src="dist/js/components/report-donut-chart-1.js"></script>
        <script src="dist/js/components/simple-line-chart-1.js"></script>
        <script src="dist/js/components/base/tiny-slider.js"></script>
        <script src="dist/js/themes/rubick.js"></script>
        <script src="dist/js/components/base/leaflet-map-loader.js"></script>
        <script src="dist/js/components/mobile-menu.js"></script>
        <script src="dist/js/components/themes/rubick/top-bar.js"></script> <!-- END: Vendor JS Assets-->
        <!-- BEGIN: Pages, layouts, components JS Assets-->
        <!-- END: Pages, layouts, components JS Assets-->
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\label\resources\views/layouts/app.blade.php ENDPATH**/ ?>