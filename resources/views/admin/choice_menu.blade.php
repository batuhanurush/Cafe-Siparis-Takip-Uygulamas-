<x-app-layout>
    <x-slot name="title"> Siparişler</x-slot>
    <div class="card">
        <div class="card-body">

            <table class="table table-bordered ">
                <div class="row" style="text-align:center;">
                    <h4> Siparişler</h4>
                    <div style="text-align:center;">
                    <a href="{{ route('drinkss')}}">  <button  style="margin:10px; width:70%; height:80px; align:center;" type="button"
                            class="btn btn-outline-warning">  Hızlı Siparişler</button></a><br>
                        
                            <a href="{{ route('beverages_listt')}}">  <button  style="margin:10px; width:70%; height:80px; align:center;" type="button"
                            class="btn btn-outline-info">  Standart Siparişler</button></a><br>
                    </div>
                </div>
        </div>
    </div>
    </table>
    </div>
    </div>
    <x-slot name="js">
    </x-slot>
</x-app-layout>