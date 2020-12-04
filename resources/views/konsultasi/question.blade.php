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
      
    <div style="padding-top: 100px;" class="content">
        <div class="container">
          @foreach ($items as $item)
          <form action="{{route('question.result',$item->id)}}" method="POST"  enctype="multipart/form-data">
          @endforeach
            @csrf
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong> Konsultasi</strong>
                </h5>
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    <div class="form-group">
                        <hr>
                        <select class="form-control" name="Jenis_Kulit" id="exampleFormControlSelect1">
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
                        <input class="form-check-input" type="checkbox" name="Jenis_Penggunaan" value="{{$item -> Jenis_Penggunaan}}">
                        <label class="form-check-label">{{$item -> Jenis_Penggunaan}}</label>
                      </div>
                      @endforeach
                 </h5>
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Hasil Konsultasi</button>
                  </div>
                  <br>
            </div>
          </form>
        </div>
    </div>

  </body>

  @include('includes.script')
 
</html>