@extends('layouts.main')


@section('container')
    <section class="cover">
        <h1>Perpustakaan Digital</h1>
    </section>

    <section class="book-list">

        <div class="row mt-5">
            <h1>Daftar Buku</h1>
        </div>
          <div class="row mt-4">
            @foreach ($book as $book)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card border-info mb-3 h-100" style="max-width: 18rem;">
                    <div class="card-header"><h4 class="card-title">{{ $book->judul }}</h4>
                        <p class="card-text">
                            @foreach ($book->categories as $category)
                            <p class="card-text"><small class="text-body-secondary">{{ $category->namakategori }}</small></p>
                            @endforeach
                        </p>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Penulis : {{ $book->penulis }}</p>
                      <p class="card-text">Penerbit : {{ $book->penerbit }}</p>
                      <p class="card-text">Tahun Terbit : {{ $book->tahunterbit }}</p>
                      <a href="{{ url('peminjaman', $book->id) }}" class="btn btn-warning">Pinjam Buku</a>
                    </div>
                  </div>
            </div>
            @endforeach

            
          </div>
    </section>
@endsection