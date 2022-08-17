
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        VOCATIONAL PLANNING
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">

    <table class=" border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
          <tr style="background-color: powderblue;">
            <th class="w-4"></th>
            <th class="border border-gray-400 px-0 py-2 w-20">GRADE 7</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 text-center"><b>1ST</b></td>
            <td class="border border-gray-400 ">
                <input
                type="text"
                class="w-full"
                name="first_g7"
                value="{{old('others_home')}}"
            />
            </td>
            
          </tr>
          <tr>
            <td class="border border-gray-400 text-center"><b>2ND</b></td>
            <td class="border border-gray-400 ">
                <input
                type="text"
                class="w-full"
                name="second_g7"
                value="{{old('others_home')}}"
            />
            </td>
            
          </tr>
        </tbody>
    </table>

</form>
