
@extends('layouts.layout')

@section('title', 'Информация о продукте')


@section('content')

  <main id="content">
    <div class="container">
      <h1>Информация о модели: {{ $singleCar->superstructure->superstructureName }}
      на шасси
      {{ $singleCar->baseAvto->modelName }} - {{ $singleCar->baseAvto->avtoFirm->firmName }}</h1>
      <div class="feature">
        <h5>Категория: {{ $singleCar->avtoCategory->nameCategory }}</h5>
        <div class="col">
          <div class="col-lg-4">
            @if ($singleCar->imagePath)
              <img src="{{asset('/storage/' . $singleCar->imagePath)}}" class="card-img-top" alt="No image">
            @else
              <img src="img/emptyimage.png" class="card-img-top" alt="Отсутствует">
            @endif
          </div>
        </div>
        <div class="model-info">
          <p>Производитель: {{ $singleCar->baseAvto->avtoFirm->firmName }}</p>
          <p>Модель: {{ $singleCar->baseAvto->modelName }}</p>
          <p>Надстройка на авто: {{ $singleCar->superstructure->superstructureName }} </p>
          <p>Цена: {{ $singleCar->price }} руб.</p>
          <p>Год выпуска: {{ $singleCar->yearIssue }} </p>
          <p>Описание: {{ $singleCar->description }}
          </p>
        </div>
      </div>
    </div>
  </main>


@endsection
