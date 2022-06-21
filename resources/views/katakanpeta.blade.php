<!DOCTYPE html>

<head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
    </style>
    
</head>

<body>
@extends('layouts.navigator')
@section('content')
<main
        <div id="dashboard">        
        <div class="container">
            <header class="border-bottom">      
                <center><span class="fs-4">Peta Telkom University</span></center>
            </header>
        <div>
            <center><iframe src="https://www.google.com/maps/d/embed?mid=1Q_nXRMr-xu41sCLD1OKjX72KSmA&ehbc=2E312F" width="600" height="600"></iframe></center>
        </div>

        <div id="parkirdong">  
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lokasi</th>
                        <TH scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parkirdong as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->parkir }}</td>
                            <td>
                            <a href="/katakanpeta/hapus/{{ $p->id }}" class="btn btn-danger"><i class="fa fa-trash">Selesasi Parkir</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
        </div>

        <form action="katakanpeta/store" method="post">
                {{ csrf_field() }}
                <label></label> <input type="hidden" type="text" name="name" required="required" value="{{ Auth::user()->name }}"> <br/>
                <label>Tempat</label>
                <select class="form-control" name="parkir" required="required" class="custom-select" id="parkir">
                <option value="TUCH">TUCH</option>
                <option value="GKU">GKU</option>
                <option value="FIK">FIK</option>
                <option value="Gedung K">Gedung K</option>
                <option value="Gedung D">Gedung D</option>
                <option value="MSU">MSU</option>
                </select>
                <input type="submit" value="Simpan">
        </form>
        </div>
</main>
@endsection
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>

</html>