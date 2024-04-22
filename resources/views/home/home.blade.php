@extends('layout.main')
@section('container')

<h3>Hallo <?php echo htmlentities(Auth::user()->name);?></h3>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaltambah">
    TAMBAH FILM
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">TAMBAH FILM</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('film.simpan') }}" method="POST">
            @csrf
        <div class="form-grup">
            <label class="mb-1" for="">Judul</label>
            <input type="text" style="border: 1px solid black;" name="judul" required class="form-control">
        </div>
        
        <div class="form-grup">
            <label class="mb-1" for="">Sipnosis</label>
            <input type="text" style="border: 1px solid black;" name="sipnosis" required class="form-control">
        </div>
        
        <div class="form-grup">
          <label class="mb-1" for="">Genre</label>
          <select style="border: 1px solid black;" name="genre" id="" class="form-control">
            <option value="">Pilih Genre</option>
            @foreach($genre as $g)
            <option value="{{ $g['id'] }}">{{ $g['name'] }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-grup">
          <label class="mb-1" for="">Actor</label>
          <input type="text" style="border: 1px solid black;" name="actor" required class="form-control">
        </div>
        <div class="form-grup">
            <label class="mb-1" for="">Author</label>
            <input type="text" style="border: 1px solid black;" name="created_by" required class="form-control">
        </div>
        <div class="container">
            <label for="example-text-input" class="col-md-2 col-form-label text-right"></label>
            <div class="col-md-10">
                <div class="response-survey"></div>
                <button type="submit" class="btn btn-dark btn-sm "><i class='bx bx-save mt-70px'></i> Simpan</button>
            </div>
        </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

    <div class = "container">
    <table class="table table-sm table-bordered ml-2 mr-5 mt-2" style="border: 1px solid black;">
        <tr>
            <th class="text-center">NO</th>
            <th class="text-center">JUDUL</th>
            <th class="text-center">SIPNOSIS</th>
            <th class="text-center">GENRE</th>
            <th class="text-center">ACTOR</th>
            <th class="text-center">AUTHOR</th>
            <th class="text-center">AKSI</th>
        </tr>
    </div>
        @foreach($film as $f)
            <tr>
                <td class="text-center">{{ $f['nomor'] }}</td>
                <td>{{ $f['judul'] }}</td>
                <td class="text-left">{{ $f['sipnosis'] }}</td>
                <td>{{ $f['genre'] }}</td>
                <td>{{ $f['actor'] }}</td>
                <td>{{ $f['created_by'] }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-card-list"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/film/edit, $f['id']"><i class="bi bi-pencil-square"></i> Edit</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-trash-fill"></i> Hapus</a></li>
                        </ul>
                      </div>
                </td>
            </tr>
            @endforeach
        </table>
@endsection