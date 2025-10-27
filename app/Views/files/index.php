<?= $this->extend('layouts/main') ?>

<?= $this->section('sidebar') ?>
    <?= $this->include('partials/sidebar') ?>
<?= $this->endSection() ?>

<?= $this->section('top-navbar') ?>
    <?= $this->include('partials/top_navbar') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="col-md-9 main-content">
    <h3 class="mb-3"><?= $category_name ?></h3>

    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addFileModal">Add File</button>

    <h4 class="mb-3">List of Files</h4>
    <div class="table-responsive">
       <table id="filesTable" class="table table-bordered table-striped table-hover">
        <colgroup>
            <col width="5%"> <!-- No. -->
            <col width="25%"> <!-- Filename -->
            <col width="20%"> <!-- Date & Time -->
            <col width="15%"> <!-- Uploader -->
            <col width="35%"> <!-- Actions -->
        </colgroup>
        <thead>
            <tr>
                <th class="text-center" data-priority="1">#</th> <!-- Number -->
                <th data-priority="2">Name</th> <!-- Filename -->
                <th class="text-center" data-priority="3">Date & Time</th>
                <th class="text-center" data-priority="4">Uploader</th>
                <th class="text-center" data-priority="5">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($files as $file): ?>
                <tr>
                    <td class="text-center"><?= $counter++ ?></td> <!-- Numbering flag -->
                    <td><?= htmlspecialchars($file['filename']) ?></td>
                    <td class="text-center"><?= htmlspecialchars(date('F j, Y', strtotime($file['created_at']))) ?></td>
                    <td class="text-center"><?= htmlspecialchars($file['first_name']) ?></td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <button class="btn btn-info btn-sm preview-file" data-id="<?= $file['id'] ?>" data-name="<?= $file['filename'] ?>" data-bs-toggle="modal" data-bs-target="#previewFileModal" title="Preview file revisions">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-success btn-sm edit-file" data-id="<?= $file['id'] ?>" data-version="<?= $file['version_no'] ?>" data-name="<?= $file['filename'] ?>" data-bs-toggle="modal" data-bs-target="#editFileModal" title="Edit file content/revisions">
                                <i class="fas fa-file-alt"></i>
                            </button>
                            <button class="btn btn-warning btn-sm edit-filename" data-id="<?= $file['id'] ?>" data-name="<?= $file['filename'] ?>" data-bs-toggle="modal" data-bs-target="#editFilenameModal" title="Edit filename">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-primary btn-sm add-revision" data-id="<?= $file['id'] ?>" data-name="<?= $file['filename'] ?>" data-bs-toggle="modal" data-bs-target="#addFileRevisionModal" title="Add new revision">
                                <i class="fas fa-plus"></i>
                            </button>
                            <?php if (session('user_role') !== 'faculty'): ?>
                            <button class="btn btn-danger btn-sm delete-file" data-id="<?= $file['id'] ?>" data-version="<?= $file['version_no'] ?>" data-name="<?= $file['filename'] ?>" title="Delete file and all revisions">
                                    <i class="fas fa-trash"></i>
                                </button>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<?= $this->include('modals/add_file_modal') ?>
<?= $this->include('modals/preview_file_modal') ?>
<?= $this->include('modals/edit_file_modal') ?>
<?= $this->include('modals/add_revision_modal') ?>
<?= $this->include('modals/edit_revision_modal') ?>
<?= $this->include('modals/edit_filename_modal') ?>
<?= $this->include('modals/preview_doc_modal') ?>
<?= $this->include('modals/rename_revision_modal') ?>

<?= $this->endSection() ?>
