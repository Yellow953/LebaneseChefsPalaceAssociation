<?php

namespace App\Http\Controllers;

use App\Models\CertificateType;
use App\Models\Group;
use App\Models\InsuranceType;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $groups = Group::select('id', 'name', 'color')->orderBy('id', 'desc')->get();
        $insurance_types = InsuranceType::select('id', 'name', 'description')->orderBy('id', 'desc')->get();
        $certificate_types = CertificateType::select('id', 'name', 'description')->orderBy('id', 'desc')->get();

        $data = compact('groups', 'insurance_types', 'certificate_types');
        return view('setting.index', $data);
    }

    public function groups_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required'
        ]);

        Group::create($request->all());

        Log::create([
            'text' => ucwords(auth()->user()->name) . ' create new Group: ' . ucwords($request->name) . ', datetime: ' . now()
        ]);

        return redirect()->back()->with('success', 'Group Created Successfully...');
    }

    public function groups_destroy(Group $group)
    {
        if ($group->can_delete()) {
            Log::create([
                'text' => ucwords(auth()->user()->name) . ' deleted Group: ' . ucwords($group->name) . ', datetime: ' . now()
            ]);

            $group->delete();

            return redirect()->back()->with('success', 'Group Deleted Successfully...');
        } else {
            return redirect()->back()->with('danger', 'Unauthorized Access...');
        }
    }

    public function insurance_types_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        InsuranceType::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        Log::create([
            'text' => ucwords(auth()->user()->name) . ' create new Insurance Type: ' . ucwords($request->name) . ', datetime: ' . now()
        ]);

        return redirect()->back()->with('success', 'Insurance Type Created Successfully...');
    }

    public function insurance_types_destroy(InsuranceType $insurance_type)
    {
        if ($insurance_type->can_delete()) {
            Log::create([
                'text' => ucwords(auth()->user()->name) . ' deleted Insurance Type: ' . ucwords($insurance_type->name) . ', datetime: ' . now()
            ]);

            $insurance_type->delete();

            return redirect()->back()->with('success', 'Insurance Type Deleted Successfully...');
        } else {
            return redirect()->back()->with('danger', 'Unauthorized Access...');
        }
    }

    public function certificate_types_create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        CertificateType::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        Log::create([
            'text' => ucwords(auth()->user()->name) . ' create new Certificate Type: ' . ucwords($request->name) . ', datetime: ' . now()
        ]);

        return redirect()->back()->with('success', 'Certificate Type Created Successfully...');
    }

    public function certificate_types_destroy(CertificateType $certificate_type)
    {
        if ($certificate_type->can_delete()) {
            Log::create([
                'text' => ucwords(auth()->user()->name) . ' deleted Certificate Type: ' . ucwords($certificate_type->name) . ', datetime: ' . now()
            ]);

            $certificate_type->delete();

            return redirect()->back()->with('success', 'Certificate Type Deleted Successfully...');
        } else {
            return redirect()->back()->with('danger', 'Unauthorized Access...');
        }
    }

    public function backup_export()
    {
        $filePath = public_path('backups/database_backup.sql');

        exec('mysqldump -u ' . env('DB_USERNAME') . ' -p ' . env('DB_PASSWORD') . ' ' . env('DB_DATABASE') . ' > ' . $filePath);

        return response()->download($filePath)->deleteFileAfterSend(false);
    }

    public function backup_import(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');

        $sql = file_get_contents($file);

        DB::unprepared($sql);

        return redirect()->back()->with('success', 'Database imported successfully.');
    }
}
