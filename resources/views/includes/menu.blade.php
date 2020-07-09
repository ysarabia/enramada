
	<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @php $locale = session()->get('locale'); @endphp
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link navbar-toggle-pair" href="#">@lang('messages.menu.home')</a>
      <a class="nav-item nav-link navbar-toggle-spare" href="#">@lang('messages.menu.about_us')</a>
      <a class="nav-item nav-link navbar-toggle-pair" href="#">@lang('messages.menu.menu')</a>
      <a class="nav-item nav-link navbar-toggle-spare" href="#">@lang('messages.menu.booking')</a>
      <a class="nav-item nav-link navbar-toggle-pair" href="#">@lang('messages.menu.gallery')</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle navbar-toggle-spare" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{strtoupper($locale)}}
        </a>
        <div class="dropdown-menu toggle-options" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="lang/es"><span>ES</span> <img style="padding-left: 25px;vertical-align: middle;" src={{ ('assets/images/mexico-flag-icon-32.png') }}></a>
          <a class="dropdown-item" href="lang/en"><span>EN</span> <img style="padding-left: 25px;vertical-align: middle;" src={{ ('assets/images/canada-flag-icon-32.png') }}></a>
        </div>
      </li>
    </div>
  </div>
</nav>