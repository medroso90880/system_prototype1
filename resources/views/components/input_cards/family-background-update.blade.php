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
    <script>
        function addField( table ){

var tableRef = document.getElementById(table);
var newRow   = tableRef.insertRow(-1);

var newCell  = newRow.insertCell(0);
var newElem = document.createElement( 'input' );
newElem.setAttribute("name", "links");
newElem.setAttribute("type", "text");
newCell.appendChild(newElem);

newCell = newRow.insertCell(1);
newElem = document.createElement( 'input' );
newElem.setAttribute("name", "keywords");
newElem.setAttribute("type", "text");
newCell.appendChild(newElem);

newCell = newRow.insertCell(2);
newElem = document.createElement( 'input' );
newElem.setAttribute("name", "violationtype");
newElem.setAttribute("type", "text");
newCell.appendChild(newElem);

newCell = newRow.insertCell(3);
newElem = document.createElement( 'input' );
newElem.setAttribute("type", "button");
newElem.setAttribute("value", "Delete Row");
newElem.setAttribute("onclick", 'SomeDeleteRowFunction(this)')
newCell.appendChild(newElem);

function myFunction() {
  document.getElementById("tbl").deleteRow(0);
}}
    </script>
    <div>
        <table id="tbl">
            <tr>
               <td><input type="text" name="links" /></td>
               <td><input type="text" name="keywords" /></td> 
               <td><input type="text" name="violationtype" /></td>
               <td><button onclick="myFunction()">Delete Row</button></td>          
             </tr>
         </table>
         <input type="button" class="button" value="Add another line" onclick="addField('tbl');" />
     
    </div>
    
</form>
