<li>
    @if($navigationItem['download'] == true)
    <a
        href="{{$navigationItem['url']}}" class="block py-2 pr-4 pl-3 {{$navbarItemStyles}}"
        download="{{$navigationItem['url']}}"
        >{{$navigationItem['label']}}</a>
    @else
    <a
        href="{{$navigationItem['url']}}" class="{{Request::is($navigationItem['pageType']) ? 'text-gray-900 py-2 px-4 rounded bg-neutral-200 lg:px-3 dark:bg-gray-700 dark:text-white' : $navbarItemStyles}} block "
        >{{$navigationItem['label']}}</a>
    @endif

</li>