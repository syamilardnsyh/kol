<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Login Page</title>

    <!--begin::Theme Init (prevents flash of incorrect theme on load, #0000FF)-->
    <script>
      (() => {
        'use strict';
        const root = document.documentElement;
        if (root.getAttribute('data-lte-color-mode') === 'off') return;
        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try { stored = localStorage.getItem(STORAGE_KEY); } catch {}
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') resolved = stored;
        else if (authored === 'dark' || authored === 'light') resolved = authored;
        else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) resolved = 'dark';
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        if (resolved !== authored) root.setAttribute('data-lte-theme-resolved', '');
      })();
    </script>
    <!--end::Theme Init-->

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta name="color-scheme" content="light dark"/>
    <!--end::Accessibility Meta Tags-->

    <link rel="preload" href="{{asset('adminLTE/dist/css/adminlte.css')}}" as="style"/>
    <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.css')}}"/>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
  </head>
  <!--end::Head-->
  
  <!--begin::Body-->
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      <div class="login-logo">
      </div>

      @if (session('failed'))
      <div class="alert alert-danger">{{session('failed')}}</div>
      @endif

      <!-- body card -->
      <div class="card card-outline card-primary">
        <div class="card-body login-card-body">
          <div class="text-center mb-4">
            <h3 class="mb-1"><strong>Cressindo Affiliate Circle</strong></h3>
          </div>
          
          <!-- FORM DIMULAI DI SINI -->
          <form action="/login" method="post">
            @csrf
            
            <div class="mb-3 has-validation">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}">
            
            @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
            </div>

            <div class="mb-4 has-validation">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            
            @error('password')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
            </div>
            
            <!-- Flexbox Bootstrap untuk meratakan Checkbox dan Link -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" checked="checked">
                <label class="form-check-label" name="remember" id="remember">Remember me</label>
              </div>
              <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>

            <!-- Tombol standar Bootstrap -->
            <button type="submit" class="btn btn-primary rounded-pill w-100 mb-4">Log In</button>

            <div class="text-center text-muted mb-3">or sign in with</div>
            
            <!-- Social Login Icons menggunakan gap Bootstrap -->
            <div class="d-flex justify-content-center gap-3">
              <a href="#" class="text-danger text-decoration-none">
                <i class="bi bi-google fs-3"></i>
              </a>
            </div>
          </form>
          <!-- FORM SELESAI -->
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('adminLTE/dist/js/adminlte.js')}}"></script>
  </body>
</html>