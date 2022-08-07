@extends('layouts.app')

@section('content')


<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
<li class="breadcrumb-item active">Create Task </li>
</ol>
<!-- /.row -->

<!-- /.row -->
 <form  action="{{ route('task_store') }}" method="post" enctype="multipart/form-data">
 <div class="panel-body">
                <div class="row">
                    <div id="panel-2" class="panel">
                    <div class="col-sm-12">
<div class="panel-hdr">
<h2><span class="fal fa-plus-hexagon"> </span>&nbsp; Create Task</h2>
</div>




        
           
             <div class="ln_solid"></div><br>
               @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                       @endforeach
                     </ul>
                      </div>
                @endif  
                
            <div class="panel-body">
                <div class="row">
                    <div id="panel-2" class="panel">
                    <div class="col-sm-12">
                       
                          @csrf
                           
                                
                                    <div class="row">
                                        
                                       <div class="col-sm-8">
                                           
										
                                          <div class="form-group has-success">
                                              <br>
                                              
                                              <br>
                                             <label  class="control-label" for="Task">Select Date</label>
                                            
                                                  <select class="form-control input-sm " name="master_task" id="master_task">
                                                      @foreach($master_tasks as $task)
                                                       <option value="{{ $task->id }}">{{ $task->description }}</option>
                                                      @endforeach 
                                                  </select>
                                              
                                           
                                               
                                          </div>
                                        </div>
                                        <div class="col-sm-8">
                                          <div class="form-group has-success">
                                              <br>
                                               <br>
                                             <label required class="control-label" for="Description">Description</label>
                                            <input required width="1000px;" class="form-control input-xl " type="text" name="description" 
                                            value="" 
                                             placeholder="Enter Description" id="description">
                                              
                                          </div>
                                        </div>
                                 <div class="col-sm-8">
                                          <div class="form-group has-success">
                                              <br>
                                               <br>
                                             <label required class="control-label" for="Description">Task Date From</label>
                                            <input required width="1000px;" class="form-control input-xl " type="date" name="task_date_from" 
                                            value="" 
                                             id="task_date_from">
                                             
                                          </div>
                                        </div>
										 <div class="col-sm-8">
                                          <div class="form-group has-success">
                                              <br>
                                               <br>
                                             <label required class="control-label" for="Description">Task Date To</label>
                                            <input required width="1000px;" class="form-control input-xl " type="date" name="task_date_to" 
                                            value="" 
                                             id="task_date_to">
                                              
                                          </div>
                                        </div>
                                       
                                       
                                      
                                         
                                       
                                    </div>
                                </div>
                            </div>
                          <div class="col-sm-12">
                              
                            </div>
		
       <div class="col-sm-12">
               <div class="row">
                                        
                                       <div class="col-sm-12">
                                           <br>
                            <button type="submit" name="submit" class="btn btn-primary">Save Task</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            
                               </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        
                    
                    <!-- /.col-lg-12 (nested) -->
                
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
</div>
</div>
</form>
<!-- /.row -->
<?php //require_once 'template/footer.php'; ?>
<!--
    <script src="../scripts/bootstrap-datepicker.min.js"></script>
    <script>
        $('[datepicker]').datepicker(
            {
                format: 'dd-mm-yyyy'
            }
        );
    </script>
-->

<script>

     

 
 
 
 
   
    
</script>
@endsection
