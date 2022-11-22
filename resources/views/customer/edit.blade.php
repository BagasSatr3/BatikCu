@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Form Edit Customer
          </h3>
          <div class="card-tools">
            <a href="{{ route('customer.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          Nama
                        </td>
                        <td>
                          {{ $itemprofile->name }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Email
                        </td>
                        <td>
                          {{ $itemprofile->email }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          No Tlp
                        </td>
                        <td>
                            {{ $itemprofile->phone }}
                        </td>
                        <td>
                          Alamat
                        </td>
                        <td>
                            {{ $itemprofile->alamat }}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Status
                        </td>
                        <td>
                            {{ $itemprofile->status }}
                        </td>
                        <td>
                          <form action="#" class="form-inline">
                            <div class="form-group mr-2">
                              <select name="status" id="status" class="form-control">
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Non Aktif</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
