<div class="sidebar"> 
    <div class="sidebar-inner">
        <div class="logo-img">
            <img src="{{asset('assets/sidebar-logo.svg')}}" alt="">
        </div>
        <div class="list-sidebar-inner">
            <a class="{{ Route::is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}"><img src="{{asset('assets/active-dashboard.svg')}}" class="active-side" alt=""><img src="{{asset('assets/side-dashboard.svg')}}" class="side-biasa" alt="">Dashboard</a>
            <a class="{{ Route::is('liga.*') ? 'active' : '' }}" href="{{route('liga.index')}}"><img src="{{asset('assets/active-liga.svg')}}" class="active-side" alt=""><img src="{{asset('assets/side-liga.svg')}}" class="side-biasa" alt="">Liga</a>
            <a class="{{ Route::is('team.*') ? 'active' : '' }}" href="{{route('team.index')}}"><img src="{{asset('assets/active-team.svg')}}" class="active-side" alt=""><img src="{{asset('assets/side-team.svg')}}" class="side-biasa" alt="">Team</a>
            <a class="{{ Route::is('score.*') ? 'active' : '' }}" href="{{route('score.index')}}"><img src="{{asset('assets/active-scoreboard.svg')}}" class="active-side" alt=""><img src="{{asset('assets/side-scoreboard.svg')}}" class="side-biasa" alt="">Scoreboard Operator</a>
            <a class="{{ Route::is('splash.*') ? 'active' : '' }}" href="{{route('splash.index')}}"><img src="{{asset('assets/active-splash.svg')}}" class="active-side" alt=""><img src="{{asset('assets/side-splash.svg')}}" class="side-biasa" alt="">Splash Green</a>
            
        </div>
    </div>
    <div data-bs-target="#logoutModal" data-bs-toggle="modal" class="logout">
        <a >
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
        <path d="M13.0161 5.38948V4.45648C13.0161 2.42148 11.3661 0.771484 9.33107 0.771484H4.45606C2.42206 0.771484 0.772064 2.42148 0.772064 4.45648V15.5865C0.772064 17.6215 2.42206 19.2715 4.45606 19.2715H9.34107C11.3701 19.2715 13.0161 17.6265 13.0161 15.5975V14.6545" stroke="#E62129" stroke-width="1.56" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19.8096 10.0215H7.76859" stroke="#E62129" stroke-width="1.56" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.8812 7.10632L19.8092 10.0213L16.8812 12.9373" stroke="#E62129" stroke-width="1.56" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p>Logout</p>
        </a>
    </div>
</div>

@include('backoffice.components.modal.logout-modal')

