<div class="menu_wrapper">
    <nav id="menu">
        <ul id="menu-main-menu" class="menu">
            <li class="@if ($current=='inicio') current_page_item  @endif">
                <a href="{{ route('index.home') }}"><span>
                    <i style="font-size: 80%;" class="fas fa-home"></i> Inicio</span>
                </a>
            </li>
            <li class="@if ($current=='productos') current_page_item  @endif">
                <a href="{{ route('productos') }}"><span>
                    <i style="font-size: 80%;" class="fas fa-boxes"></i> Material</span>
                </a>
            </li>
            <li class="@if ($current=='bio') current_page_item  @endif">
                <a href="{{ route('biografia') }}"><span>
                    <i style="font-size: 80%;" class="fas fa-feather"></i> Biografía</span>
                </a>
            </li>
            <li class="@if ($current=='eventos') current_page_item  @endif">
                <a href="{{ route('eventos') }}"><span>
                    <i style="font-size: 80%;" class="fas fa-calendar-alt"></i> Eventos</span>
                </a>
            </li>
            <li class="@if ($current=='blog') current_page_item  @endif">
                <a href="#"><span>
                    <i style="font-size: 80%;" class="fab fa-blogger"></i> Blog</span>
                </a>
            </li>
            <li class="@if ($current=='contactame') current_page_item  @endif">
                <a href="#"><span>
                    <i style="font-size: 80%;" class="fas fa-mobile-alt"></i> Contáctame</span>
                </a>
            </li>
        </ul>
    </nav>
    <a class="responsive-menu-toggle" href="#">
        <i class='fas fa-menu' style="color:white"></i>
    </a>
</div>
