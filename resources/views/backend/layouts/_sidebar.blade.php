
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{ url('panel/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      @if(Auth::user()->is_admin == 1)

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{ url('panel/user/list') }}">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li>

      

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{ url('panel/category/list') }}">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li>

      @endif

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'blog') collapsed @endif" href="{{ url('panel/blog/list') }}">
          <i class="bi bi-person"></i>
          <span>Blog</span>
        </a>
      </li>

      @if(Auth::user()->is_admin == 1)
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'page') collapsed @endif" href="{{ url('panel/page/list') }}">
          <i class="bi bi-person"></i>
          <span>Page</span>
        </a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'help') collapsed @endif" href="{{ url('panel/help/list') }}">
          <i class="bi bi-question-circle"></i>
          <span>Help</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'inbox') collapsed @endif" href="">
          <i class="bi bi-envelope"></i>
          <span>Inbox</span>
        </a>
      </li>

      

     

    </ul>

  </aside>
