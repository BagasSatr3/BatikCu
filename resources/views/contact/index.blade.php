@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table produk -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Contact</h4>
          <div class="card-tools">
            @if ($itemcontact->count() == 0)
            <a href="{{ route('contact.create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
            @endif
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
                  <th>Email</th>
                  <th>Nomor</th>
                  <th>Alamat</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemcontact as $contact)
                <tr>
                  <td>
                  {{ ++$no }}
                  </td>
                  <td>
                  {{ $contact->email }}
                  </td>
                  <td>
                  {{ $contact->nomor }}
                  </td>
                  <td>
                  {{ $contact->alamat }}
                  </td>
                  <td>
                    <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                        Edit
                    </a>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="post" style="display:inline;">
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
            {{ $itemcontact->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
