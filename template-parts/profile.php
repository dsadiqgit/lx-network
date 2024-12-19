<?php
/**
 * Template Name: Profile
 */
?>


<?php include 'portal-header.php'; ?>


      <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">My Account</h6>
</div>

        <div class="card h-100 p-0 radius-12">
            <div class="card-body p-24">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-10">
                        <div class="card border">
                            <div class="card-body">
                                <h6 class="text-md text-primary-light mb-16">Profile Image</h6>

                                <!-- Upload Image Start -->
<div class="mb-24 mt-16">
    <div class="avatar-upload">
        <div class="avatar-edit position-absolute bottom-0 end-0 me-24 mt-16 z-1 cursor-pointer">
            <input type='file' id="profile_picture" name="profile_picture" accept=".png, .jpg, .jpeg" hidden>
            <label for="profile_picture" class="w-32-px h-32-px d-flex justify-content-center align-items-center bg-primary-50 text-primary-600 border border-primary-600 bg-hover-primary-100 text-lg rounded-circle">
                <iconify-icon icon="solar:camera-outline" class="icon"></iconify-icon>
            </label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('path-to-current-profile-picture.jpg');"> </div>
        </div>
    </div>
</div>
<!-- Upload Image End -->

<!-- User Profile Update Form -->
<form id="user-profile-form" method="POST" enctype="multipart/form-data">
    <div class="mb-20">
        <label for="first_name" class="form-label fw-semibold text-primary-light text-sm mb-8">First Name</label>
        <input type="text" class="form-control radius-8" id="first_name" name="first_name" placeholder="Enter First Name">
    </div>
    <div class="mb-20">
        <label for="last_name" class="form-label fw-semibold text-primary-light text-sm mb-8">Last Name</label>
        <input type="text" class="form-control radius-8" id="last_name" name="last_name" placeholder="Enter Last Name">
    </div>
    <div class="mb-20">
        <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email</label>
        <input type="email" class="form-control radius-8" id="email" name="email" placeholder="Enter Email Address">
    </div>
    <div class="mb-20">
        <label for="password" class="form-label fw-semibold text-primary-light text-sm mb-8">Password</label>
        <input type="password" class="form-control radius-8" id="password" name="password" placeholder="Enter New Password">
    </div>
    <div class="d-flex align-items-center justify-content-center gap-3">
        <button type="button" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-56 py-11 radius-8"> 
            Cancel
        </button>
        <button type="submit" class="btn btn-primary border border-primary-600 text-md px-56 py-12 radius-8"> 
            Save
        </button>
    </div>
</form>

<script>
document.getElementById('user-profile-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    try {
        const response = await fetch(`${wpApiSettings.root}custom/v1/update-profile`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-WP-Nonce': wpApiSettings.nonce,
            },
        });

        const result = await response.json();
        if (response.ok) {
            alert('Profile updated successfully!');
        } else {
            alert(`Error: ${result.message}`);
        }
    } catch (error) {
        console.error('Profile update failed', error);
        alert('An unexpected error occurred.');
    }
});
</script>

                        </div>
                    </div>
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
  
   <?php include 'portal-footer.php'; ?>

</body>
</html>
