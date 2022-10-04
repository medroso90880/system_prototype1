<x-layout>
    <x-card class="p-10 fixed-center rounded max-w-xl mx-auto mt-24">
        <div class="flex flex-col items-center">
            <header class="text-center">
                <h2 class="text-2xl text-color-#ae0000 font-bold uppercase mb-6">
                    CUMULATIVE RECORDS FORM
                </h2>
            </header>
            <div>
                <a href="{{ route('google-auth') }}" class="btn btn-neutral btn-icon bg-blue-400">
                    <div class="flex justify-center">
                        <span class="btn-inner--icon"><img src="{{ asset('images/google.svg') }}" class="mr-2"></span>
                        <span class="btn-inner--text mt-2 text-white font-bold">Login with Google</span>
                    </div>
                </a>
            </div>
        </div>
    </x-card>
</x-layout>
