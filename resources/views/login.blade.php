
<x-layout_login>

    <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="" class="flex items-center">
            <img src='images/logo1.png' class="mr-3 h-6 sm:h-12" alt="">
        </a>
    </nav>
<x-card class="p-10 rounded max-w-xl mx-auto mt-24">

    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            LOGIN FORM
        </h2>
    </header>

    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
    </div> 
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
    </div>

    <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
        <select id="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a user type</option>
            <option value="admin">Admin</option>
            <option value="gyidance">Guidance</option>
            <option value="registrar">Registrar</option>
            <option value="d_o">D.O.</option>
            <option value="student">Student</option>
        </select>
    <div class="mt-16"> 
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        LOGIN</button>
       
    </div>
</x-card>

</x-layout_login>