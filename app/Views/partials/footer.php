   <!-- Footer Section -->
  <footer class="bg-primary text-white text-center py-3 mt-auto">
    <div class="container">
      <p class="mb-0">© 2024 Cadiz West 2 Elementary School Portal. All rights reserved.</p>
      <!-- <p class="mb-0">Developed by Gweneth | Powered by Bootstrap</p> -->

    </div>
  </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" defer></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" defer></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js" defer ></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.11/dist/sweetalert2.all.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Hide the loader after the page has fully loaded
        const loader = document.getElementById("loader");
        loader.style.transition = "opacity 0.5s ease";
        loader.style.opacity = "0";
        setTimeout(() => {
            loader.style.display = "none";
        }, 500); // Matches the transition duration
    });
</script>
