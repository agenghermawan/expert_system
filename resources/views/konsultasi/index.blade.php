<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{--style--}}
      
         @include('includes.style')

    {{-- End Style--}}

    <title>Lara View</title>
  </head>
  <body class="">
     
    {{-- header --}}
    @include('includes.header')
      
    <div class="content">
        <div class="container">
            <div class="card">
            
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong> Konsultasi</strong>
                </h5>
            
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
            
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="#!">
            
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                    <label for="materialRegisterFormFirstName">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="email" id="materialRegisterFormLastName" class="form-control">
                                    <label for="materialRegisterFormLastName">Last name</label>
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="name" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">Masukan Umur Anda :  </label>
                        </div>

                        <a href="{{route('question.index')}}" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"> Mulai Konsultasi</a>
                        <hr>
                        <p>By clicking
                            <em>Mulai Konsultasi</em> you agree to our
                            <a href="" target="_blank">terms of service</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>

  @include('includes.script')

</html>