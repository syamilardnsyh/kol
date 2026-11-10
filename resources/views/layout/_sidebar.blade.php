<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{asset('adminLTE/dist/assets/img/AdminLTELogo.png')}}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">{{config('app.name')}}</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filter menu</label>
          <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filter menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
          />
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            No matching pages.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link {{(request()->is('dashboard')) ? 'active' : ''}}">
                  <i class="nav-icon bi bi-people-fill"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mylist" class="nav-link">
                  <i class="nav-icon bi bi-list-check"></i>
                  <p>
                    My List
                  </p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="/calendar" class="nav-link">
                  <i class="nav-icon bi bi-calendar-date-fill"></i>
                  <p>
                    Calendar
                  </p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="/campaign" class="nav-link">
                  <i class="nav-icon bi bi-megaphone-fill"></i>
                  <p>
                    Campaign
                  </p>
                </a>
              </li>
              </li>
            <!--end::Sidebar Menu-->
        <!--end::Sidebar Wrapper-->
      </aside>