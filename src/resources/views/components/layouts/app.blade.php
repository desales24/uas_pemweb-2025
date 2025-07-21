<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'PemWeb' }}</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=5"
    />
    <meta name="description" content="This is meta description" />
    <meta name="author" content="Themefisher" />
    <link
      rel="shortcut icon"
      href="{{ asset('front/images/favicon.png') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    @livewireStyles
  </head>
  <body>
    <header class="navigation bg-tertiary">
      <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img
              src="{{ asset('front/images/logo.png') }}"
              alt="Logo"
              width="160"
            />
          </a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{ route('home') }}"
                  >Home</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    {{ $slot }}
    
    <footer class="section-sm bg-tertiary">
      <div class="container text-center">
        <a wire:navigate href="{{ route('home') }}">Copyright 2025</a>
      </div>
    </footer>
    <script src="{{ asset('front/js/script.js') }}"></script>
    @livewireScripts
  </body>
</html>