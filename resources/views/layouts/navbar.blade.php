<!-- NAVBAR -->
<nav>
    <i class='bx bx-menu toggle-sidebar'></i>
    <div class="profile">
        <a class='nama' href="#">Admin</a>
        <span class="divider"></span>
        <img src="{{ asset('admin-dashboard/admin-icon.jpg') }}" alt="">
        <ul class="profile-link">
            <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
            <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
            <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('') }}<i class='bx bxs-log-out-circle'></i> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</nav>
<!-- NAVBAR -->
