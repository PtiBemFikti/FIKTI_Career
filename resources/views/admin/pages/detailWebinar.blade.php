{{-- @dd($post) --}}
@include('include.navbar_dashboard')

<body>
    <div class="table-responsive jumbotron">
        <a href="/dashboard" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="my-4">
            <h2>Data pendaftar {{ $title }}</h2>
        </div>
        <table id="data-example" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" width="25px">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col" width="65px">Pekerjaan</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col" width="360px">Alasan</th>
                    <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td>
                </tr>
            </thead>
                <tbody>
                    @foreach ($post as $s)
                    <tr>
                        <td>{{ $s["id"] }}</td>
                        <td>{{ $s["nama"] }}</td>
                        <td>{{ $s["pekerjaan"] }}</td>
                        <td>{{ $s["kota"] }}</td>
                        <td>{{ $s["email"] }}</td>
                        <td>{{ $s["NoHp"] }}</td>
                        <td>{{ $s["alasan"] }}</td>
                        <td>
                            <form action="{{ route('webinar.delete', $s->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah data yakin untuk dihapus?')"><i class="fa fa-trash" style="padding: 4px; border-radius:30%; color:aliceblue;"></i></button>
                            </form>
        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        AOS.init();

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>