<li>
    @if($navigationItem['download'] == true)
    <a
        href="{{$navigationItem['url']}}" class="block py-2 pr-4 pl-3 {{$navbarItemStyles}}"
        download="{{$navigationItem['url']}}"
        >{{$navigationItem['label']}}</a>
    @else
    <a
        href="{{$navigationItem['url']}}" class="{{Request::is($navigationItem['pageType']) ? 'rounded lg:bg-transparent lg:p-0 dark:text-white' : $navbarItemStyles}} block py-2 pr-4 pl-3"
        >{{$navigationItem['label']}}</a>
    @endif

</li>