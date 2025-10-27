<div class="modal fade" id="editRevisionModal" tabindex="-1" aria-labelledby="editRevisionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="editRevisionModalLabel">
                    <i class="fas fa-edit me-2"></i> Edit Revision
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="editRevisionForm" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <!-- Hidden Field -->
                    <input type="hidden" id="editRevisionId" name="revision_id">
                    <input type="hidden" id="editRevisionVersion" name="version_no" >

                    <!-- Upload New File -->
                    <div class="mb-4">
                        <label for="editRevisionFile" class="form-label fw-bold">Upload New File</label>
                        <input type="file" class="form-control form-control-lg" id="editRevisionFile" name="file" required>
                        <small class="text-muted">Replace the existing revision with a new file.</small>
                        <div class="invalid-feedback">Please select a file to upload.</div>
                    </div>
                    <!-- Footer Buttons -->
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save me-1"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
