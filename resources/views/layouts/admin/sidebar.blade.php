<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">BACKEND SITE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">BE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="/admin/artikel"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manage</li>
            <li class={{ (request()->is('admin/user-manage')) ? 'active' : '' }}><a class="nav-link" href="{{ url('/admin/user-manage') }}"><i class="fas fa-scroll"></i> <span>User Manage</span></a></li>
            <li
            @if (request()->is('admin/bidang-studi'))
            class="dropdown active"
            @endif>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Komponen Artikel</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ (request()->is('admin/bidang-studi')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/bidang-studi') }}">Bidang Studi</a></li>
                    <li class="{{ (request()->is('admin/kompetensi-keahlian')) ? 'active' : '' }}"><a class="nav-link" href="{{ url('/admin/kompetensi-keahlian') }}">Kompetensi Keahlian</a></li>
                </ul>
            </li>
    </aside>
</div>
