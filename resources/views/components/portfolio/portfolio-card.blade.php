<section class="pb-4 border-2 border-solid border-white rounded-lg relative">
  <div class="h-[15rem] w-full">
    <img class="object-cover h-full w-full rounded-t-md" src="{{$item['image']}}" alt="{{$item['altText']}}">
  </div>
  <div class="absolute top-0 left-0 px-2 py-1 text-white {{$item['projectType'] == 'Professional Work' ? 'bg-red-700' : 'bg-green-700'}} rounded opacity-85">
    <p class="text-lg font-bold">{{$item['projectType']}}</p>
  </div>
  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
    {{$item['title']}}
  </h3>
  <div class="h-[12rem]">
    <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
      {{$item['description']}}
    </p>
  </div>
  <a href="{{$item['deployedSite']}}" target="_blank" title=""
    class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
    role="button">
    View Site
    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
      fill="currentColor">
      <path fill-rule="evenodd"
        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
        clip-rule="evenodd" />
    </svg>
  </a>
  @if($item['repoAvailable'] == true)
  <a href="{{$item['repoLink']}}" target="_blank" title=""
  class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
  role="button">
  View Repo
    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
      fill="currentColor">
      <path fill-rule="evenodd"
        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
        clip-rule="evenodd" />
    </svg>
  </a>
  @endif
</section>