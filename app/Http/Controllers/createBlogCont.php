<?php

namespace App\Http\Controllers;
use App\Models\BlogModel;

use Illuminate\Http\Request;

class createBlogCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = BlogModel :: get();

        return view('blog/index',['data'  =>$blog ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               //
               $data =   $this->validate($request, [
                "title"    => "required | min:10 | max : 150",
                "content"  => "required|min:30 | max:15000",
                "startdate"     => "required|date",
                "enddate"     => "required|date",
                "image"    => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            ]);

            # Uploading the image to the server
            $imageName = time() . uniqid() . '.' . $request->image->extension();

            # Convert data to timestamp
            $data['startdate'] = strtotime($data['startdate']);
            $data['enddate'] = strtotime($data['enddate']);

            $request->image->move(public_path('blogs'), $imageName);

            $data['image'] = $imageName;


            // DB Query Builder . . .
            // $op =   DB::table('blogs')->insert($data);
            BlogModel ::create($data);




            return redirect(url('blog/index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        # Fetch data
        //  $GetBlog = BlogModel :: where('id',$id)->get();    // $student[0]->name
        $GetBlog  = BlogModel::find($id);                // $student->name
        // dd($GetBlog);
        // $time = $GetBlog ->startdate;
        // dd($time);

        return view('blog.edit' , ['data' => $GetBlog]);
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
        $data =   $this->validate($request, [
            "title"    => "required",
            "content"  => "required",
            "image"  => "required",
        ]);
        $imageName = time() . uniqid() . '.' . $request->image->extension();


        $request->image->move(public_path('blogs'), $imageName);

        $data['image'] = $imageName;
        BlogModel::where('id',$id)->update($data);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove(Request $request)
    {
        // BlogModel :: where('id', $id) ->delete();


        # Fetch User Data . . .
      # Fetch User Data . . .
      $Blooge = BlogModel::find($request->id);

      $op =   BlogModel::where('id', $request->id)->delete();   // delete from users where id = $id

      if ($op) {

          # Remove image . . .
          unlink(public_path('blogs/' . $Blooge->image));

          $message = "blog Removed Successfully";
          session()->flash('Message-success', $message);
      } else {
          $message = "blog Not Removed";
          session()->flash('Message-error', $message);
      }

      return redirect(url('blog/index'));
  }




}
