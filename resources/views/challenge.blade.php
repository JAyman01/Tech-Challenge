@extends('layouts.app')

@section('content')

<div class="page-header-top-nav">
    <div class="page-header-top-nav-inside">
        <ul class="snippet-top-level-nav" id="snippet-top-level-nav">
            <ul class="snippet-top-level-nav" id="snippet-top-level-nav">
                <li style="margin-right:25%;"><a href="/home" class="navbar-brand theme" >Home</a></li>
                <li style="margin-right:25%;"><a href="/challenges" class="navbar-brand theme" >Challenges</a></li>
                <li style="margin-right:25%;"><a href="/organizers" class="navbar-brand theme">Users</a></li>
                <li style="margin-right:25%;"><a href="/results" class="navbar-brand theme">Results</a></li>
                <li style="margin-right:25%;"><a href="/stats" class="navbar-brand theme">Statistics</a></li>
            </ul>
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
                                @include('popupchallenge')
                            </div>
                            <h1 style="margin-left:5%;"> List of challenges</h1>
                            @method('DELETE')
                            <button class="btn btn-secondary add-new btnThemed" data-toggle="modal" data-target="#AddModal"> <i class="fa fa-plus" aria-hidden="true"></i>Add </button>

                                <table class="table table-striped "style="border:none">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" >Description</th>
                                            <th scope="col" >Start Date</th>
                                            <th scope="col" >Deadline</th>
                                            <th scope="col" style="align-text:center">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($challenges as $challenge)
                                        <tr>
                                           <td id="idChallenge">{{ $challenge->id_challenge }}</td>
                                           <td>{{ $challenge->title }}</td>
                                           <td>{{ $challenge->description }}</td>
                                           <td>{{ $challenge->status }}</td>

                                           <td>{{ $challenge->startDate }}</td>

                                           <td>{{ $challenge->finishDate }}</td>

                                           <td class="text-center">
                                            <button  id="editChallenge" onclick="edit('<?php echo $challenge->id_challenge;?>')"  class="btn btn-secondary btnThemed"><i class="fa fa-edit"></i> Edit</button></td>
                                          <td class="text-center">
                                           <form action="{{ route('challenges.destroy', $challenge->id_challenge)}}" method="post">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-secondary btnThemed" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                           </form>
                                          </td>
                                            <td class="text-center">
                                                <form action="{{ route('closeChallenge', $challenge->id_challenge)}}" method="post">
                                                    {{ csrf_field() }}
                                                    @if( $challenge->status=="ongoing")
                                                    <button class="btn btn-secondary btnThemed" type="submit"><i class="fa fa-close"></i> Close</button>
                                                    @endif
                                                    @if( $challenge->status=="closed")
                                                    <button class="btn btn-secondary btnThemed" type="submit" disabled><i class="fa fa-close"></i> Close</button>
                                                    @endif
                                                  </form>
                                          </td>
                                        </tr>
                                        @endforeach
                                        @if(count($challenges) < 1)
                                        <tr>
                                         <td colspan="10" class="text-center">There is no challenge available yet!</td>
                                        </td>
                                      </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div></div></div></div></div>




@endsection
