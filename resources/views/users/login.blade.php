<x-layout>
    <x-card class="p-10 fixed-center rounded max-w-xl mx-auto mt-24">
    <div class="mt-1"> 
        <a href="/">
        <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
  <span class="sr-only">Icon description</span>
  
</button>
        </a>
           
     </div>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            LOGIN FORM
        </h2>
    </header>

    <form method="POST" action="/users/authenticate">
        @csrf
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
        <input type="text" name="email" value="{{old('email')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{message}}</p>    
        @enderror
    </div> 

    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
        <input type="password" name="password" value="{{old('password')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
       
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{message}}</p>    
        @enderror
    </div>
    <div clas="mb-6">
    <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an option</label>
        <select name="position" value="{{old('position')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a user type</option>
            <option value="admin">Admin</option>
            <option value="gyidance">Guidance</option>
            <option value="registrar">Registrar</option>
            <option value="d_o">D.O.</option>
            <option value="student">Student</option>
        </select>

        @error('position')
        <p class="text-red-500 text-xs mt-1">{{message}}</p>    
        @enderror
    </div>
    <div class="mt-16"> 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        LOGIN</button>       
    </div>
    </form>
</x-card>
</x-layout>


    
