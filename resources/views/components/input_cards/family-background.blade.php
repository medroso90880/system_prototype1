<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        FAMILY BACKGROUND
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">
    <div class="flex justify-between font-bold">
        <label for="father" class="inline-block mb-2 ml-64 pl-3">
            Father
        </label>
        <label for="mother" class="inline-block mb-2 mr-20">
            Mother</label>
    </div>
    <div class="space-y-2">
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-36">
                    Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-36 pr-3.5">
                    Age</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-3 pr-1.5">
                    Educational Attainment</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-8 pr-1">
                    School Last Attended</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-24 pr-2">
                    Occupation</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-14">
                    Company Address</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
        <div class="gap-2">
            <div>
                <label for="mother" class="inline-block py-2 mr-12 pr-0.5">
                    Contact Number(s)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
                <input type="text" class="border border-gray-200 rounded p-2 w-48" name="company"
                    value="{{ old('company') }}" />
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8 mb-5">
        <label for="mother" class="font-bold inline-block py-2">
            Parent's Marital status</label>
    </div>
    <div class="flex justify-center gap-5">
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Married in church</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Married civilly</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Separated</label>
        </div>
    </div>
    <div class="flex justify-center gap-5">
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Divorced</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Widowed</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block mb-2">Others(specify)</label>
            <input type="text" class="border border-gray-200 rounded" />
        </div>
    </div>
    <div>
        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Dropdown button <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <!-- Dropdown menu -->
        <div id="dropdown"
            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>
    </div>
    
</form>
