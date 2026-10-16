<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login</title>

    <!--begin::Theme Init-->
    <script>
      (() => {
        'use strict';
        const root = document.documentElement;
        if (root.getAttribute('data-lte-color-mode') === 'off') {
          return;
        }
        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try {
          stored = localStorage.getItem(STORAGE_KEY);
        } catch {}
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') {
          resolved = stored;
        } else if (authored === 'dark' || authored === 'light') {
          resolved = authored;
        } else if (globalThis.matchMedia('(prefers-color-scheme: light)').matches) {
          resolved = 'dark';
        }
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        if (resolved !== authored) {
          root.setAttribute('data-lte-theme-resolved', '');
        }
      })();
    </script>
    <!--end::Theme Init-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="color-scheme" content="light">
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#ffff" media="(prefers-color-scheme: light)">

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdLogin">
    <meta name="author" content="ColorlibHQ">
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <meta name="supported-color-schemes" content="light dark">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/admin-lte@4/dist/css/adminlte.min.css" as="style">
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print" onload="this.media ='all'">
    <!--end::Fonts-->

    <!--begin::Third Party Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <!--end::Third Party Plugins-->

    <!--begin::Required Plugin(AdminLTE CDN)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4/dist/css/adminlte.min.css">
    <!--end::Required Plugin(AdminLTE CDN)-->
  </head>
  <!--end::Head-->

  <!--begin::Body-->
  <body class="login-page bg-body-secondary">
    <main class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header">
            <h1 class="text-center mb-0">Login akun</h1>
        </div>
        <div class="card-body login-card-body">

          <form action="#" method="post">
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginEmail" type="email" class="form-control" value="" placeholder="">
                <label for="loginEmail">Email</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="password" type="password" class="form-control" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <div class="input-group-text" id="togglePassword" style="cursor: pointer;">
                <i class="bi bi-lock-fill" id="lockIcon"></i>
              </div>
            </div>
            
            <div class="row">
              <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                </div>
              </div>
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
            </div>
          </form>

          <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-facebook me-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-danger">
              <i class="bi bi-google me-2"></i> Sign in using Google
            </a>
          </div>

          <p class="mb-1"><a href="#">I forgot my password</a></p>
          <p class="mb-0"><a href="#" class="text-center">Register a new membership</a></p>
        </div>
      </div>
    </main>

    <!--begin::Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@4/dist/js/adminlte.min.js"></script>

    <!-- OverlayScrollbars Configure -->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = { scrollbarTheme: 'os-theme-light', scrollbarAutoHide: 'leave', scrollbarClickScroll: true };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        const isMobile = window.innerWidth <= 992;
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined && !isMobile) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: { theme: Default.scrollbarTheme, autoHide: Default.scrollbarAutoHide, clickScroll: Default.scrollbarClickScroll },
          });
        }
      });

      document.addEventListener("DOMContentLoaded", function() {
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");
    const lockIcon = document.getElementById("lockIcon");

    togglePassword.addEventListener("click", function() {
      // Cek apakah tipe input saat ini adalah password
      const isPassword = passwordInput.getAttribute("type") === "password";
      
      // Jika password, ubah ke text (agar terlihat), jika text ubah ke password
      passwordInput.setAttribute("type", isPassword ? "text" : "password");
      

      if (isPassword) {
        lockIcon.classList.remove("bi-lock-fill");
        lockIcon.classList.add("bi-unlock-fill");
      } else {
        lockIcon.classList.remove("bi-unlock-fill");
        lockIcon.classList.add("bi-lock-fill");
      }
    });
    });
    </script>
    <!--end::Scripts-->
  </body>
</html>