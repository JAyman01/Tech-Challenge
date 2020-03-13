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
            <div class="card" style="border:none">
                <div class="card-header themeColored" ></div>
                        <div class="card-body">
                            <div>
                               {{-- // @include('popupchallenge') --}}
                            </div>
                            <h1 style="margin-left:5%;"> Result List </h1>


                                <table class="table table-striped "style="border:none">
                                    <thead>
                                        <tr>

                                            <th scope="col">Challenger ID</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Winner</th>

                                            <th scope="col" style="align-text:center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($results as $result)
                                        <tr>
                                            <td scope="col">{{$result->id_challenge}}</td>
                                            <td scope="col">
                                                <a class=" theme" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                   See Code
                                                  </a>

                                                  <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        {{$result->code}}
                                                    </div>
                                                  </div>
                                                </td>
                                            <td scope="col">{{$result->winner}}</td>

                                            <td scope="col" > <button class="btn btn-secondary btnThemed" type="button" data-toggle="popover" title="Sorry" data-content="This feature is under maintain!"><i class="fas fa-trophy"></i> Set Winner</button>
                                            </td>

                                        </tr>
                                        @endforeach
                                            @if(count($results) < 1)
                                        <tr>
                                         <td colspan="10" class="text-center">There is no result available yet!</td>
                                        </td>
                                      </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div></div></div></div></div>





@endsection


