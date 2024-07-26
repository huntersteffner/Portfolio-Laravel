<section class="pb-4 border-2 border-solid border-black rounded-lg relative dark:bg-gray-900 dark:border-white">
  <div class="h-[15rem] w-full">
    <img class="object-cover h-full w-full rounded-t-md" src="{{$item['image']}}" alt="{{$item['altText']}}">
  </div>
  <div class="absolute top-0 left-0 px-2 py-1 text-white {{$item['projectType'] == 'Professional Work' ? 'bg-red-700' : 'bg-green-700'}} rounded">
    <p class="text-lg font-bold">{{$item['projectType']}}</p>
  </div>
  <h3 class="text-2xl font-bold leading-tight">
    {{$item['title']}}
  </h3>
  <div class="h-[12rem] text-left px-4">
    <p class="text-lg font-normal">
      {{$item['description']}}
    </p>
  </div>
  <x-resuable.button
    :btnText="'View Site'"
    :btnLink="$link"
    :isPrimary="false"
    :hasArrow="false"
    :newTab="true"
  ></x-resuable.button>
  @if($item['repoAvailable'] == true)
  <x-resuable.button
    :btnText="'View Repo'"
    :btnLink="$repoLink"
    :isPrimary="true"
    :hasArrow="false"
    :newTab="true"
></x-resuable.button>
  @endif
</section>