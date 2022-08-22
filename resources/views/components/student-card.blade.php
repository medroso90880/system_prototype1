@props(['personal_info'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl text-center">
                <a href="/personal_infos/{{$personal_info->id}}">{{$personal_info->first_name}}</a>
            </h3>
            <div class="text-xl text-center font-bold mb-4">{{$personal_info->sex}}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$personal_info->permanent_add}}
            </div>
        </div>
    </div>
</x-card>