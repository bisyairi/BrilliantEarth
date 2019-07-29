<div class="col-md-10 col-sm-9 hidden-xs">
    <div class="mainmenu text-center">
        <nav>
            <ul id="nav">
                @foreach($items as $menu_item)
                <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
