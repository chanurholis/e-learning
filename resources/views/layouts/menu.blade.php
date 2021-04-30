<!-- Jenis Diklat -->
<li class="nav-item {{ Request::is('diklatJenis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatJenis.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Jenis Diklat</span>
    </a>
</li>

<li class="nav-item {{ Request::is('diklatBidangPelatihans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklatBidangPelatihans.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Bidang Pelatihan</span>
    </a>
</li>

<li class="nav-item {{ Request::is('diklats*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('diklats.index') }}">
        <i class="nav-icon icon-badge"></i>
        <span>Diklat</span>
    </a>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-user"></i>
        <span>Pengguna</span>
    </a>
</li>
