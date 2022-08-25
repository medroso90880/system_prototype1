<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6 px-2 rounded">
        EDUCATIONAL BACKGROUND
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">

    <div class="mb-8 justify-center">
    
        <label
            class="inline-block py-2 pr-1 pl-1">Honors/Awards Reeived</label> 
            <input
                type="text"
                class="border border-gray-140 rounded p-1 w-60 pr-2 space-x-2"
                />
                <select>
                    <option>--select answer--</option>
                    <option>Sectarian</option>
                    <option>Non-Sect</option>
                </select>
                
    </div>            
    <div class="mb-2 justify-center">
                <table id="myTableA" class=" border-collapse p-5 w-full">
                    <thead>
                          <tr style="background-color: powderblue;" class="text-center">
                            <th class="border border-gray-400 py-2 w-40">Grade Level</th>
                            <th class="border border-gray-400 py-2 w-64">Section</th>
                            <th class="border border-gray-400 py-2 w-80">Scholarship Status</th>
                            <th class="border border-gray-400 py-2 w-80">Academic Status</th>
                            
                          </tr>
                    </thead>
                        <tr>
                            <th><input id='cell1A' type="text" class="py-2 w-full"/></th>
                            <th><input id='cell2A' type="text" class="py-2 w-full "/></th>
                            <th><input id='cell3A' type="text" class="py-2 w-full"/></th>
                            <th><input id='cell4A' type="text" class="py-2 w-full"/></th>
                            <th class="w-4"><input type="button" onclick="insRowA()" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm 
                            w-12 ml-2 py-2 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/></th>
                    </table>

                
                    <div class="mb-2 pt-5">
                        <label for="height"
                            class="inline-block py-2 pr-1 ml-9 pl-28" >Subject you like best </label> 
                            <input
                                type="text"
                                class="border border-gray-150 rounded p-1 w-48"/>
                    </div>
                    <div class="mb-2">
                    
                    <label for="weight"
                        class="inline-block py-2 pr-1 ml-32 pl-1 " >Subject you like atleast</label> 
                        <input
                            type="text"
                            class="border border-gray-150 rounded p-1 w-48"/>
                    </div>
                    <div class="mb-2">
                    
                        <label for="sight"
                            class="inline-block py-2 pr-1 ml-28 pl-2" >Subject you find difficult</label> 
                            <input
                                type="text"
                                class="border border-gray-150 rounded p-1 w-48"/>
                    </div>
                    <div class="mb-2">
                    
                        <label for="hearing"
                            class="inline-block py-2 pr-1 ml-16" >Subject where you learned most</label> 
                            <input
                                type="text"
                                class="border border-gray-150 rounded p-1 w-48"/>
                    </div>
                    <div class="mb-2">
                    
                    <label for="height"
                        class="inline-block py-2 pr-1 ml-12 pl-3" >Subject where you learened least</label> 
                        <input
                            type="speech"
                            class="border border-gray-150 rounded p-1 w-48"/>
                    </div>
                    <div class="mb-2">
                    
                        <label for="genhealth"
                            class="inline-block py-2 pr-1 ml-20 pl-3" >Subject that was taught best</label> 
                            <input
                                type="text"
                                class="border border-gray-150 rounded p-1 w-48 mr-5"/>
                    </div>
                    <div class="mb-2">
                    
                        <label for="genhealth"
                            class="inline-block py-2 pr-1 ml-20 pl-2" >Subject that was taught least</label> 
                            <input
                                type="text"
                                class="border border-gray-150 rounded p-1 w-48 mr-5"/>
                    </div>
                
    </div>

        <br> 
        <p id="demo"></p>
        
        <script>
        
            //For delete row
            
            function deleteRowA(r)
            {
            var i=r.parentNode.parentNode; //.rowIndex;
            //document.getElementById('myTableA').deleteRowA(i);
            i.parentNode.removeChild(i);
            }
            
            //for insert row
            
            function insRowA()
            {
            var x=document.getElementById('myTableA').insertRow(document.getElementById('myTableA').rows.length);
            var a= x.insertCell(0);
            var b= x.insertCell(1);
            var c= x.insertCell(2);
            var d= x.insertCell(3);
            var del1= x.insertCell(4);
            var edi= x.insertCell(5);
            
            a.innerHTML=document.getElementById("cell1A").value;
            b.innerHTML=document.getElementById("cell2A").value;
            c.innerHTML=document.getElementById("cell3A").value;
            d.innerHTML=document.getElementById("cell4A").value;
            
            
            del1.innerHTML='<input type="button" value="Delete" class="p-2 bg-blue-700 font-medium rounded-lg text-sm w-16 py-2 text-center rounded-lg rounded " onclick="deleteRowA(this)"/>';
            
            document.getElementById("cell1A").value = "";
            document.getElementById("cell2A").value = "";
            document.getElementById("cell3A").value = "";
            document.getElementById("cell4A").value = "";
            
            }
    
         
            </script>
                
</form>
