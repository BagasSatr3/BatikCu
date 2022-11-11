@extends('layouts.template')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit profile</h3>
          <div class="card-tools">
            <a href="{{ url('/profile') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
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

          @forelse ($itemprofile as $profile)


          <form action="{{ route('user.update', $profile->id) }}" method="post">
            @csrf
            @method('PUT')
            {{ method_field('patch') }}
            <div class="form-group">
              <label for="kode_profile">Nama</label>
              <input type="text" name="kode_profile" id="kode_profile" class="form-control" value={{ $profile->nama }}>
            </div>
            <div class="form-group">
              <label for="nama_profile">Email Address</label>
              <input type="text" name="nama_profile" id="nama_profile" class="form-control" value={{ $profile->email }}>
            </div>
            <div class="form-group">
              <label for="slug_profile">Alamat</label>
              <input type="text" name="slug_profile" id="slug_profile" class="form-control" value={{ $profile->alamat }}>
            </div>
            <div class="form-group">
              <label for="deskripsi_profile">Phone</label>
              <textarea name="deskripsi_profile" id="deskripsi_profile" cols="30" rows="5" class="form-control">{{ $profile->phone }}</textarea>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="publish" {{ $profile->status == 'publish'? 'selected': ''}}>Publish</option>
                <option value="unpublish" {{ $profile->status == 'unpublish'? 'selected': ''}}>Unpublish</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
