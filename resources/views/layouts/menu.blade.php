<li class="divider"></li>
<li class="nav-title">Diklat</li>
<!-- Jenis Diklat -->
<li class="nav-item {{ Request::is('diklatJenis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatJenis.index') }}">
        <i class="nav-icon icon-graduation"></i>
        <span>Jenis Diklat</span>
    </a>
</li>
<!-- Bidang Pelatihan -->
<li class="nav-item {{ Request::is('diklatBidangPelatihans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatBidangPelatihans.index') }}">
        <i class="nav-icon icon-layers"></i>
        <span>Bidang Pelatihan</span>
    </a>
</li>
<!-- Jenis Kegiatan -->
<li class="nav-item {{ Request::is('diklatJenisKegiatans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatJenisKegiatans.index') }}">
        <i class="nav-icon icon-tag"></i>
        <span>Jenis Kegiatan</span>
    </a>
</li>

<li class="nav-item {{ Request::is('diklatModelPelatihans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatModelPelatihans.index') }}">
        <i class="nav-icon icon-notebook"></i>
        <span>Model Pelatihan</span>
    </a>
</li>

<li class="nav-item {{ Request::is('diklats*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklats.index') }}">
        <i class="nav-icon icon-badge"></i>
        <span>Diklat</span>
    </a>
</li>

<li class="divider"></li>
<li class="nav-title">Pengguna
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-user"></i>
        <span>Pengguna</span>
    </a>
</li>
