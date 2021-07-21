<x-app-layout>
    <x-slot name="title">Siparişler</x-slot>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
        Sipariş Güncelle
    </button><br><br><br>

    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card">
                <img src="https://images.everydayhealth.com/images/arthritis/rheumatoid-arthritis/6-best-teas-for-arthritis-symptoms-722x406.jpg?sfvrsn=a628e56d_0"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">09:00 İçeceğiniz</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="https://www.kibirsiz.com/wp-content/uploads/2020/12/Kafeinsiz-kahve-nedir-Kafeinsiz-kahve-ayristirma-teknikleri-nelerdir.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">10:30 İçeceğiniz</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="https://trthaberstatic.cdn.wp.trt.com.tr/resimler/1586000/turk-kahvesi-depo-1586231.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">13:00 İçeceğiniz</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="https://dailytimes.com.pk/assets/uploads/2019/05/19/how-to-drink-water-1280x720.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">15:30 İçeceğiniz</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sipariş Güncelle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('icecekler')}}">
                    @csrf
                    
                        <span class="float-left">09:00 Siparişi :</span>
                        <select name="option_1" class="form-select form-select-sm float-right" style="width:auto;"
                            aria-label=".form-select-sm example">
                            <option name="Çay" selected>Çay</option>
                            <option name="Nescafe">Nescafe</option>
                            <option name="Türk Kahvesi">Türk Kahvesi</option>
                            <option name="Su">Su</option>
                        </select>
                        <br><br>
                        
                        <span class="float-left"> 10:30 Siparişi :</span>
                        <select name="option_2" class="form-select form-select-sm float-right" style="width:auto;"
                            aria-label=".form-select-sm example">
                            <option name="Çay" selected>Çay</option>
                            <option name="Nescafe">Nescafe</option>
                            <option name="Türk Kahvesi">Türk Kahvesi</option>
                            <option name="Su">Su</option>
                        </select>
                        <br><br>
                       
                        <span class="float-left">13:00 Siparişi :</span>
                        <select name="option_3" class="form-select form-select-sm float-right" style="width:auto;"
                            aria-label=".form-select-sm example">
                            <option name="Çay" selected>Çay</option>
                            <option name="Nescafe">Nescafe</option>
                            <option name="Türk Kahvesi">Türk Kahvesi</option>
                            <option name="Su">Su</option>
                        </select>
                        <br><br>
                        
                        <span class="float-left">15:30 Siparişi :</span>
                        <select name="option_4" class="form-select form-select-sm float-right" style="width:auto;"
                            aria-label=".form-select-sm example">
                            <option name="Çay" selected>Çay</option>
                            <option name="Nescafe">Nescafe</option>
                            <option name="Türk Kahvesi">Türk Kahvesi</option>
                            <option name="Su">Su</option>
                        </select>
                        <br><br>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary">Onayla</button>
                </div>
                </form>
            </div>
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