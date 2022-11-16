@extends('layouts.dashboard')
@section('content')



<div class="container">

    <form action="{{ route('review.store') }}" method='POST'>
        @csrf
        <div class="form-group">
            <label for="review_id">review review</label>
            <select name="review_id" id="review_id" class="form-control">
              <option value="">Pilih review</option>
              @foreach($itemreview as $review)
              <option value="{{ $review->id }}">{{ $review->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
              <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="deskripsi_review">deskripsi review</label>
            <input type="text" name="deskripsi_review" id="deskripsi_review" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </form>
</div>


@endsection
