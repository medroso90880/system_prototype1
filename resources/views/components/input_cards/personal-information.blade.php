<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        PERSONAL INFORMATION
    </h2>
</header>

<!--Name-->
<form method="POST" action="/listings" enctype="multipart/form-data">
    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label for="company" class="inline-block mb-2">Family Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full " name="company"
                value="{{ old('company') }}" />
        </div>
        <div>
            <label for="company" class="inline-block mb-2">First Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>
        <div>
            <label for="company" class="inline-block mb-2">Middle Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>
    </div>

    <!--Sex and contact number -->
    <div class="mb-2 flex justify-center gap-10">
        <div>
            <label for="company" class="inline-block mb-2">Sex</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-24" name="company"
                value="{{ old('company') }}" />
        </div>
        <div>
            <label for="company" class="inline-block mb-2">Age</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-24" name="company"
                value="{{ old('company') }}" />
        </div>
        <div>
            <label for="company" class="inline-block mb-2">Contact No.</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>
    </div>

    <!--RELIGION, EMAIL ADD, CELL#-->
    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label for="company" class="inline-block mb-2">Cellphone No.</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>

        <div>
            <label for="company" class="inline-block mb-2">Nationality</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />

        </div>
    </div>
    <div class="mb-2">
        <div>
            <label for="company" class="inline-block mb-2">E-mail Address</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>

        <div>
            <label for="company" class="inline-block mb-2">Religion</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{ old('company') }}" />
        </div>
    </div>


    <div>
        <label for="company" class="inline-block mb-2">Permanent Address</label>

        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
            value="{{ old('company') }}" />

    </div>
</form>
