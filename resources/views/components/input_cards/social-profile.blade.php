<x-card class="p-10 rounded max-w-2xl mx-auto mt-12">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        SOCIAL PROFILE
    </h2>
</header>

<!--Name-->
{{-- <form method="POST" action="/listings" enctype="multipart/form-data"> --}}
    <div>
        <h4 class="font-bold uppercase mb-6">Do you have real friends:</h4>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">Of your age?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">Older than you?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">Younger than you?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
    </div>
    <div>
        <h4 class="font-bold uppercase mb-6 mt-6">Are most of your friends:</h4>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">Boys?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">Girls?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">From another school?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
        <div class="px-10 mb-4 flex justify-between">
            <label class="inline-block mb-2">From this school?</label>
            <select class="mr-16" style="background-color: powderblue">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
    </div>
    <div>
        <h4 class="font-bold uppercase mb-6 mt-6">List down your best friends at PSHS:</h4>
        <input type="Text" class="border border-gray-200 rounded p-2 w-full" name="company"/>
    </div>
    <div>
        <h4 class="font-bold uppercase mb-6 mt-6">List down your hobbies, special talents,
             skills, interests or leisure time activities:</h4>
        <input type="Text" class="border border-gray-200 rounded p-2 w-full" name="company"/>
    </div>
</x-card>