<div class="modal fade" id="addFileModal" tabindex="-1" aria-labelledby="addFileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addFileModalLabel">
                    <i class="fas fa-file-upload me-2"></i> Add New File
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addFileForm" enctype="multipart/form-data" action="<?= base_url('files/upload') ?>" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="category_id" value="<?= $category_id ?>">
                    <div class="mb-4">
                        <label for="fileName" class="form-label fw-bold">File Name</label>
                        <input type="text" class="form-control form-control-lg" id="fileName" name="fileName" placeholder="Enter a descriptive file name" required>
                        <small class="text-muted">Provide a clear and descriptive name for the file.</small>
                    </div>
                    <div class="mb-4">
                        <label for="fileInput" class="form-label fw-bold">Upload File</label>
                        <input type="file" class="form-control form-control-lg" id="fileInput" name="fileInput" required>
                        <small class="text-muted">Supported formats: PDF, DOCX, XLSX, etc. Max size: 10MB.</small>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Save File
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
