@extends('layouts.app')

@section('content')

<div class="page-header-top-nav">
    <div class="page-header-top-nav-inside">
        <ul class="snippet-top-level-nav" id="snippet-top-level-nav">
            <li style="margin-right:25%;"><a href="/home" class="navbar-brand theme" >Home</a></li>
            <li style="margin-right:25%;"><a href="/challenges" class="navbar-brand theme" >Challenges</a></li>
            <li style="margin-right:25%;"><a href="/organizers" class="navbar-brand theme">Users</a></li>
            <li style="margin-right:25%;"><a href="/results" class="navbar-brand theme">Results</a></li>
            <li style="margin-right:25%;"><a href="/stats" class="navbar-brand theme">Statistics</a></li>
        </ul>
    </div>
</div>

<div class="container" style="margin-top:5%">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card"style="border:none">
                <div class="card-header themeColored" >Dashboard</div>

                <div class="card-body">
                  <div class="row">
                    <div class="card col-md-6">

                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="https://www.goodnet.org/photos/281x197/28554_hd.jpg"
                            alt="Card image cap">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                          <!-- Title -->
                          <h4 class="card-title">Challenges</h4>
                          <!-- Text -->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                          <!-- Button -->
                          <a href="#" class="btn btn-secondary btnThemed">check</a>

                        </div>

                      </div>




                      <div class="card col-md-6">

                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top"  style="height: 125%;" src="https://www.marj3.com/wp-content/uploads/2018/03/competition.jpg"
                            alt="Card image cap">
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body" >

                          <!-- Title -->
                          <h4 class="card-title" style="margin-top:15%">Users</h4>
                          <!-- Text -->
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                          <!-- Button -->
                          <a href="#" class="btn btn-secondary btnThemed">check</a>

                          </div>

                      </div>
                    </div>



                      </div>
            </div>
        </div>
    </div>
</div>
@endsection
