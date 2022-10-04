<x-card class="p-10 rounded max-w-6xl mx-auto mt-12">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6 px-2 rounded">
        EDUCATIONAL BACKGROUND
    </h2>
</header>
{{-- <form method="POST" action="/listings" enctype="multipart/form-data"> --}}

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
                <table id="myTableA" class="border-collapse w-full">
                    <thead>
                          <tr style="background-color: powderblue;" class="text-center">
                            <th class="border border-gray-400 py-2 w-52">Grade Level</th>
                            <th class="border border-gray-400 py-2 w-64">Section</th>
                            <th class="border border-gray-400 py-2 w-80">Scholarship Status</th>
                            <th class="border border-gray-400 py-2 w-80">Academic Status</th>
                            
                          </tr>
                    </thead>
                        <tr >
                            <th>
                                <select id="cell1A" class="py-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Select Grade Level</option>
                                    <option value="Grade 7">Grade 7</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 11">Grade 11</option>
                                    <option value="Grade 12">Grade 12</option>
                                </select>
                            </th>
                            <td><input id='cell2A' type="text" class="indent-2 py-1 w-full"/></td>
                            <td><input id='cell3A' type="text" class="indent-2 py-1 w-full"/></td>
                            <td><input id='cell4A' type="text" class="indent-2 py-1 w-full"/></td>
                            <td><input type="button" onclick="insRowA()" value="Add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm 
                            w-12 ml-2 py-1 text-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/></td>
                        </tr>
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
            
            
            del1.innerHTML='<input type="button" value="Delete" class="text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-12 ml-2 py-1 text-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" onclick="deleteRowA(this)"/>';
            
            document.getElementById("cell1A").value = "Select Grade Level";
            document.getElementById("cell2A").value = "";
            document.getElementById("cell3A").value = "";
            document.getElementById("cell4A").value = "";
            
            }
    
         
            </script>
</x-card>
                
