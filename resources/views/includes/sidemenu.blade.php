<nav id="sidemenu" class="sidemenu-collapsed">
  <ul>
    <a href="#" class='sidemenu-item m-expand'>
      <li class='hamburger-icon'></li>
    <a id="search"  class='sidemenu-item light {{ Request::is('search') ? 'active' : '' }}'>
    <li class='search-icon'></li><span class="expanded-element alternative">Search</span>
    </a>
    <a id="faq" class='sidemenu-item light {{ Request::is('faq') ? 'active' : '' }}'>
    <li class='faq-icon'></li><span class="expanded-element alternative">FAQ</span>
    </a>
    <a id="aboutus" href="{{ secure_url('about') }}" class="sidemenu-item light {{ Request::is('about') ? 'active' : '' }}">
    <li class='envelope'></li><span class="expanded-element alternative">About us</span>
    </a>
    <hr>
    <a href="{{ secure_url('productlist/dogs') }}" class='sidemenu-item'>
    <li class='dog-icon {{ Request::is('productlist/dogs*') ? 'active' : '' }}'></li><span class="expanded-element">Dogs</span>
    </a>
    <a href="{{ secure_url('productlist/cats') }}" class='sidemenu-item'>
    <li class='cat-icon {{ Request::is('productlist/cats*') ? 'active' : '' }}'>
    </li><span class="expanded-element">Cats</span>
    </a>
    <a href="{{ secure_url('productlist/fish') }}" class='sidemenu-item'>
    <li class='fish-icon {{ Request::is('productlist/fish*') ? 'active' : '' }}'></li><span class="expanded-element">Fish</span>
    </a>
    <a href="{{ secure_url('productlist/birds') }}" class='sidemenu-item'>
    <li class='owl-icon {{ Request::is('productlist/birds*') ? 'active' : '' }}'></li><span class="expanded-element">Birds</span>
    </a>
    <a href="{{ secure_url('productlist/hamsters') }}" class='sidemenu-item'>
    <li class='hamster-icon {{ Request::is('productlist/hamsters*') ? 'active' : '' }}'></li><span class="expanded-element">Small animals</span>
    </a>
  </ul>
  <a href="{{ secure_url('/') }}">
  <span class='brand-name collapsed-element'>K<span class='brand-name-expanded'>OWLOON</span></span>
  </a>
</nav>
