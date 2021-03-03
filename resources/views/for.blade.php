@extends('layout.main');
@section('title', 'for')


@section('container')
      <div class="container">
      <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
      <div class="text-white text-center py-5 px-4 my-5">
      <div class="p-3 mb-2 bg-info text-dark">
              <div class="row">
                <div class="col-15">

                    <?php 
                      for ($i=1; $i <= 20; $i++) { 
                        echo "<br/>$i ";
                      }
                    ?>
                          </div>
                      </div>
                  </div>
                  </div>
      @endsection