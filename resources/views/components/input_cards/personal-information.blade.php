<x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
    <form method="POST" action="/register/store" enctype="multipart/form-data">
        @csrf
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">
                PERSONAL INFORMATION
            </h2>
        </header>

    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label for="last_name" class="inline-block mb-2">Family Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full " name="last_name"
                value="{{ old('last_name') }}" />
        </div>
        <div>
            <label for="first_name" class="inline-block mb-2">First Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name"
                value="{{ old('first_name') }}" />
        </div>
        <div>
            <label for="middle_name" class="inline-block mb-2">Middle Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="middle_name"
                value="{{ old('middle_name') }}" />
        </div>
    </div>

    <!--Sex and contact number -->
    <div class="mb-2 flex justify-center gap-10">
        <div>
            <label for="sex" class="inline-block mb-2">Sex</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-24" name="sex"
                value="{{ old('sex') }}" />
        </div>
        <div>
            <label for="age" class="inline-block mb-2">Age</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-24" name="age"
                value="{{ old('age') }}" />
        </div>
        <div>
            <label for="contact_number" class="inline-block mb-2">Contact No.</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contact_number"
                value="{{ old('contact_number')}}" />
        </div>
    </div>

    <!--RELIGION, EMAIL ADD, CELL#-->
    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label for="cell_number" class="inline-block mb-2">Cellphone No.</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="cell_number"
                value="{{ old('cell_number') }}" />
        </div>

        <div>
            <label for="nationality" class="inline-block mb-2">Nationality</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="nationality"
                value="{{ old('nationality') }}" />

        </div>
    </div>
    <div class="mb-2">
        <div>
            <label for="email" class="inline-block mb-2">E-mail Address</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ old('email') }}" />
        </div>

        <div>
            <label for="religion" class="inline-block mb-2">Religion</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="religion"
                value="{{ old('religion') }}" />
        </div>
    </div>


    <div>
        <label for="permanent_add" class="inline-block mb-2">Permanent Address</label>

        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="permanent_add"
            value="{{ old('permanent_add') }}" />

    <div class ='flex justify-center space-x-14 p-2'>
        <div>
            <label for="date_of_birth" class="inline-block mb-2">Date of birth</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker name="date_of_birth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
              </div>

        </div>
        <div>
            <label for="place_of_birth" class="inline-block mb-2">Place of Birth</label>

            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="place_of_birth"
                value="{{ old('place_of_birth') }}" />

        </div>
    </div>
    <div class="mb-6 flex justify-center p-10">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Submit
        </button>
    </div>
    </div>
</form>
</x-card>

