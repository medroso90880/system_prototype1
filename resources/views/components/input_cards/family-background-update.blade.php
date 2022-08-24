<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        FAMILY BACKGROUND
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">
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


    <input id='cell1' type="text"/>
    <input id='cell2' type="text"/>
    <input id='cell3' type="text"/>
    <input id='cell4' type="text"/>
    <input id='cell5' type="text"/>
    
    <input type="button" onclick="insRow()" value="Add"/>    
    <table id="myTable" class="table-fixed border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
            <tr style="background-color: powderblue;">
              <th class="border border-gray-400 px-0 py-2 w-44">Brother/Sister</th>
              <th class="border border-gray-400 px-0 py-2 w-44">Age</th>
              <th class="border border-gray-400 px-0 py-2 w-44">Educational Attainment</th>
              <th class="border border-gray-400 px-0 py-2 w-44">School</th>
              <th class="border border-gray-400 px-0 py-2 w-44">Occupation</th>
            </tr>
          </thead>

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
    var c= x.insertCell(3);
    var d= x.insertCell(4);
    var e= x.insertCell(5);
    var f= x.insertCell(6);
    a.innerHTML=document.getElementById("cell1").value;
    b.innerHTML=document.getElementById("cell2").value;
    c.innerHTML=document.getElementById("cell3").value;
    d.innerHTML=document.getElementById("cell4").value;
    e.innerHTML=document.getElementById("cell5").value;
    f.innerHTML='<input type="button" value="Delete" onclick="deleteRow(this)"/>';
    }
    
    
    </script>
    </div>
    
</form>
