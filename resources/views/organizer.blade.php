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
                            <h1 style="margin-left:5%;"> User List </h1>


                                <table class="table table-striped "style="border:none">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Role</th>

                                            <th scope="col" style="align-text:center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($organizers as $user)
                                        <tr>
                                            <td scope="col">{{$user->id}}</td>
                                            <td scope="col">{{$user->name}}</td>
                                            <td scope="col">{{$user->role}}</td>

                                            <td  > <button class="btn btn-secondary btnThemed"  data-toggle="modal" data-target="#AddModal"type="button" data-toggle="popover" title="Sorry" data-content="This feature is under maintain!"><i class="fas fa-trophy"></i> Set Role</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                            @if(count($organizers) < 1)
                                        <tr>
                                         <td colspan="10" class="text-center">There is no result available yet!</td>
                                        </td>
                                      </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div></div></div></div></div>


@endsection


<div class="modal fade" id="AddModal"  >
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header themeColored">
          <h4 class="modal-title" style="color:white">Change Role:</h4>
          <button type="button"  class="close" onclick="reloadPage()" data-dismiss="modal">
            <span style="color:white">&times;</span>
          </button>
        </div>
        {{-- action="{{route('challenges.store')}}" method="POST" --}}
        <div class="modal-body row">

            {{ csrf_field() }}
            <div class="form-group">

              <label for="status" class="form-control-label">Status</label>
              <select  name ="status" id="status" placeholder="Challenge Status" class="form-control">
                <option>Participant</option>
                <option>Organizer</option>
                <option>Admin</option>
              </select>
            </div>

            <button type="button" class="btn btn-secondary pull-right btnThemed">Save Role</button>

        </div>
      </div>
    </div>
</div>

<script>
    $(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})
</script>
