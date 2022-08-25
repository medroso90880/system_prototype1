<x-card class="p-10 rounded max-w-7xl mx-auto mt-12">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        FAMILY BACKGROUND
    </h2>
</header>

{{-- <form method="POST" action="/listings" enctype="multipart/form-data"> --}}
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
    <div class="flex justify-center mt-8 mb-2">
        <label for="mother" class="font-bold inline-block">
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
    <div class="mb-2">
        
    </div>
    <table id="myTable" class="p-5">
    <thead>
          <tr style="background-color: powderblue;" class="text-center">
            <th class="border border-gray-400 py-2 w-60">Brother/Sister</th>
            <th class="border border-gray-400 py-2 w-20">Age</th>
            <th class="border border-gray-400 py-2 w-44">Educational Attainment</th>
            <th class="border border-gray-400 py-2 w-72">School</th>
            <th class="border border-gray-400 py-2 w-44">Occupation</th>
            {{-- <th></th> --}}
          </tr>
    </thead>
        <tr>
            <th><input id='cell1' type="text" class="py-1 w-60"/></th>
            <th><input id='cell2' type="text" class="py-1 w-20 "/></th>
            <th><input id='cell3' type="text" class="py-1 w-44"/></th>
            <th><input id='cell4' type="text" class="py-1 w-72"/></th>
            <th><input id='cell5' type="text" class="py-1 w-44"/></th>
            <th><input type="button" onclick="insRow()" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm 
            w-20 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/></th>
    </table>
    <br> 
    <p id="demo"></p>
    
    <script>
    
        //For delete row
        
        function deleteRow(r)
        {
        var i=r.parentNode.parentNode.rowIndex;
        document.getElementById('myTable').deleteRow(i);
        }
        
        //for insert row
        
        function insRow()
        {
        var x=document.getElementById('myTable').insertRow(document.getElementById('myTable').rows.length);
        var a= x.insertCell(0);
        var b= x.insertCell(1);
        var c= x.insertCell(2);
        var d= x.insertCell(3);
        var e= x.insertCell(4);
        var del= x.insertCell(5);
        
        a.innerHTML=document.getElementById("cell1").value;
        b.innerHTML=document.getElementById("cell2").value;
        c.innerHTML=document.getElementById("cell3").value;
        d.innerHTML=document.getElementById("cell4").value;
        e.innerHTML=document.getElementById("cell5").value;
        
        del.innerHTML='<input type="button" value="Delete" class="p-2 bg-blue-700 font-medium rounded-lg text-sm w-20 py-2 text-center rounded-lg rounded " onclick="deleteRow(this)"/>';
        document.getElementById("cell1").value = "";
        document.getElementById("cell2").value = "";
        document.getElementById("cell3").value = "";
        document.getElementById("cell4").value = "";
        document.getElementById("cell5").value = "";
        }
        </script>
</x-card>