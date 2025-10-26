<div class="col-md-3 bg-primary text-white sidebar">
  <div class="py-3">
    <ul class="nav flex-column">
      <!-- Dashboard menu -->
      <li class="nav-item py-2 has-submenu show">
        <a href="javascript:void(0)" class="nav-link text-white">
          <i class="fas fa-home me-2"></i>Dashboard
          <i class="fas fa-chevron-right float-end"></i>
        </a>
        <ul class="submenu">
          <li class="submenu-item py-2">
            <a href="<?= base_url('dashboard') ?>" class="nav-link text-white <?= ($currentPage == 'dashboard-overview.php') ? 'active' : '' ?>">
              <i class="fas fa-file-alt me-2"></i>Overview
            </a>
          </li>

          <?php if (session('user_role') === 'admin'): ?>
              <li class="submenu-item py-2">
                      <a href="<?= base_url('pending-users') ?>" class="nav-link text-white <?= ($currentPage == 'pending-users.php') ? 'active' : '' ?>" data-auto-mark="true">
                          <i class="fas fa-users me-2"></i>Pending Users
                          <?php if ($pendingUsersCount > 0): ?>
                              <span class="badge bg-danger ms-2 pending-users-badge"><?= $pendingUsersCount ?></span>
                          <?php endif; ?>
                      </a>
              </li>
              <li class="submenu-item py-2">
                      <a href="<?= base_url('pending-files') ?>" class="nav-link text-white <?= ($currentPage == 'pending-files.php') ? 'active' : '' ?>" data-auto-mark="true">
                          <i class="fas fa-file-alt me-2"></i>Pending Files
                          <?php if ($pendingFilesCount > 0): ?>
                              <span class="badge bg-danger ms-2 pending-files-badge"><?= $pendingFilesCount ?></span>
                          <?php endif; ?>
                      </a>
              </li>
          <?php endif; ?>

          <!-- Notification Menu -->
          <li class="submenu-item py-2">
            <a href="<?= base_url('notifications') ?>" class="nav-link text-white notification-link <?= ($currentPage == 'notification.php') ? 'active' : '' ?>" data-auto-mark="true">
              <i class="fas fa-bell me-2"></i>Notifications
              <?php if ($notificationCount > 0): ?>
                  <span class="badge bg-danger ms-2 notification-badge"><?= $notificationCount ?></span>
              <?php endif; ?>
            </a>
          </li>
            </ul>

          <li class="nav-item py-2">
            <a href="<?= base_url('events') ?>" class="nav-link text-white <?= ($currentPage == 'event.php') ? 'active' : '' ?>">
              <i class="fas fa-calendar-alt me-2"></i>Event
            </a>
          </li>

          <!-- File menu -->
          <li class="nav-item py-2 has-submenu show">
            <a href="javascript:void(0)" class="nav-link text-white">
              <i class="fas fa-folder-open me-2"></i>File
              <i class="fas fa-chevron-right float-end"></i>
            </a>
            <ul class="submenu collapse" id="fileMenu">
              <li class="submenu-item py-2">
                <a href="<?= base_url('files/admin') ?>" class="nav-link text-white <?= ($currentPage == 'admin_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Administrative Files
                </a>
              </li>
              <li class="submenu-item py-2">
                <a href="<?= base_url('files/cild') ?>" class="nav-link text-white <?= ($currentPage == 'cild_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Curriculum Implementation and Learning Delivery
                </a>
              </li>
              <li class="submenu-item py-2">
                    <a href="<?= base_url('files/lulr') ?>" class="nav-link text-white <?= ($currentPage == 'lulr_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Localization and Utilization of Learning Resources
                </a>
              </li>
              <li class="submenu-item py-2">
                <a href="<?= base_url('files/aeld') ?>" class="nav-link text-white <?= ($currentPage == 'aeld_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Assessment/Evaluation of Learner's Development
                </a>
              </li>
              <li class="submenu-item py-2">
                <a href="<?= base_url('files/approved-proposal') ?>" class="nav-link text-white <?= ($currentPage == 'approved_proposal') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Approved Proposal
                </a>
            </li>
            </ul>
          </li>

          <!-- Innovation Files -->
          <li class="nav-item py-2 has-submenu show">
            <a href="javascript:void(0)" class="nav-link text-white">
              <i class="fas fa-lightbulb me-2"></i>Innovation Files
              <i class="fas fa-chevron-right float-end"></i>
            </a>
            <ul class="submenu collapse" id="innovationMenu">
              <li class="submenu-item py-2">

                <a href="<?= base_url('files/if-proposals') ?>" class="nav-link text-white <?= ($currentPage == 'if_proposals_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Proposals
                </a>

              </li>
              <li class="submenu-item py-2">

              <a href="<?= base_url('files/if-completed') ?>" class="nav-link text-white <?= ($currentPage == 'if_completed_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Completed
                </a>
              </li>
            </ul>
          </li>
  <li class="nav-item py-2 has-submenu">
  <a href="javascript:void(0)" class="nav-link text-white">
    <i class="fas fa-book me-2"></i>Research Papers
    <i class="fas fa-chevron-right float-end"></i>
  </a>
  <ul class="submenu collapse" id="researchMenu">
    <li class="submenu-item py-2 has-submenu">
      <a href="javascript:void(0)" class="nav-link text-white">
        <i class="fas fa-file-alt me-2"></i>Proposals
        <i class="fas fa-chevron-right float-end"></i>
      </a>
      <ul class="submenu collapse">
        <li class="submenu-item py-2">
          <a href="<?= base_url('files/rp-proposal-berf') ?>" class="nav-link text-white <?= ($currentPage == 'rp_proposal_berf_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>BERF
                </a>

        </li>
        <li class="submenu-item py-2">
          <a href="<?= base_url('files/rp-proposal-nonberf') ?>" class="nav-link text-white <?= ($currentPage == 'rp_proposal_nonberf_files') ? 'active' : '' ?>">
            <i class="fas fa-file-alt me-2"></i>Non-BERF
        </a>
        </li>
      </ul>
    </li>
    <li class="submenu-item py-2 has-submenu">
      <a href="javascript:void(0)" class="nav-link text-white">
        <i class="fas fa-file-alt me-2"></i>Completed
        <i class="fas fa-chevron-right float-end"></i>
      </a>
      <ul class="submenu collapse">
        <li class="submenu-item py-2">
          <a href="<?= base_url('files/rp-completed-berf') ?>" class="nav-link text-white <?= ($currentPage == 'rp_completed_berf_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>BERF
                </a>
        </li>
        <li class="submenu-item py-2">
          <a href="<?= base_url('files/rp-completed-nonberf') ?>" class="nav-link text-white <?= ($currentPage == 'rp_completed_nonberf_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Non-BERF
                </a>

        </li>
      </ul>
    </li>
  </ul>
</li>


          <!-- End Research Papers -->

          <!-- Transparency -->
          <li class="nav-item py-2 has-submenu show">
            <a href="javascript:void(0)" class="nav-link text-white">
              <i class="fas fa-chart-bar me-2"></i>Transparency
              <i class="fas fa-chevron-right float-end"></i>
            </a>
            <ul class="submenu collapse" id="transparencyMenu">
              <li class="submenu-item py-2">

              <a href="<?= base_url('files/t-lr') ?>" class="nav-link text-white <?= ($currentPage == 't_lr_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Liquidation Reports
                </a>
              </li>
              <li class="submenu-item py-2">

              <a href="<?= base_url('files/t-pp') ?>" class="nav-link text-white <?= ($currentPage == 't_pp_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Project Proposals
                </a>
              </li>
              <li class="submenu-item py-2">
              <a href="<?= base_url('files/t-rs') ?>" class="nav-link text-white <?= ($currentPage == 't_rs_files') ? 'active' : '' ?>">
                    <i class="fas fa-file-alt me-2"></i>Realignment and Supplementals
                </a>
              </li>
            </ul>
          </li>
          <!-- End Transparency -->

          <?php if (session('user_role') === 'admin'): ?>
            <li class="nav-item py-2">
              <a href="<?= base_url('teachers-profile') ?>" class="nav-link text-white <?= ($currentPage == 'teachers_profile.php') ? 'active' : '' ?>">
                <i class="fas fa-user-tie me-2"></i>Teacher's Profile
              </a>
            </li>

          <li class="nav-item py-2">
            <a href="<?= base_url('reports') ?>" class="nav-link text-white <?= ($currentPage == 'reports.php') ? 'active' : '' ?>">
              <i class="fas fa-user-tie me-2"></i>Report Management
            </a>
          </li>
          <?php endif; ?>


          <?php if (session('user_role') === 'faculty'): ?>
            <li class="nav-item py-2">
              <a href="<?= base_url('profile') ?>" class="nav-link text-white <?= ($currentPage == 'profile.php') ? 'active' : '' ?>">
                <i class="fas fa-user-tie me-2"></i>My Profile
              </a>
            </li>
          <?php endif; ?>

          <li class="nav-item py-2">
            <a href="<?= base_url('mission-vision') ?>" class="nav-link text-white <?= ($currentPage == 'mission_vision.php') ? 'active' : '' ?>">
              <i class="fas fa-bullseye me-2"></i>Mission & Vision
            </a>
          </li>

          <?php if (session('user_role') === 'admin'): ?>
            <li class="nav-item py-2">
              <a href="<?= base_url('settings') ?>" class="nav-link text-white <?= ($currentPage == 'settings.php') ? 'active' : '' ?>">
                <i class="fas fa-cogs me-2"></i>Settings
              </a>
            </li>
          <?php endif; ?>

          <li class="nav-item py-2">
            <a href="<?= base_url('logout') ?>" id="logoutButton" class="nav-link text-white">
              <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
          </li>
        </ul>
      </div>
    </div>