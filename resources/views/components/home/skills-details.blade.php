<div class="flex justify-start items-center overflow-x-scroll md:flex-wrap md:justify-center md:overflow-x-auto">
    @foreach($skills as $skill)
    <div class="flex flex-col justify-center items-center w-[15rem] m-3">
        <p class="text-2xl font-bold">{{$skill['skill']}}</p>
        <div class="h-[8rem] w-[8rem] my-6">
            <img class="h-full w-full object-contain" src="{{$skill['image']}}" alt="{{$skill['altText']}}">
        </div>
    </div>
    @endforeach
</div>