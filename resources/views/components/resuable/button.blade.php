<a
    href="{{$btnLink}}"
    @if($newTab)
    target="_blank"
    @endif
    @if($isPrimary)
    class="{{$buttonClasses}} text-white bg-primary-700 hover:bg-primary-800 focus:ring-primary-900"
    @else
    class="{{$buttonClasses}} text-black bg-secondary-700 hover:bg-secondary-800 focus:ring-secondary-900"
    @endif
    >
    {{$btnText}}
    @if($hasArrow == true)
    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    @endif
</a>