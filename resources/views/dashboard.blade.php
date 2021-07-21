<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Oluştur</title>
</head>

<body>


    <x-app-layout>
        <x-slot name="title">Siparişler Oluştur</x-slot>
        <!-- Button trigger modal -->
        <button style="float:right; background-color:#f0ad4e;" type="button" class="btn btn-sm">
       <a style="color:white; text-decoration:none;" href="{{ route('drinks.index')}}">
     Standart Siparişlerim</a></button>
<br>
<br>

        <div class="card text-center">
            <div class="card-header">
                <h4>Sipariş Oluştur</h4>
            </div>
            <br> <br>
            <div class="container">
                <form method="POST" action="{{route('icecekler')}}"> @csrf
                    <div class="row">
                        <div class="col-sm">
                            <select name="option_1" class="form-select" aria-label="Default select example">
                                <option name="option_2">Yeşil Çay</option>
                                <option name="option_2">Çay</option>
                                <option name="option_2">Nescafe</option>
                                <option name="option_2">Su</option>
                                <option name="option_2">Türk Kahvesi</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <input type="text" name="count" class="form-control" id="drink_count"
                                placeholder="Sipariş Sayısı">
                        </div>
                        <div class="col-sm">
                            <select name="location" class="form-select" aria-label="Default select example">
                                <option name="location_1">Yazılım-Destek</option>
                                <option name="location_2">AR-GE</option>
                                <option name="location_3">Yazılım</option>
                                <option name="location_4">Satış</option>
                                <option name="location_5">Genel Müdür</option>
                                <option name="location_6">Toplantı Odası</option>
                                <option name="location_7">Büyük Toplantı Odası</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <input type="text" name="note" class="form-control" id="count" placeholder="Notunuz..">
                        </div><br>
                        <div class="row">
                        </div><br>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-success float-right"> Oluştur
                        </button>
                    </div>
                    <!-- <button type="button" class="btn btn-success"> Ekle </button><br><br>-->
            </div>
            <br>

        </div>
        </form>
        </div>
        </div>


        <x-slot name="js">
        </x-slot>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </x-app-layout>
</body>

</html>