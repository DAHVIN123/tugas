<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Barangs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Barangs::where('nm_barang', 'LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Barangs::all();
        }

        $data = Barangs::paginate(5);
        return view('data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'kd_barang'=>'required|min:1|max:20|unique:barangs',
            'nm_barang'=>'required',
            'tipe_barang'=>'required',
            'jumlah'=>'required',
            'distributor'=>'required',
            'tgl_masuk'=>'required',
            'tgl_keluar'=>'required'
        ]);
          $data =[
          'kd_barang' => $request->kd_barang,
          'nm_barang' => $request->nm_barang,
          'tipe_barang' => $request->tipe_barang,
          'jumlah' => $request->jumlah,
          'distributor' => $request->distributor,
          'tgl_masuk' => $request->tgl_masuk,
          'tgl_keluar' => $request->tgl_keluar,
     ];

          Barangs::create($data);
        return redirect('/data');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangs  $barangs
     * @return \Illuminate\Http\Response
     */
    public function show(Barangs $barangs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangs  $barangs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barangs::find($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangs  $barangs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Request()->validate([
            'kd_barang'=>'required|min:1|max:20|unique:barangs',
            'nm_barang'=>'required',
            'tipe_barang'=>'required',
            'jumlah'=>'required',
            'distributor'=>'required',
            'tgl_masuk'=>'required',
            'tgl_keluar'=>'required'
        ]);

        $data = Barangs::find($id);
        $data->update($request->all());
        return redirect('/data')->with('alert', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangs  $barangs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barangs::find($id);
        $data->delete();
        return redirect('/data')->with('alert', 'Data Berhasil Didelete');
    }
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request){



        if (Auth::attempt($request->only('emailnya', 'passwordnya'))) {
            return redirect('/data')->with('alert', 'Welcome back');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function register()
    {
        return view('register');
    }
    public function registeruser(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
        ]);
        return redirect('/login');
    }
    public function layout()
    {
        return view('layout');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = Barangs::where('nm_barang', 'like', "%" . $keyword . "%")->paginate(5);
        return view('data', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
