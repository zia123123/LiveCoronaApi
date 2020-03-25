\@extends('../layouts.app')

@include('sweetalert::alert')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Tambah Peserta</h1>
  <div>

      <form method="post" action="{{ route('edit.status') }}">
        @method('PATCH')
          @csrf
          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="id"/>
          </div>
          <input type="text" class="form-control" name="status" value="chekin" hidden/>
          <button type="submit" class="btn btn-primary-outline">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection
