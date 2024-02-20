<x-app-layout>

    <x-sidebar.sidebar />

    <div class="py-12 bg-blue-100">
        <div class="md:ml-[250px]  lg:pl-16 grid grid-cols-2 w-[75%] m-auto">
            <div class= "overflow-hidden sm:rounded-lg md:px-8 md:py-8">

                <div class="dashboard-row col-span-4">
                     <div class="applicants-div  bg-blue-400 px-4 py-4 rounded-md">
                          <div class="row flex justify-between items-center">
                              <div class="para text-white w-[70%]">
                                  <span class="text-lg font-normal leading-normal">Hello John</span><br>
                                  <strong class="text-2xl leading-normal font-bold">You have 9 new applicants today!<br> Review applicants</strong>
                              </div>
                              <div class="img w-[30%]">
                                <img src="{{asset('images/notificationdashboard.png')}}" class="w-[100%] h-auto object-cover" />
                              </div>
                          </div>
                     </div>
                </div>

                <div class="new-applicants bg-white px-8 py-4 rounded-md border-2 my-6">
                  <div class="applicants-title">
                     <strong>New Applicants</strong>
                  </div>
                </div>

                <div class="chart bg-white rounded-md">
                    <canvas id="myChart"></canvas>
                </div>

            </div>

            <div class="side-row col-span-1">
               <div id="calendar" class="bg-white rounded-md px-4 py-4"></div>
               <div class="open-position my-4 bg-white rounded-md flex justify-between px-4 py-4">
                    <div class="icon-position">
                        <i class="fas fa-chair text-blue-950 text-5xl"></i>
                    </div>
                    <div class="position-text">
                        <span>Current Position</span><br>
                        <span class="text-bold text-2xl leading-normal">500</span>
                    </div>
                    <div class="arrow-next">
                        <i class="fa fa-arrow-right"></i>
                    </div>
               </div>

               <div class="applicant-recieved flex justify-between items-center bg-white rounded-md px-4 py-4">
                   <div class="applicant-icon">
                    <i class="fas fa-user text-blue-950 text-5xl"></i>
                   </div>
                   <div class="applicant-text">
                      <span>Applicant Recieved</span><br>
                      <span class="text-bold text-2xl leading-normal">500</span>
                   </div>

                   <div class="arrow-next">
                    <i class="fa fa-arrow-right"></i>
                 </div>

               </div>

                 <div class="interviews bg-white rounded-md flex justify-between px-4 py-4 my-4">
                    <div class="interviews-icon">
                        <i class="fas fa-user-tie text-blue-950 text-5xl"></i>
                    </div>
                     <div class="interview-text">
                        <span>Interview</span><br>
                        <span class="text-bold text-2xl leading-normal">16</span>
                     </div>
                     <div class="arrow-next">
                        <i class="fa fa-arrow-right"></i>
                     </div>
                 </div>
           </div>

           <div class="recent-applications px-8 col-span-2">
                <span class="text-blue-900 font-bold text-2xl leading-normal">Recent Applications</span>

                <div class="application-table my-3">
                      <table>
                        <thead>
                            <tr>
                                <th class="px-2 text-center w-[30%]">Full Name</th>
                                <th class="px-2 text-center w-[30%]">Position</th>
                                <th class="px-2 text-center w-[30%]">Stage</th>
                                <th class="px-2 text-center w-[30%]">Location</th>
                                <th class="px-2 text-center w-[30%]">View</th>
                                <th class="px-2 text-center w-[30%]">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="px-2 text-center w-[30%] py-3">John Doe</td>
                                <td class="px-2 text-center w-[30%] py-3">Recruting Head</td>
                                <td class="px-2 text-center w-[30%] py-3">Application Received</td>
                                <td class="px-2 text-center w-[30%] py-3">Belize</td>
                                <td class="px-2 text-center w-[30%] py-3"><i></i></td>
                                <td class="px-2 text-center w-[30%] py-3"><i class="fa fa-trash-o" style="font-size:24px;color:red"></i></td>
                            </tr>
                        </tbody>
                      </table>
                </div>
           </div>
        </div>
    </div>
    <script>
   document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

      const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'doughnut',
  data: {
    labels: ['Javascript', 'Laravel', 'Nodejs', 'Python', 'Typescript', 'Java'],
    datasets: [{
      label: '# of Votes',
      data: [75, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
      </script>
</x-app-layout>
