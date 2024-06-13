<div class="flex justify-center items-center">
    @foreach($skills as $skill)
    <div class="flex flex-col justify-center items-center text-white w-[12rem]">
        <p>{{$skill['skill']}}</p>
        <p>{{$skill['description']}}</p>
        <div class="h-[8rem]">
            <img class="h-full object-contain" src="{{$skill['image']}}" alt="{{$skill['altText']}}">
        </div>
    </div>
    @endforeach
</div>