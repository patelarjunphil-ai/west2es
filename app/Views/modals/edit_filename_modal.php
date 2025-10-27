<div class="modal fade" id="editFilenameModal" tabindex="-1" aria-labelledby="editFilenameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editFilenameModalLabel">
                    <i class="fas fa-edit me-2"></i> Edit Filename
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFilenameForm">
                    <?= csrf_field() ?>
                    <input type="hidden" id="editFilenameId" name="file_id">

                    <div class="mb-3">
                        <label for="editFilenameInput" class="form-label fw-bold">Current Label</label>
                        <input type="text" class="form-control" id="editFilenameInput" name="filename" required>
                        <small class="text-muted">Enter the new label (this is not a filename or file)</small>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save me-1"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
