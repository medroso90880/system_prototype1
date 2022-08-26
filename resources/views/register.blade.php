<x-layout>
    <form method="POST" action="/register/store" enctype="multipart/form-data">
        @csrf
        <x-input_cards.personal-information/>
    <form>

    {{-- <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.family-background/>
    </x-card>

    <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.health/>
    </x-card>
    <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.residence-info/>
    </x-card>

    <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.education-back/>
    </x-card>

    <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.social-profile/>
    </x-card>

    <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
        <x-input_cards.student-self-assessment/>
    </x-card> --}}


 

</x-layout>
