@props(['PersonalInfo'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl text-center">
                <a href="/personal-infos/{{$PersonalInfo->id}}">{{$PersonalInfo->first_name}}</a>
            </h3>
            <div class="text-xl text-center font-bold mb-4">{{$PersonalInfo->sex}}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$PersonalInfo->permanent_add}}
            </div>
        </div>
    </div>
</x-card>