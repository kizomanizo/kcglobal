@extends('layouts.admin')

    @section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ asset('users/') }}">Watumiaji</a>
        </li>
        <li class="breadcrumb-item active">Ongeza</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h2>Sajili mtumiaji mpya</h2>
          <!-- <p>Tumia fomu hii kuongeza watumiaji wa mfumo huu.</p> -->
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
        </div>
      </div>

      <form id="create_user" role="form" method="POST" action="{{ route('users.store') }}">
        {{ csrf_field() }}

      <div class="row">
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="firstname">Jina la kwanza</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="mf. Ali" value="{{ old('firstname') }}">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="middlename">Jina lingine</label>
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="mf. Hasani" value="{{ old('middlename') }}">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="surname">Jina la ukoo</label>
                  <input type="text" class="form-control" id="surname" name="surname" placeholder="mf. Mwinyi" value="{{ old('surname') }}">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-3">
              <div class="form-group">
                <label for="sex">Jinsi</label>
                <select class="form-control" id="sex" name="sex">
                      <option selected="" value="male">Mwanaume</option>
                      <option value="female">Mwanamke</option>
                </select>
              </div>      
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="mf. user@gmail.com" value="{{ old('email') }}">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="mf. 0755123456" value="{{ old('phone') }}">
              </div>  
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
                  <label for="address">Anuani</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="mf. Majengo mapya, Shinyanga" value="{{ old('address') }}">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="role">Majukumu</label><br>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="role" id="client" value="client">
                      <label class="form-check-label">Mteja</label>
                  </div>

                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="role" id="seller" value="seller">
                      <label class="form-check-label">Muuzaji</label>
                  </div>

                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                      <label class="form-check-label">Utawala</label>
                  </div>
              </div>      
          </div>
      </div>
      <div class="row">
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="password">Nenosiri</label>
                  <input type="password" class="form-control" id="password" name="password">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <label for="password_confirmation">Rudia Nenosiri</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                  <!-- <label for="password_confirmation">Jina la kwanza</label> -->
                  <!-- <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"> -->
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6">
              <button  value=" Sajili" class="btn btn-secondary btn-lg" type="submit" id="submit" name="submit">
                  Sajili Mtumiaji
              </button>
              <br>
          </div>
          <!-- /.col-lg-6 (nested) -->
      </div>
      <!-- /.row (nested) -->
      </form>
    @endsection
