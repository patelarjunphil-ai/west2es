<?php
$user_role = session('user_role');
$userPhoto = session('user_photo'); // Assuming user photo is stored in session
$schoolLogo = session('school_logo');
$schoolLogoPath = !empty($schoolLogo) ? base_url('uploads/' . $schoolLogo) : base_url('assets/images/logo1.png');
?>
<body data-user-role="<?= htmlspecialchars($user_role); ?>">

<div id="loader">
    <img src="<?= htmlspecialchars($schoolLogoPath) ?>" alt="Website Logo" />
</div>

  <!-- container-fluid begin -->
  <div class="container-fluid p-0">
    <div class="bg-primary text-white py-2 d-flex align-items-center justify-content-center">
      <img src="<?= htmlspecialchars($schoolLogoPath) ?>" alt="School Logo" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
      <h5 class="m-0 blue-header-text">Cadiz West 2 Elementary School</h5>
    </div>

    <div class="bg-warning text-dark d-flex justify-content-between align-items-center py-2 px-3">
      <div class="d-flex align-items-center">
        <div class="d-flex align-items-center me-3">
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if ($userPhoto): ?>
                <img src="<?= htmlspecialchars($userPhoto) ?>" alt="User Photo" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover; border: 2px solid #fff;">
              <?php else: ?>
                <i class="fas fa-user-circle me-2" style="font-size: 40px; color: #fff;"></i>
              <?php endif; ?>
              <span class="text-white">
                <?php
                    echo session('first_name') ? "Welcome, " . htmlspecialchars(session('first_name')) . "!" : "Welcome, Guest!";
                ?>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                            <?php if (session('user_role') !== 'faculty'): ?>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fas fa-user me-2"></i>Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <?php endif; ?>
              <li><a class="dropdown-item" href="#" onclick="confirmLogout()"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="search-box">
        <span class="search-icon"><i class="fas fa-search"></i></span> <!-- Magnifying Glass Icon -->
        <input type="text" class="form-control" id="searchInput2" placeholder="Search" autocomplete="off">
        <button class="btn btn-light ms-1" id="clearButton" style="display: none;">
          <i class="fas fa-times"></i>
        </button>
        <div id="searchSuggestions" class="list-group" style="display: none; position: absolute; z-index: 999; background-color: white; width: 100%; "></div>
      </div>





        <button class="btn btn-primary" id="sidebarToggle">
          <i class="fas fa-bars"></i>
        </button>

   </div>




<!-- File Details Modal -->
<div class="modal fade" id="fileDetailsModal" tabindex="-1" aria-labelledby="fileDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileDetailsModalLabel">File Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- File details will be loaded here dynamically -->
            </div>
        </div>
    </div>
</div>

<!-- Include Profile Modal -->
<?= $this->include('modals/profile_modal') ?>

<div class="row">

<script>
function confirmLogout() {
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to logout from the system?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, logout!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '<?= base_url('logout') ?>';
        }
    });
}
</script>