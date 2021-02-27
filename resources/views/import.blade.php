<!DOCTYPE html>
<html>
<x-header/>
<head>
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
         <link rel="stylesheet" href="\css\app.css" >

  
</head>


<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Unggah data sekolah peminat PMDK dengan format file Excel.
        </div>
        <div class="card-body">
            <form action="{{ route('importData') }}"  enctype="multipart/form-data" method="POST">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data Sekolah</button>
                <!-- <a class="btn btn-warning" href="/export">Export Data Siswa</a> -->
            </form>
        </div>
    </div>
</div>

<div class="kolom">
    <table class="table table-striped">
        <tr>
            <th rowspan=2 class="table-primary">ID NILAI</th>
            <th rowspan=2 class="table-primary">ID SISWA</th>
            <th rowspan=2 class="table-primary">ID MATA PELAJARAN</th>
            <th colspan=2 class="table-primary">Kelas X</th>
            <th colspan=2 class="table-primary">Kelas XI</th>


        </tr>

    <div class="semester">
        <tr>
                <th class="table-primary">Semester 1</th>
                <th class="table-primary">Semester 2</th>
                <th class="table-primary">Semester 1</th>
                <th class="table-primary">Semester 2</th>
        </tr>
    </div>

</div>


@foreach($nilais as $nilai)
    <tr>
        <td>{{$nilai['id_nilai']}}</td>
        <td>{{$nilai['id_siswa']}}</td>
        <td>{{$nilai['id_mata_pelajaran']}}</td>
        <td>{{$nilai['101']}}</td>
        <td>{{$nilai['102']}}</td>
        <td>{{$nilai['111']}}</td>
        <td>{{$nilai['112']}}</td>
    </tr>
@endforeach
</table>


<span>
    {{$nilais->links()}}
</span>

<a href="#" class="next round">&#8250;</a>


</body>
</html>

