<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
class icecekler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $icecekler = Member::latest()->paginate(15);
        return view('admin.list',compact('icecekler'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        
        $user = Auth::user();
        $id = $user->id;
        $name = $user->name;

       $member = Member::create($request->post()); //burda database e kayıt yapıyoruz. ama models de değişiklik yapmalıyız 
      
       $member->kullanici = $name;
       $member->save();
       
      // Member::insert(['kullanici' => $name]);  
       return redirect()->route('dashboard')->with('success','Siparişiniz Başarıyla Oluşturuldu !');
     
            
            //$icecekler->id = $request->id;
         /*   $icecekler = new icecekler([
                $name => $request->get('kullanici'),
                'option_1' => $request->get('option_1'),
                'option_2' => $request->get('option_2'),
                'option_3' => $request->get('option_3'),
                'option_4' => $request->get('option_4'),
                
            ]);
            $icecekler->save();
            return redirect('dashboard');
           $icecekler->option_1 = $request->option_1;
            $icecekler->option_2 = $request->option_2;
            $icecekler->option_3 = $request->option_3;
            $icecekler->option_4 = $request->option_4;
            $icecekler->save();*/
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
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        Member::find($id)->delete();
        return redirect()->route('drinkss')->with('danger','Sipariş Başarıyla Silindi !');
    }

    public function destroy($id)
    {
        //
    }
}