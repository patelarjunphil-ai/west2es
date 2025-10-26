<?= $this->extend('layouts/main') ?>

<?= $this->section('sidebar') ?>
    <?= $this->include('partials/sidebar') ?>
<?= $this->endSection() ?>

<?= $this->section('top-navbar') ?>
    <?= $this->include('partials/top_navbar') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="col-md-9 main-content">
    <div class="row g-3">
        <!-- Each box is now col-md-6 (2 in a row) with custom styling to ensure equal size -->
        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-calendar-alt"></i>
                <span class="info-label">TOTAL</span>
                <span class="info-value"><?= $totalFiles ?></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-chart-line"></i>
                <span class="info-label">TOTAL EVENTS</span>
                <span class="info-value"><?= $totalEvents ?></span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-user"></i>
                <span class="info-label">PENDING<br>USERS</span>
                <span class="info-value">
                    <a href="<?= base_url('pending-users') ?>" class="text-dark notification-link" data-auto-mark="true" style="text-decoration: none;">
                        <span class="pending-users-count"><?= $pendingUsersCount ?></span>
                    </a>
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-file-alt"></i>
                <span class="info-label">PENDING<br>FILES</span>
                <span class="info-value">
                    <a href="<?= base_url('pending-files') ?>" class="text-dark notification-link" data-auto-mark="true" style="text-decoration: none;">
                        <span class="pending-files-count"><?= $pendingFilesCount ?></span>
                    </a>
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-folder"></i>
                <span class="info-label">TOTAL FILES</span>
                <span class="info-value"><?= $totalFilesVersions ?></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <i class="fas fa-bell"></i>
                <span class="info-label">NOTIFICATIONS</span>
                <span class="info-value">
                    <a href="<?= base_url('notifications') ?>" class="text-dark notification-link" data-auto-mark="true" style="text-decoration: none;">
                        <span class="notification-count"><?= $notificationCount ?></span>
                    </a>
                </span>
            </div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="info-box">
                <i class="fas fa-users"></i>
                <span class="info-label">TOTAL<br>USERS</span>
                <span class="info-value"><?= $totalUsers ?></span>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
