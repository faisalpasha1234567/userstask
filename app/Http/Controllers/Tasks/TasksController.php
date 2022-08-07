<?php
namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\master_tasks;
use App\tasks;
class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
     
      public function tasks_list() {
         $data['tasks_list'] = DB::table('tasks as ts')
		      ->select('mts.description as dateon','ts.id as id','ts.task_date_from as task_date_from',
			  'ts.task_date_to as task_date_to','ts.description as taskdescription','ts.status as status')
		      ->leftjoin('master_tasks as mts','ts.task_id','=','mts.id')
			  ->orderby('mts.id')
			  ->get();
			   return view('task.tasks_list',$data);
      }
     
    public function create_task_add() {
        
        
        $master_tasks =  master_tasks::all();
        return view('task.create_task_add',compact('master_tasks'));
    }
    
     public function task_store(Request $request){
        
        $add_task =  new tasks();
		$add_task->user_id = Auth::user()->id;
		$add_task->task_id = $request->master_task;
		$add_task->description = $request->description;
		$add_task->task_date_from = date('Y-m-d',strtotime($request->task_date_from));
		$add_task->task_date_to = date('Y-m-d',strtotime($request->task_date_to));
		$add_task->save();
		
        return redirect('/tasks_list');
         
     }
 
  public function task_completed($id){
	  $update_task =   tasks::find($id);
	  $update_task->status = 'completed';
	  $update_task->save();
	  return redirect('/tasks_list');
	  
	  
  }
}
