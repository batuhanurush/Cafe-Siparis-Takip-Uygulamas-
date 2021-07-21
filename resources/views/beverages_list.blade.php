<x-app-layout>
    <x-slot name="title">Profil</x-slot>
    <div class="card">
        <div class="card-body">
        
            <table class="table table-bordered "><br>
            <h3 style="text-align:center;">Default Siparişlerim</h3><br>
 <a href="{{ route('drinks.create')}}">Yeni Ekle</a> 
                <div class="container">
                
                    <div class="row">
             
                        <table class="table">
                            <thead>
                                <tr>
                              
                                    <th scope="col">09:00</th>
                                    <th scope="col">10:30</th>
                                    <th scope="col">13:00</th>
                                    <th scope="col">15:30</th>
                                    <th scope="col">Eylemler</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($drinks as $drink)
                                <tr>
                            
                                    <th scope="col">{{$drink->d_option_1}}</th>
                                    <th scope="col">{{$drink->d_option_2}} </th>
                                    <th scope="col">{{$drink->d_option_3}}</th>
                                    <th scope="col">{{$drink->d_option_4}} </th>
                                    <th scope="col">
                                    <a href="{{route('drinks.edit',$drink->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen">Güncelle</i>
                                    
                                    </a> </th>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
  
                    <div class="col-sm border border-light" style="margin-left: 4rem;">

                    </div>
                    <br>



                </div>
        </div>
        </table>

    
    </div>
    </div>
    <x-slot name="js">
    </x-slot>
</x-app-layout>