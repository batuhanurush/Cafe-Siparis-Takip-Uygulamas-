<x-app-layout>
    <x-slot name="title">Profil</x-slot>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered ">
                <div class="container">
                    <div class="row">
                    <form action="{{ route('drinks',$drinks->id) }}" method="POST">
                         @csrf
                        @method('PUT')
                            <div class="col-sm border border-light">
                                <div class="row" style="margin-left: 0.2rem; margin-top:2rem;">
                                <div class="d-flex justify-content-center">
                                    <h4>Sipariş Güncelle</h4><br><br>
                                </div>
                                    <div class="row">
                                        <label class="col-lg-auto float-left text-center">09:00 : </label>
                                        <div class="col-4 float-right">
                                            <select name="d_option_1" class="form-select" aria-label="Default select example">
                                                <option name="choice1">Yeşil Çay</option>
                                                <option name="choice2">Çay</option>
                                                <option name="choice3">Nescafe</option>
                                                <option name="choice4">Su</option>
                                                <option name="choice5">Türk Kahvesi</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="d_note1" class="form-control" id="count"
                                                placeholder="Notunuz..">
                                        </div>
                                    </div></br></br>
                                    <div class="row">
                                        <label class="col-lg-auto float-left text-center">09:00 : </label>
                                        <div class="col-4 float-right">
                                            <select name="d_option_2" class="form-select"
                                                aria-label="Default select example">
                                                <option name="choice1">Yeşil Çay</option>
                                                <option name="choice2">Çay</option>
                                                <option name="choice3">Nescafe</option>
                                                <option name="choice4">Su</option>
                                                <option name="choice5">Türk Kahvesi</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                        

                                            <input type="text" name="d_note2" class="form-control" id="count"
                                                placeholder="Notunuz..">
                                        </div>
                                    </div></br></br>
                                    <div class="row">
                                        <label class="col-lg-auto float-left text-center">09:00 : </label>
                                        <div class="col-4 float-right">
                                            <select name="d_option_3" class="form-select"
                                                aria-label="Default select example">
                                                <option name="choice1">Yeşil Çay</option>
                                                <option name="choice2">Çay</option>
                                                <option name="choice3">Nescafe</option>
                                                <option name="choice4">Su</option>
                                                <option name="choice5">Türk Kahvesi</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="d_note3" class="form-control" id="count"
                                                placeholder="Notunuz..">
                                        </div>
                                    </div></br></br>
                                    <div class="row">
                                        <label class="col-lg-auto float-left text-center">09:00 : </label>
                                        <div class="col-4 float-right">
                                            <select name="d_option_4" class="form-select"
                                                aria-label="Default select example">
                                                <option name="choice1">Yeşil Çay</option>
                                                <option name="choice2">Çay</option>
                                                <option name="choice3">Nescafe</option>
                                                <option name="choice4">Su</option>
                                                <option name="choice5">Türk Kahvesi</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="d_note4" class="form-control" id="count"
                                                placeholder="Notunuz..">
                                        </div>
                                    </div></br></br><br>
                                    <div class="d-flex justify-content-center" style="margin-bottom:1rem;">
                                        <button type="submit" class="btn btn-outline-success col-8"> Düzenle</button>
                                    </div>
                                </div></form>
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