@hasanyrole('admin|moderator')
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="car-sport-outline"></ion-icon>
                    </span>
                    <span class="title">QuickDrive</span>
                </a>
            </li>

            <li>
                <a href="{{ url('dashboard') }}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('cars') }}">
                    <span class="icon">
                        <ion-icon name="car-outline"></ion-icon>
                    </span>
                    <span class="title">Cars</span>
                </a>
            </li>

            <li>
                <a href="{{ url('brands') }}">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="title">Brands</span>
                </a>
            </li>

            <li>
                <a href="{{ url('users') }}">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Users</span>
                </a>
            </li>

            <li>
                <a href="{{ url('contacts') }}">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <span class="title">Contact Us</span>
                </a>
            </li>

            <li>
                <a href="{{ url('reservations') }}">
                    <span class="icon">
                        <ion-icon name="card-outline"></ion-icon>
                    </span>
                    <span class="title">Reservations</span>
                </a>
            </li>

            <li>
                <a href="{{ url('profile') }}">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
@else
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="car-sport-outline"></ion-icon>
                    </span>
                    <span class="title">QuickDrive</span>
                </a>
            </li>

            <li>
                <a href="{{ url('dashboard-reservations') }}">
                    <span class="icon">
                        <ion-icon name="card-outline"></ion-icon>
                    </span>
                    <span class="title">Reservations</span>
                </a>
            </li>

            <li>
                <a href="{{ url('profile') }}">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
@endhasanyrole

<!-- ========================= Main ==================== -->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        {{-- <div class="user">
            <img src="{{ asset('img/customer01.jpg') }}" alt="">
        </div> --}}
        <div class="badge text-bg-primary fs-6">
            <span>{{auth()->user()->name}}</span>
        </div>


    </div>