<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | {{ $title }}</title>
    <!-- Required meta tags -->
    <base href="/public">

    @include('admin.css')

    

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .div_center {
            text-align: center;
            margin-bottom: 40px;
        }

        .h2_font {
            padding-bottom: 20px;
            margin-top: 20px; 
        }

        .center {
          margin: auto;
          width: 50%;
          text-align: center;
          border: 1px solid grey;
          color: grey;
        }

        .text_color {
            color: black:
        }

        label {
            display: inline-block;
            width: 200px
        }

        .div_design {
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

              @if (session()->has('addSuccess'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session('addSuccess') }}
              </div>
              @endif

              @if (session()->has('deleteSuccess'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session('deleteSuccess') }}
              </div>
              @endif

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>
              </div>
                  
              @endif

              <form action="{{ url('add_user_confirm') }}" method="POST">
                  @csrf
                <div class="div_center">
                    <h2 class="h2_font">Tambah User</h2>



                    <div class="div_design">
                        <label for="username">Username : </label>
                        <input type="text" name="username" id="username">
                    </div>

                    <div class="div_design">
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password">
                    </div>

                    <div class="div_design">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div class="div_design">
                        <label for="namalengkap">Nama Lengkap : </label>
                        <input type="text" name="namalengkap" id="namalengkap">
                    </div>

                    <div class="div_design">
                        <label for="alamat">Alamat : </label>
                        <input type="text" name="alamat" id="alamat">
                    </div>

                    <div class="div_design">
                        <label for="">Role :</label>
                        <select name="posisi" id="posisi" required>
                            <option value="" selected>Role</option>
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                        </select>
                    </div>

                    <div class="div_design">
                        <input type="submit" class="btn btn-primary" value="Tambah User">
                    </div>
                </form>
                </div>




            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  </body>
</html>