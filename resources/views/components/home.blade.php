<x-layout>
  <div class = mt-24>
  @include('partials._search')
  </div>

  <div class="lg:grid justify-center gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($personal_infos)==0)
    @if (count($personal_infos)==1)
    @foreach($personal_infos as $PersonalInfo)
    <x-student-card :PersonalInfo="$PersonalInfo" />
    @endforeach
    @endif      
    @else
        <p>No student found</p>
    @endunless
    
    </div> 
    <div class="mt-6 p-4">
        {{$personal_infos->links()}}
    </div>


</x-layout>