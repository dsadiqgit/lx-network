<?php
/**
 * Template Name: Account
 */

$user_id = get_current_user_id();
?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/slick.css">
  <!-- prism css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/prism.css">
  <!-- file upload css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/file-upload.css">
  
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/lib/audioplayer.css">
  <!-- main css -->
  <link rel="stylesheet" href="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/css/style.css">
</head>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li class="sidebar-menu-group-title">MAIN MENU</li>
      <li>
        <a href="/account/">
          <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
          <span>Overview</span>
        </a>
      </li>
      <li>
        <a href="/messages/">
          <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
          <span>Chat</span> 
        </a>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
          </li>
          <li>
            <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
          </li>
          <li>
            <a href="notification-alert.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
          </li>
          <li>
            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
          </li>
          <li>
            <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
          </li>
          <li>
            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
          </li>
          <li>
            <a href="payment-gateway.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<main class="dashboard-main">
  <div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-3.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-4.png" alt="">
                  <span class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-5.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-6.png" alt="">
                  <span class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
              </div>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-7.png" alt="">
                  <span class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there i’m...</p>
                </div>
              </div>
              <div class="d-flex flex-column align-items-end"> 
                <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                <span class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
              </div>
            </a>

           </div>
            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Message</a>
            </div>
          </div>
        </div><!-- Message dropdown end -->

        <div class="dropdown">
          <button class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center" type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <div class="dropdown-menu to-top dropdown-menu-lg p-0">
            <div class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
              </div>
              <span class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
            </div>
            
           <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <iconify-icon icon="bitcoin-icons:verify-outline" class="icon text-xxl"></iconify-icon>
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your profile has been Verified. Your profile has been Verified</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-1.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can stitch between artboards</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
            
            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  AM
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/notification/profile-2.png" alt="">
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>

            <a href="javascript:void(0)" class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
              <div class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"> 
                <span class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                  DR
                </span> 
                <div>
                  <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                  <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you to prototyping</p>
                </div>
              </div>
              <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
            </a>
           </div>

            <div class="text-center py-12 px-16"> 
                <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See All Notification</a>
            </div>

          </div>
        </div><!-- Notification dropdown end -->

        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div> 

  <div class="dashboard-main-body">

    <div class="row gy-4">
        <div class="col-12">
            <div class="radius-12">
                <div class="card-body p-16">
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 left-line line-bg-primary position-relative overflow-hidden bg-white">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Total Investment</span>
                                        <h6 class="fw-semibold mb-1"><?php echo get_field('total_investment', 'user_' . $user_id);?></h6>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-primary-100 text-primary-600">
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 80%</span> From last month </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-2 left-line line-bg-lilac position-relative overflow-hidden">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Amount Earned</span>
                                        <h6 class="fw-semibold mb-1">£35,000</h6>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-lilac-200 text-lilac-600">
                                        <i class="ri-handbag-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 95%</span> From last month </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-3 left-line line-bg-success position-relative overflow-hidden">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Days Invested</span>
                                        <h6 class="fw-semibold mb-1"><?php

                                        $start_date = get_field('start_date', 'user_' . $user_id);
                                        // Set the target date
                                        $target_date = DateTime::createFromFormat('d/m/Y', $start_date);

                                        // Get today's date
                                        $today = new DateTime();

                                        // Calculate the difference
                                        $interval = $today->diff($target_date);

                                        // Get the number of days
                                        $days_difference = $interval->days;

                                        // Display the result
                                        echo $days_difference . " Days" ;
                                        ?></h6>
                                        <p><?php echo get_field('start_date', 'user_' . $user_id);?></p>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-success-200 text-success-600">
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-danger-focus px-1 rounded-2 fw-medium text-danger-main text-sm"><i class="ri-arrow-right-down-line"></i> 30%</span> From last month </p>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="px-20 py-16 shadow-none radius-8 h-100 gradient-deep-4 left-line line-bg-warning position-relative overflow-hidden">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
                                    <div>
                                        <span class="mb-2 fw-medium text-secondary-light text-md">Total Expense</span>
                                        <h6 class="fw-semibold mb-1">$7,000</h6>
                                    </div>
                                    <span class="w-44-px h-44-px radius-8 d-inline-flex justify-content-center align-items-center text-2xl mb-12 bg-warning-focus text-warning-600">
                                        <i class="ri-shopping-cart-fill"></i>
                                    </span>
                                </div>
                                <p class="text-sm mb-0"><span class="bg-success-focus px-1 rounded-2 fw-medium text-success-main text-sm"><i class="ri-arrow-right-up-line"></i> 60%</span> From last month </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8">
            <div class="card h-100">
                <div class="card-body p-24 mb-8">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h2 class="mb-2 fw-bold text-xl mb-0">Income Statistics </h2>
                        <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    
                    <div id="incomeExpense" class="apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card pb-4">
                <div class="card-header border-bottom">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Newsfeed</h6>
                        <a href="/news/" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>
                </div>
                <?php
                // Define custom query parameters
                $args = array(
                    'posts_per_page' => 5, // Number of posts to display
                    'post_type'      => 'post', // Post type to query
                );

                // The custom query
                $latest_posts = new WP_Query( $args );

                $latest_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5, // Limit to 5 posts
                ));

                if ( $latest_posts->have_posts() ) : 
                    while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                        <div class="d-flex p-20">
                            <a href="<?php the_permalink(); ?>" class="d-flex w-100 text-decoration-none text-inherit">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="w-90-px h-full rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php endif; ?>
                                <div>
                                    <h6 class="text-md mb-0"><?php the_title(); ?></h6>
                                    <span><?php echo get_the_excerpt(); ?></span>
                                    <?php echo get_the_date(); ?>
                                </div>
                            </a>
                        </div>
                        <hr class="h-px my-8 bg-gray-200 border-1 dark:bg-gray-700 mx-20">
                    <?php endwhile; 
                    wp_reset_postdata(); // Reset post data
                else : 
                    echo '<p>No posts found.</p>';
                endif;
                ?>
                
            </div>
        </div>
        
        
        
    </div>
  </div>
  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
  <!-- jQuery library js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/bootstrap.bundle.min.js"></script>
  <!-- Apex Chart js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/apexcharts.min.js"></script>
  <!-- Data Table js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/dataTables.min.js"></script>
  <!-- Iconify Font js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/iconify-icon.min.js"></script>
  <!-- jQuery UI js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-ui.min.js"></script>
  <!-- Vector Map js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Popup js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/magnifc-popup.min.js"></script>
  <!-- Slick Slider js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/slick.min.js"></script>
  <!-- prism js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/prism.js"></script>
  <!-- file upload js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/file-upload.js"></script>
  <!-- audioplayer -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/lib/audioplayer.js"></script>
  
  <!-- main js -->
  <script src="http://localhost:8888/wp-content/themes/hello-elementor/account/assets/js/app.js"></script>
<script>
    
    // ===================== Income VS Expense Start =============================== 
   function createChartTwo(chartId, color1, color2) {
    // Sample data fetched from PHP
     var rawData = [
    <?php 
    echo get_field('oct_24', 'user_' . $user_id) !== null && get_field('oct_24', 'user_' . $user_id) !== '' ? get_field('oct_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('nov_24', 'user_' . $user_id) !== null && get_field('nov_24', 'user_' . $user_id) !== '' ? get_field('nov_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('dec_24', 'user_' . $user_id) !== null && get_field('dec_24', 'user_' . $user_id) !== '' ? get_field('dec_24', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jan_25', 'user_' . $user_id) !== null && get_field('jan_25', 'user_' . $user_id) !== '' ? get_field('jan_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('feb_25', 'user_' . $user_id) !== null && get_field('feb_25', 'user_' . $user_id) !== '' ? get_field('feb_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('mar_25', 'user_' . $user_id) !== null && get_field('mar_25', 'user_' . $user_id) !== '' ? get_field('mar_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('apr_25', 'user_' . $user_id) !== null && get_field('apr_25', 'user_' . $user_id) !== '' ? get_field('apr_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('may_25', 'user_' . $user_id) !== null && get_field('may_25', 'user_' . $user_id) !== '' ? get_field('may_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jun_25', 'user_' . $user_id) !== null && get_field('jun_25', 'user_' . $user_id) !== '' ? get_field('jun_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('jul_25', 'user_' . $user_id) !== null && get_field('jul_25', 'user_' . $user_id) !== '' ? get_field('jul_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('aug_25', 'user_' . $user_id) !== null && get_field('aug_25', 'user_' . $user_id) !== '' ? get_field('aug_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('sep_25', 'user_' . $user_id) !== null && get_field('sep_25', 'user_' . $user_id) !== '' ? get_field('sep_25', 'user_' . $user_id) : 0; 
    ?>,
    <?php 
    echo get_field('oct_25', 'user_' . $user_id) !== null && get_field('oct_25', 'user_' . $user_id) !== '' ? get_field('oct_25', 'user_' . $user_id) : 0; 
    ?>

    ];

    // Function to replace 0, null, or empty with the last valid number
    function processData(data) {
        let lastValid = 0; // Start with 0 as the last valid number
        return data.map(value => {
            // Convert to number and handle undefined, null, or empty values
            value = Number(value);
            if (isNaN(value) || value === 0) {
                return lastValid; // Use last valid number
            }
            lastValid = value; // Update last valid number
            return value; // Return the current valid value
        });
    }

    var processedData = processData(rawData);

    var options = {
        series: [{
            name: 'Amount',
            data: processedData
        }],
        legend: {
            show: false 
        },
        chart: {
            type: 'area',
            width: '100%',
            height: '100%',
            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: ['#FF3C48'],
            lineCap: 'round'
        },
        grid: {
            show: true,
            borderColor: '#D1D5DB',
            strokeDashArray: 1,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },
            yaxis: {
                lines: {
                    show: true
                }
            },
            padding: {
                top: -20,
                right: 0,
                bottom: -10,
                left: 0
            },
        },
        fill: {
            type: 'gradient',
            colors: ['#FF3C48'],
            gradient: {
                shade: 'light',
                type: 'vertical',
                shadeIntensity: 0.2,
                gradientToColors: [undefined, `${color2}00`],
                inverseColors: false,
                opacityFrom: [0.7, 0.1],
                opacityTo: [0.1, 0.1],
                stops: [0, 80],
            },
        },
        markers: {
            colors: [color1, color2],
            strokeWidth: 3,
            size: 0,
            hover: {
                size: 10
            }
        },
        xaxis: {
            labels: {
                show: true
            },
            categories: ['Oct24', 'Nov24', 'Dec24', 'Jan25', 'Feb25', 'Mar25', 'Apr25', 'May25', 'Jun25', 'Jul25', 'Aug25', 'Sep25'],
            tooltip: {
                enabled: false
            },
            labels: {
                formatter: function (value) {
                    return value;
                },
                style: {
                    fontSize: "14px"
                }
            }
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return "£" + value;
                },
                style: {
                    fontSize: "14px"
                }
            },
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
    chart.render();

}
    createChartTwo('incomeExpense', '#487FFF', '#FF9F29');
    // ===================== Income VS Expense End =============================== 


     
  
    

</script>


</body>
</html>
