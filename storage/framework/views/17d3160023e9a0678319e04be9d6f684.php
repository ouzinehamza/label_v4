<nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
    <a class="flex items-center pt-4 pl-5 intro-x" href="">
        <img class="w-6" src="dist/images/logo.svg" alt="Midone - Tailwind Admin Dashboard Template">
        <span class="hidden ml-3 text-lg text-white xl:block"> Rubick </span>
    </a>
    <div class="my-6 side-nav__divider"></div>
    <ul>
        <li>
            <a href="<?php echo e(route('dashboard')); ?>" wire:navigate class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                    <!--<div class="side-menu__sub-icon transform rotate-180">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>-->
                </div>
            </a>
            
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    E-Commerce
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-categories-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Categories
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-add-product-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Add Product
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Products
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-product-list-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Product List
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-product-grid-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Product Grid
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Transactions
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-transaction-list-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Transaction List
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-transaction-detail-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Transaction Detail
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Sellers
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-seller-list-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Seller List
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-seller-detail-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Seller Detail
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="rubick-side-menu-reviews-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Reviews
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="rubick-side-menu-inbox-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Inbox
                </div>
            </a>
        </li>
        <li>
            <a href="rubick-side-menu-file-manager-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    File Manager
                </div>
            </a>
        </li>
        <li>
            <a href="rubick-side-menu-point-of-sale-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Point of Sale
                </div>
            </a>
        </li>
        <li>
            <a href="rubick-side-menu-chat-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="message-square" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Chat
                </div>
            </a>
        </li>
        <li>
            <a href="rubick-side-menu-post-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Post
                </div>
            </a>
        </li>
        <li>
            <a href="rubick-side-menu-calendar-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Calendar
                </div>
            </a>
        </li>
        <li class="my-6 side-nav__divider"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Crud
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-crud-data-list-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Data List
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-crud-form-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Form
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="users" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Users
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-users-layout-1-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Layout 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-users-layout-2-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Layout 2
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-users-layout-3-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Layout 3
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="trello" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Profile
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-profile-overview-1-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-profile-overview-2-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 2
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-profile-overview-3-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 3
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Pages
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Wizards
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-wizard-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wizard-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wizard-layout-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Blog
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-blog-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-blog-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-blog-layout-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Pricing
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-pricing-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-pricing-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Invoice
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-invoice-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-invoice-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            FAQ
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-faq-layout-1-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-faq-layout-2-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-faq-layout-3-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Layout 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="rubick-side-menu-login-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Login
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-register-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Register
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-error-page-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Error Page
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-update-profile-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Update profile
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-change-password-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Change Password
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="my-6 side-nav__divider"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Components
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Grid
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-regular-table-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Regular Table
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-tabulator-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Tabulator
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Overlay
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-modal-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Modal
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-slide-over-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Slide Over
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-notification-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Notification
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="rubick-side-menu-tab-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tab
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-accordion-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Accordion
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-button-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Button
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-alert-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Alert
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-progress-bar-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Progress Bar
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-tooltip-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tooltip
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-dropdown-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Dropdown
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-typography-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Typography
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-icon-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Icon
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-loading-icon-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Loading Icon
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="sidebar" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Forms
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-regular-form-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Regular Form
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-datepicker-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Datepicker
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-tom-select-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tom Select
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-file-upload-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            File Upload
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Wysiwyg Editor
                            <div class="side-menu__sub-icon ">
                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="rubick-side-menu-wysiwyg-editor-classic-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Classic
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wysiwyg-editor-inline-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Inline
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wysiwyg-editor-balloon-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Balloon
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wysiwyg-editor-balloon-block-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Balloon Block
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="rubick-side-menu-wysiwyg-editor-document-page.html" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                                <div class="side-menu__title">
                                    Document
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="rubick-side-menu-validation-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Validation
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Widgets
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="rubick-side-menu-chart-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Chart
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-slider-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Slider
                        </div>
                    </a>
                </li>
                <li>
                    <a href="rubick-side-menu-image-zoom-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Image Zoom
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav><?php /**PATH C:\xampp\htdocs\label\resources\views\livewire/layout/sidebar.blade.php ENDPATH**/ ?>