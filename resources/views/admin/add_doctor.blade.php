<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style>
    label {
       float: left;
    }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
        @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->\
        <div class="container-fluid page-body-wrapper">

           

            <div class="container w-50" align="center" style="padding-top: 100px;">

                 @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>


            @endif

                <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Doctor Name</label>
                        <input type="text" name="name" class="form-control" style="color: black" placeholder="Enter Name" required>
                    </div>

                    <div class="form-group">
                        <label>Room No</label>
                        <input type="text" name="room" class="form-control" style="color: black" placeholder="Enter Room No" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control" style="color: black" placeholder="Enter Phone Number" required>
                    </div>

                    <div class="form-group">
                        <label>Doctor Speciality</label>
                        <select class="form-control" name="speciality" id="" required>
                            <option>--select--</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Allergy and immunology">Allergy and immunology</option>
                            <option value="Anesthesilogy">Anesthesilogy</option>
                            <option value="Neurolgy">Neurolgy</option>
                            <option value="Pathology">Pathology</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Urology">Urology</option>
                            <option value="General Health">General Health</option>
                            <option value="Dental">Dental</option>
                            <option value="Plastics">Plastics</option>

                        </select>
                    </div>

                     <div class="form-group">
                        <label>Doctor's Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="form-group">
                       
                        <input style="float: left;" type="submit" class="btn btn-success" value="submit">
                    </div>

                </form>
            </div>

        </div>
    @include('admin.script')
  </body>
</html>