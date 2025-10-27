<div class="modal fade" id="editFileModal" tabindex="-1" aria-labelledby="editFileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="editFileModalLabel">
                    <i class="fas fa-edit me-2"></i> Edit File Revisions <span id="editRevision2File"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <h5 class="mb-4 fw-bold text-muted">
                    <i class="fas fa-history me-2"></i> File Revision History
                </h5>
                <div class="table-responsive">
                    <table id="revisionsTable" class="table table-hover table-bordered align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Version</th>
                                <th>Filename</th>
                                <th>Date & Time</th>
                                <th>File Size</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Revision rows will be dynamically loaded -->
                        </tbody>
                    </table>
                </div>
                <!-- Empty State Message -->
                <div id="noRevisionsMessage" class="text-center text-muted mt-4 d-none">
                    <i class="fas fa-info-circle me-2"></i>No revisions available.
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>
