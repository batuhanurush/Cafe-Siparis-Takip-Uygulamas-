<x-app-layout>
    <x-slot name="title" >Bekleyen Siparişler</x-slot>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered ">
                <div class="row">@foreach($icecekler as $icecek)
                    <div class="col col-md-3">

                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header"><span>Sipariş No :{{$icecek->id}}</span>
                         
                            <span class="float-right">{{$icecek->created_at->format('d-m-Y') }}</span><br>
                            <span class="float-right">{{$icecek->created_at->toTimeString()}}</span></div>
                            <div class="card-body">
                                <h5 class="card-title">{{$icecek->location}}</h5>
                                <p> {{$icecek->kullanici}}<br>{{$icecek->count}} {{$icecek->option_1}}<br>{{$icecek->note}}
                                </p>
                               
                                <a  href="{{route('delete.beverages',$icecek->id)}}" title="Sil" style="float:right;" class="btn btn-sm btn-danger">Sil</a>
                               
                                </div>
                        </div>

                    </div>@endforeach
                </div>

        </div>


    </div>



    </table>
    {{$icecekler->links()}}
    </div>
    </div>
    <x-slot name="js">
    </x-slot>
</x-app-layout>