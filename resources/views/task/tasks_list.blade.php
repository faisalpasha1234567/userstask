@extends('layouts.app')

@section('content')
<ol class="breadcrumb page-breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0);">Task</a></li>
<li class="breadcrumb-item active">Task List</li>
</ol>
 <div class="row">
                            <div class="col-sm-12">
                            	<div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2><i class="fal fa-list"></i>&nbsp; Task List</h2>
                                        <div class="panel-toolbar">
                                            <a href="{{ route('create_task_add')}}#" class="btn btn-primary btn-xs pull-right" >
												<i class="fal fa-plus-square"></i> New Task
											</a>
                                        </div>
                                    </div>
           <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="frame-wrap">
                                                <table class="table table-sm m-0">
                                                    <thead class="bg-primary-500">
                            <th>ID</th>
                            <th>Task On</th>
                            
                            <th>Date From</th>
							<th>Date To</th>
							<th>Description</th>
							<th>Status</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks_list as $tasks)
                        
                            <td>{{ $tasks->id }}</td>
							<td>{{ $tasks->dateon }}</td>
                            <td>{{ $tasks->task_date_from }}</td>
							 <td>{{ $tasks->task_date_to }}</td>
                            <td>{{ $tasks->taskdescription }}</td>
                            <td>{{ $tasks->status }}</td>                            
                            <td class="center">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-navicon"></i>&nbsp;&nbsp;&nbsp;
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('task_completed',['id'=>$tasks->id ])}}"><i class="fa fa-pencil-square"></i> Completed</a></li>
                                        
                                    </ul>
                                </div>
                               
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php //require_once 'template/footer.php'; ?>
<script>

    $(document).ready(function() {
        $('#dataTables').DataTable({
            responsive: true
        });
    });

</script>
@endsection