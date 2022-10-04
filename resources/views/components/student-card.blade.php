@props(['PersonalInfo'])

<x-card>
    <div class="flex justify-center">
    <div>
        
        <img
        class="hidden w-48 mr-6 md:block"
        src="{{$PersonalInfo->picture ? asset('storage/' . $PersonalInfo->picture) : asset('images/legoshi.jpg')}}"
        alt=""
    />
    </div>
    <div class="justify-center mt-4">
        <div>
            <h3 class="text-2xl text-center font-bold">
                <a href="/personal-info/{{$PersonalInfo->id}}">{{$PersonalInfo->first_name}} {{$PersonalInfo->last_name}}</a>
            </h3>
            <h3 class="text-2xl text-center font-bold">
                {{$PersonalInfo->id}}
            </h3>
            <div class="text-xl text-center">{{$PersonalInfo->sex}}</div>
            <div class="text-lg">
                <i class="fa-solid fa-location-dot"></i>{{$PersonalInfo->permanent_add}}
            </div>
        </div>
    </div>
    </div>
</x-card>