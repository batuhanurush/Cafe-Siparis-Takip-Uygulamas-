<x-app-layout>
    <x-slot name="title">Standart Siparişler</x-slot>
    <div class="card">
        <div class="card-body">

            <table class="table table-bordered ">
                <div class="row">@foreach($drinks as $drink)
                    <div class="col col-md-3">
                  

                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header"><span>{{$drink->d_kullanici}} - Standart Siparişi</span><span class="float-right"></span><br>
                          </div>
                            <div class="card-body">

                              
                               09:00 : {{$drink->d_option_1}} - {{$drink->d_note1}}  <br> 10:30 : {{$drink->d_option_2}} - {{$drink->d_note2}} <br> 13:00 : {{$drink->d_option_3}}- {{$drink->d_note3}} <br> 15:30 : {{$drink->d_option_4}} - {{$drink->d_note4}} 
                                </p>


                            </div>
                        </div>

                    </div>@endforeach
                </div>

        </div>


    </div>



    </table>

    </div>
    </div>
    <x-slot name="js">
    </x-slot>
</x-app-layout>