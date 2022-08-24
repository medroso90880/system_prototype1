  
   <x-card class="p-5 rounded max-w-8xl mx-auto mt-8 flex">
      <head>
         <title>Bootstrap Example</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
       </head>
      
   <aside class="w-64 mt-32" aria-label="Sidebar">
       <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
          <ul class="space-y-2">
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                   <span class="ml-3">Dashboard</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                   <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                   <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                </a>
             </li>
             <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                   <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                   <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                </a>
             </li>
          </ul>
       </div>
    </aside>
   
   </x-layout_dashboard>
   <x-card class="mx-5 my-5 mt-28 pt-4 w-full border-transparent">
      
   <x-card class="p-10 rounded max-w-8xl mt-5 flex">
   
      <div class="mb-2">
         <img class="justify-center w-60 l-60" src="images/legoshi.jpg"/></a>
     </div>
         <div class="mt-14">
         <h1 class="text-5xl font-bold uppercase mb-6 px-10">181-01881</h1>
         <h2 class="text-2xl font-bold uppercase mb-6 px-10">Jasper James Daquila</h2>
         
         </div>
     </div>
   
   </x-card>

{{-- student info, family background, health, residence, educ back, social back, student self assesment, extra curricular, vocational plan, councelor's notes, tardiness records, offense records --}}

   </x-card>  
   <div class="flex justify-center mt-20">
         <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Personal Informnation</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Family Background</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Health Information</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Residence Information</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Educational Background</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Social Background</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Student Self Assesment </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Extra Curricular</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab">Vocational Planning</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab">Councelor's Notes</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab">Tardiness Records</a>
            </li> 
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tabs-12" role="tab">Offenses Records</a>
            </li>
         </ul>
      </div>
   {{-- <x-card class="p-5 rounded max-w-7xl mx-auto mt-8 flex justify-center flex"> --}}
      
         
         <!-- Tab panes -->
         <div class="flex justify-center">
         <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-12">
                  {{-- <x-personal-information>
                  </x-personal-information> --}}
                  perosonal information
              </x-card> 
            </div>
            <div class="tab-pane" id="tabs-2" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-12">
                  {{-- <x-family-background>
                  </x-family-background> --}}
                  family background
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-3" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-12">
                  {{-- <x-HealthPhysicalDev>
                  </x-HealthPhysicalDev> --}}
                  health physical dev
              </x-card>
              <div class="tab-pane" id="tabs-4" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
                  {{-- <x-residence-info>
                  </x-residence-info> --}}
                  residence info
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-5" role="tabpanel">
               {{-- <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
                  {{-- <x-educ-background>
                  </x-educ-background> --}}
                  educational bg
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-6" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
                  {{-- <x-SocialProfile>
                  </x-SocialProfile> --}}
                  social profile
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-7" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
                  {{-- <x-student-self-assessment>
                  </x-student-self-assessment> --}}
                  socail profile
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-8" role="tabpanel">
               <x-card class="p-10 rounded max-w-6xl mx-auto mt-24">
                  {{-- <x-extra-curricular>
                  </x-extra-curricular> --}}
                  extra-curricular
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-9" role="tabpanel">
               <x-card class="p-10 rounded max-w-2xl mx-auto mt-24">
                  {{-- <x-VocationalPlanning>
                  </x-VocationalPlanning> --}}
                  vocational planning
              </x-card>
            </div>
            <div class="tab-pane" id="tabs-10" role="tabpanel">
                  
            </div>
            <div class="tab-pane" id="tabs-11" role="tabpanel">
               
            </div>
            <div class="tab-pane" id="tabs-12" role="tabpanel">
               
            </div>
         </div>
         </div>
      {{-- </x-card> --}}
   </x-card>