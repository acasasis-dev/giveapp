@extends("layout.userlayout")

@section('title')
Giveapp | Profile
@endsection

<!-- @section('pageHeader')

@endsection

@section('pageHeaderSub')

@endsection -->

@section('content')

<div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button style="margin-left: 70%; border-radius: 70%; height: 10%; width:5%;"type="button" class="btn btn-outline-secondary"><i class="fas fa-cog"></i></button>
                    <button type="button" class="btn btn-outline-secondary"><a href="/user/profile/donateitem">Donate Item</a></button>
        
                </div>
            </nav>
     
    <!-- Profile Content         -->
<div class="rela-block container">
    <div class="rela-block profile-card">
        <div class="profile-pic" id="profile_pic"></div>
            <div class="rela-block profile-name-container">
                <div class="rela-block user-name" id="user_name">{{ Auth::user()->name }}</div>
                <div class="rela-block user-desc" id="user_description">{{ Auth::user()->email }}</div>
            </div>
            
            <div class="rela-block profile-card-stats">
                <!-- approved -->
                <div class="floated profile-stat works" id="num_works">1<br></div>
                <!-- for checking -->
                    <div class="floated profile-stat followers" id="num_followers">Sample<br></div>
                    <!-- received items -->
                        <div class="floated profile-stat following" id="num_following">Sample<br></div>
            </div>
    </div>
</div>

        <!-- images -->
        <div class="card-deck">
          <div class="card" data-toggle="modal" data-target="#exampleModal">
            <img class="card-img-top" src="/images/meliodas.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sample</h5>
              <p class="card-text">Sample</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
            <!-- end of file -->
        </div>

@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Comment Box -->
        <div class="media comment-box">
            <div class="media-left">
                <a href="#">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">User</h4>
                <p>Sample Comment</p>              
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection