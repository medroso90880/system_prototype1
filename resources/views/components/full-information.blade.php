<x-card class="p-10 rounded max-w-5xl mx-auto mt-12">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-6">
            PERSONAL INFORMATION
        </h2>
    </header>
    
    <!--Name-->
    {{-- <form method="POST" action="/register/store" enctype="multipart/form-data"> --}}
        {{-- @csrf --}}
        <div class="mb-2 justify-center gap-2">
            <div>
                <label for="last_name" class="inline-block mb-2 font-bold">Family Name: </label>
                <label>Daquila</label>
            </div>
            <div>
                <label for="first_name" class="inline-block mb-2 font-bold">First Name: </label>
                <label>Jasper James</label>
            </div>
            <div>
                <label for="middle_name" class="inline-block mb-2 font-bold">Middle Name</label>
                <label>Marchan</label>
            </div>
        </div>
    
        <!--Sex and contact number -->
        <div class="mb-2 justify-center gap-10">
            <div>
                <label for="sex" class="inline-block mb-2 pr-1 font-bold">Sex:</label>
                <label>Apache helicopter</label>
            </div>
            <div>
                <label for="age" class="inline-block mb-2 pr-1 font-bold">Age: </label>
                <label>69</label>
            </div>
            <div>
                <label for="contact_number" class="inline-block mb-2 pr-1 font-bold">Contact No:</label>
                <label>343-9851</label>
            </div>
        </div>
    
        <!--RELIGION, EMAIL ADD, CELL#-->
        <div class="mb-2 justify-center gap-2">
            <div>
                <label for="cell_number" class="inline-block mb-2 pr-1 font-bold">Cellphone No</label>
                <label>09694201337</label>
            </div>
    
            <div>
                <label for="nationality" class="inline-block mb-2 pr-1 font-bold">Nationality</label>
                <label>Pinoy</label>
            </div>
        </div>
        <div class="mb-2">
            <div>
                <label for="email" class="inline-block mb-2 pr-1 font-bold">E-mail Address</label>
                <label>candicefitinyomouth@gmail.com</label>
            </div>
    
            <div>
                <label for="religion" class="inline-block mb-2 pr-1 font-bold">Religion:</label>
    
                <label>Born Again</label>
            </div>
        </div>
    
    
        <div>
            <label for="permanent_add" class="inline-block mb-2 pr-1 font-bold">Permanent Address:</label>
            <label>balaty</label>
    
        
            <div>
                <label for="date_of_birth" class="inline-block mb-2 pr-1 font-bold">Date of birth</label>
                <label>12/69/1337</label>
    
            </div>
            <div>
                <label for="place_of_birth" class="inline-block mb-2 pr-1 font-bold">Place of Birth</label>
                <label>Alabama</label>
            </div>
        </div>
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-10 py-3">
                STUDENT'S SELF-ASSESSMENT
            </h2>
        </header>
        
        <div>
            <h6 class="py-3  font-bold">Based on self-observation, feedback gained from other people and
                personal experiences, honestly assess yourself on the following areas in a scale of 1-5 where;
                1 - Exellent, 2 - Very Good, 3 - Good, 4 - Fair, 5 - Poor.</h6>
        </div>
        <div class="mb-2 font-bold flex justify-between px-10 pb-5">
            <div>
                <h6>Assessment</h6>
            </div>
            <div>
                <h6>1</h6>
            </div>
            <div>
                <h6>2</h6>
            </div>
            <div>
                <h6>3</h6>
            </div>
            <div>
                <h6>4</h6>
            </div>
            <div>
                <h6>5</h6>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="-mr-8">
                <p>PHYSICAL WELL-BEING</p>
                <p>(appearance, health,</p>
                <p>grooming)</p>
            </div>
            <div>
                <input type="checkbox" class="rounded mt-8" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-8" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-8" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-8" />
            </div>
            <div>
                <input type="checkbox" class="rounded mr-9 mt-8" />
            </div>
        </div>
        <div class="flex justify-between mt-5">
            <div class="-mr-11">
                <p>MENTAL:</p>
                <p>Comprehension,</p>
                <p>Reasoning & Judgement, </p>
                <p>Alertness</p>
            </div>
            <div>
                <input type="checkbox" class="rounded mt-10" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-10" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-10" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-10" />
            </div>
            <div>
                <input type="checkbox" class="rounded mr-9 mt-10" />
            </div>
        </div>
        <div class="flex justify-between mt-5">
            <div class="-mr-8">
                <p>SPEECH</p>
                <p>(fluency, diction,</p>
                <p>voice, manner of </p>
                <p>expression, spontaneity</p>
                <p> of thoughts)</p>
            </div>
            <div>
                <input type="checkbox" class="rounded mt-14" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-14" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-14" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-14" />
            </div>
            <div>
                <input type="checkbox" class="rounded mr-9 mt-14" />
            </div>
        </div>
        <div class="flex justify-between mt-5">
            <div class="-mr-7">
                <p>PERSONALITY</p>
                <p>(self-confidence,</p>
                <p>social graces, </p>
                <p>attitude and values,</p>
                <p>interpersonal skills,</p>
                <p>emotional adaptability)</p>
            </div>
            <div>
                <input type="checkbox" class="rounded mt-16" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-16" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-16" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-16" />
            </div>
            <div>
                <input type="checkbox" class="rounded mr-9 mt-16" />
            </div>
        </div>
        <div class="flex justify-between mt-5 mb-5">
            <div class="-mr-5">
                <p>CHARACTER</p>
                <p>(integrity, industry</p>
                <p>& resourcefulness,</p>
                <p>observance of school</p>
                <p>rules & regulation,</p>
                <p>cooperation,</p>
                <p>responsibility, respect</p>
                <p>for others & property)</p>
            </div>
            <div>
                <input type="checkbox" class="rounded mt-20" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-20" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-20" />
            </div>
            <div>
                <input type="checkbox" class="rounded mt-20" />
            </div>
            <div>
                <input type="checkbox" class="rounded mr-9 mt-20" />
            </div>
        </div>
        
        <div class="py-4 font-bold">
            <h6>Select any of the following words which describe your general make-up:</h6>
        </div>
        
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28">Perserving</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-36">Calm</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Friendly</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-32 mr-2">Patient</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28 mr-0.5">Stubborn</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Capable</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-32">Tolerant</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28">Impulsive</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Pessimistic</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-32 mr-1.5">Jealous</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-36 mr-2.5">Shy</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Talented</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-20 mr-1">Self-Confident</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-16">Quick-tempered</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Cynical</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-32 mr-3">Tactful</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-24 mr-1.5">Submissive</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Conscientious</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-24 mr-2">Poor health</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28 mr-2.5">Cheerful</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Excitable</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-32 mr-0.5">Irritable</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28 mr-3.5">Anxious</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Nervous</label>
        </div>
        <div>
            <input type="checkbox" class="rounded pl-4" />
            <label class="inline-block pr-28 mr-2.5">Unhappy</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-28 mr-1.5">Frequent</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Daydreaming</label>
        </div>
        <div>
            <input type="checkbox" class="rounded" />
            <label class="inline-block pr-16 mr-1.5">Easily Exhausted</label>
            <input type="checkbox" class="rounded" />
            <label class="inline-block">Frequent periods of gloom or depression</label>
        </div>
        
        <div class="py-6 mt-2 font-bold">
            <h6>Complete the following statements:</h6>
        </div>
        <div class="mb-3">
            <label for="statement" class="inline-block">My father and my mother:</label>
            <label>test</label>
            
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">My greatest mistake:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">I wish my parents were:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">In school, my teacher:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">I like friends because:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">Compared with most families, mine:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">I always wanted to:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">I feel that my father:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">At school, I get along with:</label>
            <label>test</label>
        </div>
        <div class="font-bold mb-3">
            <label for="statement" class="inline-block">My mother:</label>
            <label>test</label>
        </div>
        
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        EXTRA CURRICULAR ACTIVITIES
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">

<!--POSITION HELD IN SCHOOL/OFF-CAMPUS ORGANIZATIONS-->    
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-20">
        POSITION HELD IN SCHOOL/OFF-CAMPUS ORGANIZATIONS
    </div>
</div>

    <table class=" border-collapse border-2 border-gray-400 p-5 w-full">
        <thead>
          <tr style="background-color: powderblue;">
            <th class="w-12"></th>
            <th class="border border-gray-400 px-0 py-2 w-44">POSITION
                <div class="font-medium text-gray-500 italic">(President, Vice Pres., Member, etc.)</div>
            </th>
            <th class="border border-gray-400 px-0 py-2 w-44">ORGANIZATION/CLUB</th>
            
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
            <td class="border border-gray-400 ">
                <div class="grid grid-cols-1 divide ">
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position1_org"
                            value="{{old('A_position1_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position2_org"  
                            value="{{old('A_position2_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position3_org"
                            value="{{old('A_position3_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_position4_org"
                            value="{{old('A_position4_org')}}"/>
                    </div>
                  </div>
            </td>
            <td class="border border-gray-400 ">
                <div class="grid grid-cols-1 divide ">
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization1_org"
                            value="{{old('A_organization1_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization2_org"
                            value="{{old('A_organization2_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization3_org"
                            value="{{old('A_organization3_org')}}"/>
                    </div>
                    <div class="border border-gray-400 ">
                        <input class="w-full"
                            type="text"
                            name="A_organization4_org"
                            value="{{old('A_organization4_org')}}"/>
                    </div>
                  </div>
            </td>
          </tr>
          
        </tbody>
    </table>

<!--INVOLVEMENT IN ACTIVITIES/PROJECTS IN/OFF CAMPUS-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        INVOLVEMENT IN ACTIVITIES/PROJECTS IN/OFF CAMPUS
    </div>
</div>

<table class=" border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-44">ACTIVITY</th>
    <th class="border border-gray-400 px-0 py-2 w-44">EXTENT OF ACTIVITY
        <div class="font-medium text-gray-500 italic">(International, National, School-wide, Year level, others)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">NATURE OF INVOLVEMENT
        <div class="font-medium text-gray-500 italic">(Organizer, Representative, Participant)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity1_org"
                    value="{{old('B_activity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity2_org"
                    value="{{old('B_activity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity3_org"
                    value="{{old('B_activity3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_activity4_org"
                    value="{{old('B_activity4_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity1_org"
                    value="{{old('B_extentofactivity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity2_org"
                    value="{{old('B_extentofactivity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity3_org"
                    value="{{old('B_extentofactivity3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_extentofactivity4_org"
                    value="{{old('B_extentofactivity4_org')}}"/>
            </div>
          </div>
          
    </td> 
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement1_org"
                    value="{{old('B_natureofinvolvement1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement2_org"
                    value="{{old('B_natureofinvolvement2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement3_org"
                    value="{{old('B_natureofinvolvement3_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="B_natureofinvolvement4_org"
                    value="{{old('B_natureofinvolvement4_org')}}"/>
            </div>
          </div>
          
    </td> 
        
  </tr>
  
</tbody>
</table>

<!--SPECIAL ACADEMIC HONORS/AWARDS/DISTINCTIONS RECIEVED-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        SPECIAL ACADEMIC HONORS/AWARDS/DISTINCTIONS RECIEVED
    </div>
</div>

<table class=" border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-44">AWARD</th>
    <th class="border border-gray-400 px-0 py-2 w-44">ACTIVTY/COMPETITION/etc.</th>
    <th class="border border-gray-400 px-0 py-2 w-44">CLASSIFICATION
        <div class="font-medium text-gray-500 italic">(International, National, Regional, School-wide, etc.)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award1_org"
                    value="{{old('C_award1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award2_org"
                    value="{{old('C_award2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_award3_org"
                    value="{{old('C_award3_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity1_org"
                    value="{{old('C_activity1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity2_org"
                    value="{{old('C_activity2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_activity3_org"
                    value="{{old('C_activity3_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c1_org"
                    value="{{old('C_c1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c2_org"
                    value="{{old('C_c2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="C_c3_org"
                    value="{{old('C_c3_org')}}"/>
            </div>
            
          </div>
    </td>
  </tr>
  
</tbody>
</table>

<!--PARTICIPATION IN SEMINARS/CONFERENCE/CONTESTS/COMPETITIONS-->  
<div class="text-center">
    <div class="text-l underline uppercase mb-6 mt-40">
        PARTICIPATION IN SEMINARS/CONFERENCE/CONTESTS/COMPETITIONS
    </div>
</div>

<table class="border-collapse border-2 border-gray-400 p-5 w-full">
<thead>
  <tr style="background-color: powderblue;">
    <th class="w-12"></th>
    <th class="border border-gray-400 px-0 py-2 w-60">TITLE
        <div class="font-medium text-gray-500 italic">(Seminar, Conference, Contest, Competition)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">SPONSORING AGENCY/DATE HELD</th>
    <th class="border border-gray-400 px-0 py-2 w-48">SCOPE
        <div class="font-medium text-gray-500 italic">(International, National, Regional, School-wide, etc.)</div>
    </th>
    <th class="border border-gray-400 px-0 py-2 w-44">NATURE OF INVOLVEMENT
        <div class="font-medium text-gray-500 italic">(Speaker, Facilitator, Participant, Team captain, Member)</div>
    </th>
    
    
  </tr>
</thead>
<tbody>
  <tr>
    <td class="border border-gray-400 text-center"><b>Grade 7</b></td>
    <td class="border border-gray-400 ">
        
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title1_org"
                    value="{{old('D_title1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title2_org"
                    value="{{old('D_title2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_title3_org"
                    value="{{old('D_title3_org')}}"/>
            </div>
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring1_org"
                    value="{{old('D_sponsoring1_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring2_org"
                    value="{{old('D_sponsoring2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_sponsoring3_org"
                    value="{{old('D_sponsoring3_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_scope_org"
                    value="{{old('D_scope_org')}}"/>
            </div>
            
          </div>
    </td>
    <td class="border border-gray-400 ">
        <div class="grid grid-cols-1 divide ">
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement1_org"
                    value="{{old('D_involvement1_org')}}"/>
            </div>  
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement2_org"
                    value="{{old('D_involvement2_org')}}"/>
            </div>
            <div class="border border-gray-400 ">
                <input class="w-full"
                    type="text"
                    name="D_involvement3_org"
                    value="{{old('D_involvement3_org')}}"/>
            </div>
            
          </div>
    </td>
  </tr>
  
</tbody>
</table>
      
 

    
</form>
{{-- <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6 px-2 rounded py-3">
        Counselor's Notes
    </h2>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">
<div>
    <input type="text" class="border border-gray-150 rounded p-1 w-full py-12"/>
    
  </div>
        </div> --}}
    </x-card>