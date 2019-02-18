@extends("layout.adminlayout")

@section('title')
Admin | Add Admin
@endsection

<!-- @section('pageHeader')

@endsection

@section('pageHeaderSub')

@endsection -->

@section('content')
<link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/addadmin.css')}}>
<script src={{URL::asset('js/admin.dashboard/admin.js')}}></script>

<div class = "content">
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Admin Credentials</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class= "form-control" type="text" placeholder="Username" value=""/>
                                    </div>
                                </div>

                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" placeholder="Password"/>
                                    </div>
                                </div>

                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address 
                                        </label>
                                        <input class="form-control" type="email" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" placeholder="Last Name" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Home Address" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City" value=""/>
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input class="form-control" type="text" placeholder="Country" value=""/>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="number" placeholder="ZIP Code"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input class="form-control" type="text" placeholder="Job Position"/>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info btn-fill pull-right" type="submit">Add Admin
                            </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-image">
                        <img src="/images/meliodas.png"/>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" alt="..." src="/images/boy-1.png"  data-target="#exampleModal" data-toggle="modal" style="background-color: powderblue;"/>
                                <h5 class="title">User</h5>
                            </a>
                            <p class="description">Job Position</p>
                        </div>
                        <p class="description text-center">Join the Brofist Army
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex align-content-around flex-wrap">
            <img src="/images/boy-1.png" alt="Avatar" class="avatar" onclick="changeColor()">
            <img src="/images/boy-10.png" alt="Avatar" class="avatar">
            <img src="/images/boy-11.png" alt="Avatar" class="avatar">
            <img src="/images/boy-12.png" alt="Avatar" class="avatar">
            <img src="/images/boy-13.png" alt="Avatar" class="avatar">
            <img src="/images/boy-14.png" alt="Avatar" class="avatar">
            <img src="/images/boy-15.png" alt="Avatar" class="avatar">
            <img src="/images/boy-16.png" alt="Avatar" class="avatar">
            <img src="/images/boy-17.png" alt="Avatar" class="avatar">
            <img src="/images/boy-18.png" alt="Avatar" class="avatar">
            <img src="/images/boy-19.png" alt="Avatar" class="avatar">
            <img src="/images/boy-2.png" alt="Avatar" class="avatar">
            <img src="/images/boy-20.png" alt="Avatar" class="avatar">
            <img src="/images/boy-21.png" alt="Avatar" class="avatar">
            <img src="/images/boy-22.png" alt="Avatar" class="avatar">
            <img src="/images/boy-3.png" alt="Avatar" class="avatar">
            <img src="/images/boy-4.png" alt="Avatar" class="avatar">
            <img src="/images/boy-5.png" alt="Avatar" class="avatar">
            <img src="/images/boy-6.png" alt="Avatar" class="avatar">
            <img src="/images/boy-7.png" alt="Avatar" class="avatar">
            <img src="/images/boy-8.png" alt="Avatar" class="avatar">
            <img src="/images/boy-9.png" alt="Avatar" class="avatar">
            <img src="/images/boy.png" alt="Avatar" class="avatar">
            <img src="/images/girl-1.png" alt="Avatar" class="avatar">
            <img src="/images/girl-10.png" alt="Avatar" class="avatar">
            <img src="/images/girl-11.png" alt="Avatar" class="avatar">
            <img src="/images/girl-12.png" alt="Avatar" class="avatar">
            <img src="/images/girl-13.png" alt="Avatar" class="avatar">
            <img src="/images/girl-14.png" alt="Avatar" class="avatar">
            <img src="/images/girl-15.png" alt="Avatar" class="avatar">
            <img src="/images/girl-16.png" alt="Avatar" class="avatar">
            <img src="/images/girl-17.png" alt="Avatar" class="avatar">
            <img src="/images/girl-18.png" alt="Avatar" class="avatar">
            <img src="/images/girl-19.png" alt="Avatar" class="avatar">
            <img src="/images/girl-2.png" alt="Avatar" class="avatar">
            <img src="/images/girl-20.png" alt="Avatar" class="avatar">
            <img src="/images/girl-21.png" alt="Avatar" class="avatar">
            <img src="/images/girl-22.png" alt="Avatar" class="avatar">
            <img src="/images/girl-23.png" alt="Avatar" class="avatar">
            <img src="/images/girl-24.png" alt="Avatar" class="avatar">
            <img src="/images/girl-25.png" alt="Avatar" class="avatar">
            <img src="/images/girl-26.png" alt="Avatar" class="avatar">
            <img src="/images/girl-3.png" alt="Avatar" class="avatar">
            <img src="/images/girl-4.png" alt="Avatar" class="avatar">
            <img src="/images/girl-5.png" alt="Avatar" class="avatar">
            <img src="/images/girl-6.png" alt="Avatar" class="avatar">
            <img src="/images/girl-7.png" alt="Avatar" class="avatar">
            <img src="/images/girl-8.png" alt="Avatar" class="avatar">
            <img src="/images/girl-9.png" alt="Avatar" class="avatar">
            <img src="/images/girl.png" alt="Avatar" class="avatar">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Select</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
<!-- <div>Icons made by 
    <a href="http://www.freepik.com/" title="Freepik">Freepik</a> 
    from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> 
    is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
</div> -->