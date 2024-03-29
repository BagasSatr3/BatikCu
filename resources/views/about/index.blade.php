@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk</h4>
          <div class="card-tools">
            <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="row">
              <div class="col">
                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="card-body">
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>Header</th>
                  <th>Body</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemabout as $about)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                  {{ $about->header }}
                  </td>
                  <td>
                  {{ $about->body }}
                  </td>
                  <td>
                  <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                        Edit
                    </a>
                    <form action="{{ route('about.destroy', $about->id) }}" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $itemabout->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
