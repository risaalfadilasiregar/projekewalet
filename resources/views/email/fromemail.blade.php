<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesan Admin </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


  <div class="container">
    <div class="row">
      <div class="col-md-6">
	<h3>Kirim Pesan Ke User</h3>
	<form method="post" action="/kirim">
	  @csrf
	  {{-- <div class="form-group">
	    <label>Nama Lengkap</label>
	    <input class="form-control" type="text" name="nama">
	  </div> --}}
	  <div class="form-group">
	    <label>Pesan</label>
	    <input class="form-control" type="text" name="komentar">
	  </div>
	  {{-- <div class="form-group">
            <label>Pesan</label>
	    <textarea class="form-control" type="text" name="pesan" rows="4"></textarea>
	  </div> --}}
	  <div class="form-group">
	    <label>Alamat Email User</label>
	    <input class="form-control" type="text" name="email">
	  </div>
	  <div class="text-right">
	    <button type="submit" class="btn btn-primary">Kirim</button>
		<a href="{{url('admin')}}" class="btn btn-danger pull-right mr-3">Kembali</a>
	  </div>
	</form>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
