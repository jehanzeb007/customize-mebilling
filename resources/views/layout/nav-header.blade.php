<div class="nav-header">
    <a href="{{ route('admin.dashboard') }}" class="brand-logo" aria-label="Gymove">
        <img class="logo-abbr"
            src="{{ $logoPath ? asset('storage/' . $logoPath) : asset('assets/images/dev-design-logo.png') }}"
            alt="Logo">
    </a>


    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
