<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    
    <!-- Settings Dropdown -->
    @auth
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                
            </x-slot>
            
            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <div class="account">
                    <p style="color: rgb(255, 255, 255); font-family:'Segoe UI'; font-size:2rem; font-weight:200; ">You must <a style="color: rgb(53, 3, 255); font-family:'Segoe UI'; font-size:2rem; text-transform:uppercase;" href="{{ route('login') }}">log in</a> to upload your sketches.</p>
                </div>
            @endauth
            
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    
                </button>
            </div>
        </div>
    </div>
    
    @auth
        <div class="account">
            <!-- Responsive Navigation Menu -->
            <ul>

            <!-- Responsive Settings Options -->
            
            <li class="items">
                 <h3 class="h3">You are Logged in !!</h3><br>
                  <h1 class="name"> 
                      Name:&nbsp;{{ Auth::user()->name }}<br>
                      Email:&nbsp;{{ Auth::user()->email }}
                    </h1>  
              
            </li>
            </ul>
                 <div class="profile">

                     
                     <x-responsive-nav-link style="color:white; " :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    
                    
                    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <x-responsive-nav-link style="color:rgb(226, 106, 106); " :href="route('logout')"
                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </div>
                    </form>
                
          
        </div>
    @endauth
        
</nav>
