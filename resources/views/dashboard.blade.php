<x-layout.main>
     <div class="page-header">
      <div>
        <h1 class="page-title">Anggota</h1>
        <p class="page-subtitle">Anggota Community of Love</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none text-muted-green">Home</a></li>
          <!-- <li class="breadcrumb-item text-muted-green">Components</li> -->
          <li class="breadcrumb-item active text-main" aria-current="page">Anggota  </li>
        </ol>
      </nav>
    </div>
    <!-- END: Page Header Banner -->

    <!-- START: Basic Table Card Container -->
    <div class="table-card-custom">
      <!-- Header Controls -->
      <div class="table-header-control">
        <!-- Search bar -->
        <div class="table-search-box">
          <i class="bi bi-search table-search-icon"></i>
          <input type="text" class="table-search-input" placeholder="Search orders or products...">
        </div>
        <!-- Action buttons / Filter options -->
        <div class="table-filter-group">
          <div class="dropdown">
            <button class="btn-table-action dropdown-toggle" type="button" id="dropdownFilterStatus"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-funnel"></i> Status Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
              <li><a class="dropdown-item" href="#">All Statuses</a></li>
              <li><a class="dropdown-item" href="#">Paid / Success</a></li>
              <li><a class="dropdown-item" href="#">Processing</a></li>
              <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
            </ul>
          </div>
          <button class="btn-table-action" type="button">
            <i class="bi bi-file-earmark-arrow-down"></i> Export
          </button>
        </div>
      </div>

      <!-- Responsive Table Wrapper -->
      <div class="table-responsive">
        <table class="table-custom">
          <thead>
            <tr>
              <!-- <th>Order ID</th> -->
              <th>Nama</th>
              <th>Persekutuan</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Bergabung</th>
              <th>Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>
                <div class="table-user-cell">
                    <img src="assets/images/user_1.jpg"
                        alt="Eleanor Pena"
                        class="table-user-avatar"
                        onerror="this.src='assets/images/avatar.png'">
                    <div>
                    <div class="table-user-name">Eleanor Pena</div>
                    <div class="table-user-sub">eleanor.pena@example.com</div>
                    </div>
                </div>
                </td>

                <td>Persekutuan Ebenhaezer</td>

                <td>12 April 2001</td>

                <td>Laki-laki</td>

                <td>10 Januari 2024</td>

                <td>
                <span class="badge-table success">Aktif</span>
                </td>

                <td>
                <div class="d-flex justify-content-center gap-1">
                    <a href="#" class="table-btn-action" title="View details">
                    <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="table-btn-action" title="Edit row">
                    <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="table-btn-action delete" title="Delete row">
                    <i class="bi bi-trash"></i>
                    </a>
                </div>
                </td>
            </tr>

            <tr>
                <td>
                <div class="table-user-cell">
                    <img src="assets/images/user_2.jpg"
                        alt="Wade Warren"
                        class="table-user-avatar"
                        onerror="this.src='assets/images/avatar.png'">
                    <div>
                    <div class="table-user-name">Wade Warren</div>
                    <div class="table-user-sub">wade.warren@example.com</div>
                    </div>
                </div>
                </td>

                <td>Persekutuan Kasih</td>

                <td>25 Agustus 1999</td>

                <td>Laki-laki</td>

                <td>5 Maret 2023</td>

                <td>
                <span class="badge-table success">Aktif</span>
                </td>

                <td>
                <div class="d-flex justify-content-center gap-1">
                    <a href="#" class="table-btn-action" title="View details">
                    <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="table-btn-action" title="Edit row">
                    <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="table-btn-action delete" title="Delete row">
                    <i class="bi bi-trash"></i>
                    </a>
                </div>
                </td>
            </tr>

            <tr>
                <td>
                <div class="table-user-cell">
                    <img src="assets/images/user_3.jpg"
                        alt="Jane Cooper"
                        class="table-user-avatar"
                        onerror="this.src='assets/images/avatar.png'">
                    <div>
                    <div class="table-user-name">Jane Cooper</div>
                    <div class="table-user-sub">jane.cooper@example.com</div>
                    </div>
                </div>
                </td>

                <td>Persekutuan Gloria</td>

                <td>18 November 2000</td>

                <td>Perempuan</td>

                <td>20 Juli 2024</td>

                <td>
                <span class="badge-table pending">Tidak Aktif</span>
                </td>

                <td>
                <div class="d-flex justify-content-center gap-1">
                    <a href="#" class="table-btn-action" title="View details">
                    <i class="bi bi-eye"></i>
                    </a>
                    <a href="#" class="table-btn-action" title="Edit row">
                    <i class="bi bi-pencil"></i>
                    </a>
                    <a href="#" class="table-btn-action delete" title="Delete row">
                    <i class="bi bi-trash"></i>
                    </a>
                </div>
                </td>
            </tr>
            </tbody>
        </table>
      </div>

      <!-- Footer Controls / Pagination -->
      <div class="table-footer-control">
        <span class="table-pagination-info">Showing 1 to 10 of 50 entries</span>
        <nav aria-label="Page navigation">
          <ul class="pagination mb-0 gap-1">
            <li class="page-item disabled"><a class="page-link border-0" href="#"><i class="bi bi-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
            <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link border-0" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
</x-layout.main>