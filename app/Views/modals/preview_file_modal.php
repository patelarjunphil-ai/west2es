<div class="modal fade" id="previewFileModal" tabindex="-1" aria-labelledby="previewFileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="previewFileModalLabel">
                    <i class="fas fa-eye me-2"></i> File Revisions <span id="previewRevision2File"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Table Section -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Version</th>
                                <th>Filename</th>
                                <th>Date & Time</th>
                                <th>File Size</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="revisionTableBody">
                            <!-- Revisions will be dynamically loaded here -->
                        </tbody>
                    </table>
                </div>
                <!-- Message for Empty State -->
                <div id="noRevisionsMessage" class="text-center text-muted mt-4 d-none">
                    <i class="fas fa-info-circle me-2"></i>No revisions available for this file.
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
