<div>
     <!-- END: Top Bar -->
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 flex flex-col-reverse lg:col-span-4 lg:block 2xl:col-span-3">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="image-fit h-12 w-12">
                        <img class="rounded-full" src="dist/images/fakers/profile-13.jpg" alt="Midone - Tailwind Admin Dashboard Template">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium">
                            <?php echo e($user->name); ?>

                        </div>
                        <div class="text-slate-500"><?php echo e($user->type); ?></div>
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer block h-5 w-5" tag="a"><i data-tw-merge="" data-lucide="more-horizontal" class="stroke-1.5 w-5 h-5 text-slate-500"></i>
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-56">
                                <div class="p-2 font-medium">
                                    Export Options
                                </div>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                </div>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="activity" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    English</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="box" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Indonesia
                                    <div class="ml-auto rounded-full bg-danger px-1 text-xs text-white">
                                        10
                                    </div>
                                </a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="layout" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    English</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Indonesia</a>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                </div>
                                <div class="flex p-1">
                                    <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary px-2 py-1">Settings</button>
                                    <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 ml-auto px-2 py-1">View Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a wire:click.prevent="changeTab('basicInfo')" class="flex items-center font-medium text-primary" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Basic
                        Information
                    </a>
                    <a wire:click.prevent="changeTab('addressDetails')" class="mt-5 flex items-center" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="box" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Addresses 
                        Management
                    </a>
                    <a class="mt-5 flex items-center" wire:click.prevent="changeTab('passwordUpdate')" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Change Password
                    </a>
                    <a class="mt-5 flex items-center" wire:click.prevent="changeTab('availabilities')" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        User
                        Availabilities
                    </a>
                </div>
                <div class="border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <a class="flex items-center" wire:click.prevent="changeTab('qualifications')" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        User
                        Qualifications
                    </a>
                    <a class="mt-5 flex items-center" wire:click.prevent="changeTab('preferences')" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="box" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Settings &
                        Preferences
                    </a>
                    <a class="mt-5 flex items-center" href="">
                        <i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Social Networks
                    </a>
                    <a wire:click.prevent="changeTab('deleteAccount')" class="mt-5 flex items-center" href="javascript:void(0)">
                        <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Delete Account
                    </a>
                </div>
                <div class="flex border-t border-slate-200/60 p-5 dark:border-darkmode-400">
                    <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary px-2 py-1">New Group</button>
                    <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Display Information
                    </h2>
                </div>
                <div class="p-5">
                    <div>
                        <!--[if BLOCK]><![endif]--><?php if($tab === 'basicInfo'): ?>
                        <div class="flex flex-col xl:flex-row">
                            <div class="mt-6 flex-1 xl:mt-0">
                                <div class="">
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.basic-information');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                </div>
                                
                            </div>
                            <div class="mx-auto w-52 xl:ml-6 xl:mr-0">
                                <div class="rounded-md border-2 border-dashed border-slate-200/60 p-5 shadow-sm dark:border-darkmode-400">
                                    <div class="image-fit zoom-in relative mx-auto h-40 cursor-pointer">
                                        <img class="rounded-md" src="<?php echo e($user->avatar() ?? "dist/images/fakers/profile-13.jpg"); ?>" alt="Midone - Tailwind Admin Dashboard Template">
                                        <div data-placement="top" title="Remove this profile photo?" class="tooltip cursor-pointer absolute right-0 top-0 -mr-2 -mt-2 flex h-5 w-5 items-center justify-center rounded-full bg-danger text-white"><i data-tw-merge="" data-lucide="x" class="stroke-1.5 h-4 w-4"></i></div>
                                    </div>
                                    <div class="relative mx-auto mt-5 cursor-pointer">
                                        <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-full">Change Photo</button>
                                        <input data-tw-merge="" wire:model.live="avatar" type="file" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 absolute left-0 top-0 h-full opacity-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php elseif($tab === 'addressDetails'): ?>
                        <a data-tw-merge data-tw-toggle="modal" data-tw-target="#basic-slide-over-preview" href="javascript:void(0)" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">Show Slide Over</a>
                        <br/>
                        <div style="width: 100% !important;">

                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('addresses.address-creation');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                        </div>
                        <?php elseif($tab === 'passwordUpdate'): ?>
                        <div>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.update-password-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                        <?php elseif($tab === 'deleteAccount'): ?>
                        <div>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.delete-user-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                        <?php elseif($tab === 'availabilities'): ?>
                        <div>
                            <div class="mt-3">
                                <label>Availability</label>
                                <div>
                                    <div data-tw-merge class="">
                                        <div class="">
                                            <select id="service" wire:model.live="service" data-tw-merge aria-label=".form-select-lg example" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 text-lg py-1.5 pl-4 pr-8 sm:mr-2 sm:mt-2 sm:mr-2 sm:mt-2">
                                                <option value="">Select</option>
                                                <option value="true">On Service</option>
                                                <option value="false">Off Service</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div>

                                </div>
                            </div>
                            
                        </div>
                        <?php elseif($tab === 'qualifications'): ?>
                        <div>
                            <a data-tw-merge data-tw-toggle="modal" data-tw-target="#qualifications-slide-over-preview" href="javascript:void(0)" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">Show Slide Over</a>
                            <br/>
                            <div style="width: 100% !important;">

                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.qualifications.list-qualifications');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                            </div>
                            
                        </div>
                        <?php elseif($tab === 'preferences'): ?>
                        <div>
                            <div class="mt-3">
                                <div>
                                    <a data-tw-toggle="modal" data-tw-target="#grades-preferences-slide-over-preview" href="javascript:void(0)" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-slate-300 border-secondary bg-opacity-20 text-slate-500 dark:bg-darkmode-100/20 dark:border-darkmode-100/30 dark:text-slate-300 [&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 [&:hover:not(:disabled)]:dark:border-darkmode-100/20 rounded-full mb-2 mr-1 w-24 mb-2 mr-1 w-24">Update</a>
                                </div>
                                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                                    <!--[if BLOCK]><![endif]--><?php if($user->grades && $user->grades->count() > 0): ?>
                                    <table wire:poll.15s data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                                        <thead data-tw-merge="" class="">
                                            <tr data-tw-merge="" class="">
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                    Name
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                                    Levels
                                                </th>
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                    Subjects
                                                </th>
                                                
                                                <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                                    ACTIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $user->grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr data-tw-merge="" class="intro-x">
                                                
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <a class="whitespace-nowrap font-medium" href="">
                                                        <?php echo e($item->name); ?>

                                                    </a>
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $user->levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <span class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"><?php echo e($level->name); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <span class="mr-1 rounded-full bg-warning px-3 py-2 text-white">No Level Selected Yet</span>
                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                </td>
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $user->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <span class="mr-1 rounded-full bg-slate-100 px-1 text-xs text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"><?php echo e($subject->name); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <span class="mr-1 rounded-full bg-warning px-3 py-2 text-white">No Subject Selected Yet</span>
                                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                </td>
                        
                                                <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                                    <div class="flex items-center justify-center">
                                                        
                                                        <a class="flex items-center text-danger" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal" href="#">
                                                            <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </tbody>
                                    </table>
                                    <?php else: ?>
                                    <div role="alert" class="alert relative border rounded-md px-5 py-4 bg-danger border-danger bg-opacity-20 border-opacity-5 text-danger dark:border-danger dark:border-opacity-20 mb-2 flex items-center"><i data-tw-merge data-lucide="alert-octagon" class="stroke-1.5 w-5 h-5 mr-2 h-6 w-6 mr-2 h-6 w-6"></i>
                                        Please Select Some Grades Before You Can Start Using the App <a data-tw-toggle="modal" data-tw-target="#grades-preferences-slide-over-preview" href="javascript:void(0)" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-slate-300 border-secondary bg-opacity-20 text-slate-500 dark:bg-darkmode-100/20 dark:border-darkmode-100/30 dark:text-slate-300 [&:hover:not(:disabled)]:bg-opacity-10 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 [&:hover:not(:disabled)]:dark:border-darkmode-100/20 rounded-full mb-2 mr-1 w-24 mb-2 mr-1 w-24">Update</a>
                                    </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                
                            </div>
                        </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="basic-slide-over-preview" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600    sm:w-[600px] lg:w-[900px]">
                    <div data-tw-merge class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 p-5">
                        <h2 class="mr-auto text-base font-medium">
                            Superlarge Slide Over
                        </h2>
                    </div>
                    <div data-tw-merge class="p-5 overflow-y-auto flex-1">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('addresses.create-address-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                </div>
            </div>
            <!-- END: Slide Over -->
            <!-- Qualifications: Slide Over Start-->
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="qualifications-slide-over-preview" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]">
                    <div data-tw-merge class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 p-5">
                        <h2 class="mr-auto text-base font-medium">
                            Add Your Qualifications
                        </h2>
                    </div>
                    <div data-tw-merge class="p-5 overflow-y-auto flex-1">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.qualifications.create-qualification');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                </div>
            </div>
            <!-- END: Qualifications: Slide Over -->
            <!-- Grades Preferences: Slide Over Start-->
            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="grades-preferences-slide-over-preview" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]">
                    <div data-tw-merge class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 p-5">
                        <h2 class="mr-auto text-base font-medium">
                            Medium Slide Over
                        </h2>
                    </div>
                    <div data-tw-merge class="p-5 overflow-y-auto flex-1">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('profile.preferences.update-grades');

$__html = app('livewire')->mount($__name, $__params, 'lw-3058997723-7', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>
                </div>
            </div>
            <!-- Grades Preferences: Slide Over End-->
            <?php if (isset($component)) { $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.modals','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::modals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $attributes = $__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__attributesOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758)): ?>
<?php $component = $__componentOriginal028e05680f6c5b1e293abd7fbe5f9758; ?>
<?php unset($__componentOriginal028e05680f6c5b1e293abd7fbe5f9758); ?>
<?php endif; ?>
            <!-- END: Personal Information -->
        </div>
    </div>
</div>


<?php /**PATH C:\xampp\htdocs\label\resources\views/livewire/profile-page.blade.php ENDPATH**/ ?>