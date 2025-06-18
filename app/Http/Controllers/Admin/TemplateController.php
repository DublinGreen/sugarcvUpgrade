<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Models\Users;
use App\Models\UserMeta;
use App\Models\ReferFriends;

class TemplateController extends Controller
{
	public function template(){		
		return view('backend.theme.index');
	}
	

}
