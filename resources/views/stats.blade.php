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


        <div class="container">
            <h2 class="text-center fw-500 mb-6 wow fadeInDown animation-delay-2" style="visibility: visible; animation-name: fadeInDown; color:white;margin-bottom:10%">Amazing statistics</h2>
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn animation-delay-2" style="visibility: visible; animation-name: fadeIn;">
                <div class="text-center">
                  <div class="circle" id="circles-1"><div class="circles-wrp" style="position: relative; display: inline-block;color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"><path fill="transparent" stroke="rgba(255,255,255,0.3)" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 59.92013365356088 2.500055466403218 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#fff" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 0 1 84.53293895598404 112.0037008892825 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 42px; height: 120px; line-height: 120px;">43%</div></div></div>
                  <h4 class="text-center theme" style="margin-top:5%">Done Challenges </h4>
                  <p class="small-font theme">Done challenges after submitting.</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn animation-delay-3" style="visibility: visible; animation-name: fadeIn;">
                <div class="text-center">
                  <div class="circle" id="circles-2"><div class="circles-wrp" style="position: relative; display: inline-block;color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"><path fill="transparent" stroke="rgba(255,255,255,0.3)" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 59.92013365356088 2.500055466403218 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#fff" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 26.254230459878087 106.55612782593694 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 42px; height: 120px; line-height: 120px;">60%</div></div></div>
                  <h4 class="text-center theme" style="margin-top:5%">Active Participants</h4>
                  <p class="small-font  theme">Active Participants who submit their code.</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn animation-delay-4" style="visibility: visible; animation-name: fadeIn;">
                <div class="text-center">
                  <div class="circle" id="circles-3"><div class="circles-wrp" style="position: relative; display: inline-block;color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"><path fill="transparent" stroke="rgba(255,255,255,0.3)" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 59.92013365356088 2.500055466403218 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#fff" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 5.300905318779165 42.27264709397259 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 42px; height: 120px; line-height: 120px;">80%</div></div></div>
                  <h4 class="text-center theme" style="margin-top:5%">Winners</h4>
                  <p class="small-font theme">.</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 wow fadeIn animation-delay-5" style="visibility: visible; animation-name: fadeIn;">
                <div class="text-center">
                  <div class="circle" id="circles-4"><div class="circles-wrp" style="position: relative; display: inline-block;color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"><path fill="transparent" stroke="rgba(255,255,255,0.3)" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 59.92013365356088 2.500055466403218 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#fff" stroke-width="5" d="M 59.98828879078753 2.5000011926297603 A 57.5 57.5 0 1 1 59.92013365356088 2.500055466403218 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 42px; height: 120px; line-height: 120px;">100%</div></div></div>
                  <h4 class="text-center theme" style="margin-top:5%" >Organizers</h4>
                  <p class="small-font theme">make the world more.</p>
                </div>
              </div>
            </div>

          </div>



    </div>
</div>
@endsection
