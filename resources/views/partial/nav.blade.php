<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">RACH TI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ (($title ?? '') === "Home" ? 'active' : '') }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ (($title ?? '') === "Berita" ? 'active' : '') }}" href="/berita">Berita</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ (($title ?? '') === "Profile" ? 'active' : '') }}" href="/profile">Profil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ (($title ?? '') === "Kontak" ? 'active' : '') }}" href="/kontak">Kontak</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>