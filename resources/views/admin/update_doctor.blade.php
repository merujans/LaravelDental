<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    <style type="text/css">

    label
    {
        display: inline-block;
        width: 200px;
    }

    </style>


    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">


      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">



           <div class="container" align="center" style="padding: 100px">

            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert"> x </button>
                {{session()->get('message')}}

            </div>

            @endif
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div>
                        <label>DoctorName</label>
                        <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" style="color: black;" name="phone" value="{{$data->phone}}">
                    </div>

                    {{--<div>
                        <label>Speciality</label>
                        <input type="text" style="color: black;" name="speciality" value="{{$data->speciality}}">
                    </div>--}}
                    <div style="padding: 15px;">

                        <label>speciality</label>

                        <select name="speciality" style="color: black; width:200px;">
                            <option>--Select--</option>
                            <option value="General Dentist">General Dentist</option>
                            <option value="Oral and Maxillofacial Surgeon">Oral and Maxillofacial Surgeon</option>
                            <option value="Pediatric Dentist">Pediatric Dentist</option>
                            <option value="Cosmetic Dentist">Cosmetic Dentist</option>
                        </select>
                    </div>


                    {{--<div>
                        <label>TimeSlot</label>
                        <input type="text" style="color: black;" name="timeslot" value="{{$data->timeslot}}">
                    </div> --}}

                    <div style="padding: 15px;">

                        <label>Timeslot</label>

                        <select name="timeslot" style="color: black; width:200px;">
                            <option>--Select--</option>
                            <option value="5.00 p.m - 6.00 p.m">5.00 p.m - 6.00 p.m</option>
                            <option value="6.00 p.m - 7.00 p.m">6.00 p.m - 7.00 p.m</option>
                            <option value="7.00 p.m - 8.00 p.m">7.00 p.m - 8.00 p.m</option>
                            <option value="8.00 p.m - 9.00 p.m">8.00 p.m - 9.00 p.m</option>
                        </select>
                    </div>

                    <div>
                        <label>Room</label>
                        <input type="text" style="color: black;" name="room" value="{{$data->room}}">
                    </div>

                    <div>
                        <label>OldImages</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}">
                    </div>
                    <div style="padding:15px;">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding:15px;">

                        <input type="submit" class="btn btn-primary">
                    </div>


                </form>

           </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
