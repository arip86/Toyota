@extends('layout.master')

@section('konten')

<div class="row">
          

<!-- ini untuk tampilan data pegawai -->	
        <div class="col-md-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{$pegawai->getAvatar()}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$pegawai->nama}}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Agama</b> <a class="float-right">{{$pegawai->agama}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$pegawai->alamat}}</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form action="/pegawai/{{$pegawai->id}}/update" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->nama}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">agama</label>
    <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->agama}}">
  </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pegawai->alamat}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Avatar</label>
    <input type="file" name="avatar" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
        </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@endsection