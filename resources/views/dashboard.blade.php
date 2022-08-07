@extends('layouts.app')

@section('content')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    

   
        
        
        
        <div class="row">
                            <div class="col-md-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2> Users Tasks</h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                     
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                           <div class="row">
                                           
												<div class="col-md-3" style="margin-top: 8px;">
													<div class="card border m-auto m-lg-0" style="max-width: 18rem;">
														<img src="" class="card-img-top" height="100px" alt="...">
														<div class="card-body"> 
															<h5 class="card-title"><center></center></h5>
															<center><a href="" class="btn btn-primary btn-xs" style="">Click Here</a></center>
														</div>
														<ul class="list-group list-group-flush">
														
															<li class="list-group-item">
															<br>
															
															</li>
															
														
														</ul>
													</div>
												</div>
											
                                           </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div> 
        
        
        
        
        

@endsection
