<div class="flex justify-center mt-20">
   <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Personal Informnation</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Vocational Planning</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Councelor's Notes</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Tardiness Records</a>
      </li> 
      <li class="nav-item">
         <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Offenses Records</a>
      </li>
   </ul>
</div>

{{-- <x-card class="p-5 rounded max-w-7xl mx-auto mt-8 flex justify-center flex"> --}}

   
   <!-- Tab panes -->
   <div class="">
   <div class="tab-content">

      <div class="tab-pane active" id="tabs-1" role="tabpanel">

         <x-full-information/>

         </div>

      {{-- TAB 2 --}}
      <div class="tab-pane" id="tabs-2" role="tabpanel">
         
      </div>

      {{-- TAB 3 --}}
      <div class="tab-pane" id="tabs-3" role="tabpanel">
            <x-input_cards.counselor-notes/>
      </div>

      {{-- TAB 4 --}}
      <div class="tab-pane" id="tabs-4" role="tabpanel">
         
      </div>
      {{-- TAB 5 --}}
      <div class="tab-pane" id="tabs-5" role="tabpanel">
         
      </div>
      
         
      </div>
   </div>
   </div>
{{-- </x-card> --}}