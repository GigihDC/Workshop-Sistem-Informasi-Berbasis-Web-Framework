<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request dengan Input Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validation dengan Laravel</h1>
                    <form action="/formulir/proses" method="post">
                         @csrf
                     <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <textarea name="nama" id="nama" class="form-control
                        {{ $errors->has('nama') ? ' is-invalid' : ''}}" 
                         placeholder="nama lengkap" value="{{old('nama')}}">   ></textarea>
                         @if ($errors->has('nama'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                            @endif
                     </div>
                            <br>
                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <textarea name="alamat" id="alamat"  class="form-control
                        {{ $errors->has('alamat') ? ' is-invalid' : ''}}" 
                         placeholder="alamat lengkap" value="{{old('alamat')}}">   ></textarea>
                         @if ($errors->has('alamat'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                            @endif
                    </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                  </form>
                  </div>
            </div>
        </div>

    </div>
    
</body>
</html>