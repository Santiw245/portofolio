<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index", "show"]]);
    }

     public function index()
    {
        $data = array(
            'id' => "project",
            'project' => Project::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('project.project')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'picture' => 'image|nullable'
        ]);
        $project = new Project;
        $project->judul = $request->input('judul');
        $project->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }
        else{
            $filenameSimpan = 'noimage.png';
        }
        $project->picture = $filenameSimpan;
        $project->save();

        return redirect('project')->with ('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Post::find($id);
        $data = array(
            'id' => "project",
            'project' => Project::find($id)
        );
        return view('project.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "project",
            'project' => Project::find($id)
        );
        return view('project.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->judul = $request->input('judul');
        $project->deskripsi = $request->input('deskripsi');
        if ($request->hasFile('picture')){
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        }
        else{
            $filenameSimpan = 'noimage.png';
        }
        $project->picture = $filenameSimpan;

        $project->update();
        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('project')->with('success', 'Berhasil menghapus data');
    }

    public function hapus($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/project')->with('success', 'Berhasil menghapus data');
    }
}
