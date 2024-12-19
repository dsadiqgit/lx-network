<?php $user_id = get_current_user_id();?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Bootstrap 5 Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/favicon.png" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/remixicon.css">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/bootstrap.min.css">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/apexcharts.css">
  <!-- Data Table css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/dataTables.min.css">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/editor-katex.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/editor.atom-one-dark.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/editor.quill.snow.css">
  <!-- Date picker css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/flatpickr.min.css">
  <!-- Calendar css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/full-calendar.css">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/jquery-jvectormap-2.0.5.css">
  <!-- Popup css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/magnific-popup.css">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/slick.css">
  <!-- prism css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/prism.css">
  <!-- file upload css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/file-upload.css">
  
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/lib/audioplayer.css">
  <!-- main css -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/css/style.css">

</head>
<?php 


?>
  <body>
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="/account/" class="sidebar-logo">
      <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/logo-icon.png" alt="site logo" class="logo-icon">
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
          <span>Messages</span> 
          <div style="display: none;" id="msg-circle"></div>
         
        
        </a>
      </li>
      <li>
        <a href="/withdraw/">
          <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
          <span>Withdraw</span> 
        </a>
      </li>
      
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="/wp-login.php?action=logout"><i class="ri-circle-fill circle-icon text-danger-main text-primary-600 w-auto"></i>Log Out</a>
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
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="<?php echo site_url(); ?>/wp-content/themes/hello-elementor/account/assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2"><?php echo $current_user->user_login . "\n";?> </h6>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Messages</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="/wp-login.php?action=logout"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div>