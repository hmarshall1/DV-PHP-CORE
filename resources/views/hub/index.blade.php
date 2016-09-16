@extends('layout')

@section('header')
<!-- page head start-->
<div class="page-head">
    <h3>Hub</h3><span class="sub-title">Hub/</span>
    <span class="pull-right"><input class="form-control" name="search" placeholder="Search module or service" type="text"></span>
</div>
<!-- page head end-->

@endsection

@section('content')
<div id="service-desc" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Service Name</h4>
      </div>
      <div class="modal-body">
         
          body goes here 

            
              <div class="dynamic-space"></div>

      </div></form></div>
  </div>
</div>

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
         
        @if($services->count())
             @foreach($services as $service)
             <a data-toggle="modal" data-target="#service-desc" />
            <div class="col-lg-3 col-sm-6 m-b-30">
                <div class="panel panel-danger">
                    <div class="panel-header"><img src="https://store.devless.io/ico/schools.png" width="228" height="80" /></div>
                    <div class="panel-header"><br><h5><center>{{substr(strtoupper($service->name),0,10)}}<span title="{{$service->description}}"</span>({{substr($service->description, 0, 14)}}@if(strlen($service->description)>14)...@endif)</center></h5></div>
                    <div class="panel-body" >
                          <center>

                        <div class="btn-group" role="group">
                            <a type="button" href="{{ route('services.edit', $service->id) }}" class="btn btn-default">Install </a>
                             <a type="button" class="btn btn-default">Download </a>  
                             <a type="button" class="btn btn-default" data-toggle="modal" data-target="#service-desc"> <center>&nbsp; ...</center></a>
                           
                        </div>
                        </center>

                    </div>
                </div>

            </div>
             </a>
            @endforeach
        {!! $services->render() !!}
    @else
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title" id="myModalLabel">Quick Tutorial</h4>
                   </div>
                   <div class="modal-body text-center">
                       You have no Services, lets walkthrough a quick tutorial on how to create a Service. Click on Getting Started to begin.
                   </div>
                   <div class="modal-footer">
                       <a href="http://devless.io/#!/tutorial/" target="_blank" class="btn btn-primary">Getting Started</a>
                   </div>
               </div>
           </div>
       </div>
       <script>
           window.onload(function(){
               $('#myModal').modal('show');
           }());
       </script>
            @endif
    </div>
</div><!--body wrapper end-->


@endsection
