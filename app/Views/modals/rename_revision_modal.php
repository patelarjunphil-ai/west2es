<div class="modal fade" id="renameRevisionModal" tabindex="-1" aria-labelledby="renameRevisionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="renameRevisionModalLabel">
                    <i class="fas fa-tag me-2"></i> Rename Revision File
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="renameRevisionForm">
                    <?= csrf_field() ?>
                    <input type="hidden" id="renameRevisionId" name="revision_id">

                    <div class="mb-3">
                        <label for="renameRevisionInput" class="form-label fw-bold">New Filename (without extension)</label>
                        <input type="text" class="form-control" id="renameRevisionInput" name="new_filename" required>
                        <small class="text-muted">Enter the new filename. The extension will be preserved.</small>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            <i class="fas fa-times me-1"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Rename
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
