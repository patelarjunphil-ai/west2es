<div class="modal fade" id="addFileRevisionModal" tabindex="-1" aria-labelledby="addFileRevisionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addFileRevisionModalLabel">
                    <i class="fas fa-plus me-2"></i> Add New Revision <span id="addRevision2File"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="addRevisionForm" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <!-- Hidden Field -->
                    <input type="hidden" id="addFileId" name="file_id">
                    <input type="hidden" id="addFileName" name="file_name">

                    <!-- Upload Revision File -->
                    <div class="mb-4">
                        <label for="addRevisionFile" class="form-label fw-bold">Upload New Revision</label>
                        <input type="file" class="form-control form-control-lg" id="addRevisionFile" name="file" required>
                        <small class="text-muted">Supported formats: PDF, DOCX, XLSX, etc. Max size: 10MB.</small>
                        <div class="invalid-feedback">Please select a file to upload.</div>
                    </div>
                    <!-- Footer Buttons -->
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" id="addRevisionBtn">
                            <i class="fas fa-save me-1"></i> Add Revision
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
