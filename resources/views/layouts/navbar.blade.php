<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #EB5438;">
  <a class="navbar-brand font-weight-bold text-white" href="/">Evenk</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
            <div class="input-icons">
                <i class="fas fa-search search-icon"></i>
                <div id="sevents">
                  @csrf
                  <input type="search" class="mr-sm-2 border-0 font-weight-bold" name="sevent_name" id="sevent_name" placeholder="Search" aria-label="Search">
                    <div id="seventList">

                    </div>
                </div>
            </div>
         </form>
      <li class="nav-item navboy">
        <a class="nav-link text-white" href="/browse"> Browse Events <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item navboy">
        <a class="nav-link text-white" href="/feed">Event Feed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/chat"><i class="fas fa-envelope"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/locations"><i class="fas fa-bell"></i></a>
      </li>


    </ul>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="/locations/create">
              Register Location
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/locations">
              Create Event
          </a>
        </li>


        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i class="far fa-user"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/profiles/{{ auth()->id() }}" class="dropdown-item">Profile</a>
                <a href="/profiles/{{ auth()->id() }}/tags/create" class="dropdown-item">Your Tags</a>
                <a href="/profiles/{{ auth()->id() }}/interested_events" class="dropdown-item">Interested Events</a>
                <a href="/profiles/{{ auth()->id() }}/goingEvents" class="dropdown-item">Going Events</a>
                <a href="/profiles/{{ auth()->id() }}/locations" class="dropdown-item">Your Locations</a>
                <a href="/profiles/{{ auth()->id() }}/events" class="dropdown-item">Your Events</a>
                <a href="/profiles/{{ auth()->id() }}/settings" class="dropdown-item">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="dropdown-divider"></div>

            </div>
        </li>
    </ul>
  </div>
</nav>
