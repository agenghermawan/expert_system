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
                    <div class="form-group">
                        <hr>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option  class="active">Jenis Kulit Anda</option>
                          <option disabled>----------------</option>
                          @foreach ($items as $item)
                            <option> {{$item -> Jenis_Kulit}} </option>
                          @endforeach
                        </select>
                      </div>
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong> Jenis Penggunaan : </strong>
                    <hr>
                    @foreach ($items as $item)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">{{$item -> Jenis_Penggunaan}}</label>
                      </div>
                      @endforeach
                </h5>
                        <form action="" method="get">
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Lanjutkan Konsultasi</button>
                        </form>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>

  @include('includes.script')

</html>