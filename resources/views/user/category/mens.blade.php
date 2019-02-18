@extends("layout.userlayout")

@section('title')
Giveapp | Men's Fashion
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 50%; margin-left:36%">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        
                    </div>
                </div>
            </nav>
            
        <div class="card-deck">
            <div class="card" data-toggle="modal" data-target="#exampleModal">
                <img class="card-img-top" src="/images/meliodas.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Organizer</h5>
                    <p class="card-text">Quite Used</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        <div class="card">
                <img class="card-img-top" src="/images/imashime no fukkatsu.jpg" alt="Card image cap">
        <div class="card-body">
                <h5 class="card-title">Headphone</h5>
                    <p class="card-text">Bought a new one</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        <div class="card">
                <img class="card-img-top" src="/images/sagiri.png" alt="Card image cap">
        <div class="card-body">
                <h5 class="card-title">Earphone</h5>
                <p class="card-text">Quite Used</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>

        <br> <!--  Break from card of decks from pagination -->

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>

@endsection

@section('modal')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection