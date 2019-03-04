@extends('base.layout.app')

@section('title', $series->name)

@section('content')
  <div class="content">
    <!-- Banner -->
    <div style="height:290px;box-shadow:0 2px 10px rgba(0, 0, 0, 0.2);" class="row m-0 p-0 bg-white">
      <div class="col-6 m-0 p-0">
        <img src="{{url($series->getImage())}}" style="width:100%;height:290px;object-fit:contain;" alt="">
      </div>
      <div class="col-6 m-0 p-0">
        <table style="height: 100%; width:100%">
          <tbody>
            <tr>
              <td class="align-middle">
                <h1 class="text-capitalize text-center" style="color:rgba(33,37,41,0.8);">{{$series->name}}</h1>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div style="margin:30px 60px;">
      <!-- breadcrumbs -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color:transparent;">
          <li class="breadcrumb-item">
            <a style="text-decoration: none;" href="{{route('brand.show', $series->getBrand())}}">{{$series->getBrand()->name}}</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            {{$series->getBrand()->name}}
          </li>
        </ol>
      </nav>

      <!-- part list -->
      <div class="row bg-white">
          @foreach($parts as $part)
            <div class="col-3 border" style="padding:15px;height:200px;">
              <div class="row m-0">
                <div class="col">
                  <a class="nav nav-link m-0 p-0" href="{{ route('find.part.details', $part->id) }}">
                    <h5 class="text-capitalize" style="font-size:16px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;">{{$part->name}}</h5>
                  </a>
                </div>
                <div class="col-3 text-center m-0 p-0">
                  @if(Auth::check())
                    {!! Form::open(['action' => 'ModelControllers\CartController@store', 'method' => 'POST']) !!}
                        {{Form::hidden('consumer_id', Auth::id(), [])}}
                        {{Form::hidden('part_id', $part->id, [])}}
                        {{Form::number('quantity', 1, ['min' => 1, 'max' => $part->getTotalStock(), 'style' => 'width:40px;height:20px;position:absolute;right:20px;top:0px;'])}}
                        <button style="position:absolute;right:0px;top:-3px;"class="btn btn-link no-outline rounded-0 p-0 m-0" type="submit"><i class="fa fa-shopping-cart"></i></button>
                    {!! Form::close() !!}
                  @else
                    <button style="position:absolute;right:0px;top:-3px;"class="btn btn-link no-outline rounded-0 p-0 m-0" data-toggle="modal" data-target="#LoginModalCenter" type="button"><i class="fa fa-shopping-cart"></i></button>
                  @endif
                </div>
              </div>
              <div class="row m-0">
                <div class="col-6" style="height:70px;position:absolute;bottom:10px;left:10px;">
                  <h5 class="text-capitalize" style="font-size:16px;font-family: 'Times New Roman', Times, serif;color:rgba(33,37,41,0.8);font-weight:normal;"><span class="text-danger font-weight-bold">{{$part->getDiscount()}}</span></h5>
                  <h6 class="m-0 text-secondary" style="font-family: 'Times New Roman', Times, serif;">{{$part->getNormalPrice()}}</h6>
                  <p class="text-secondary" style="font-size:13px;">{{$part->getTotalStock()}} Pieces Available</p>
                </div>
                <div class="col-6" style="height:100px;position:absolute;bottom:10px;right:0px;">
                  <a class="nav nav-link m-0 p-0" href="{{ route('find.part.details', $part->id) }}">
                    <img class="float-right m-0 p-0" src="{{url($part->getImage())}}" data-bs-hover-animate="pulse" style="height:100px; object-fit:contain;">
                  </a>
                </div>
              </div>
            </div>
          @endforeach
      </div>
    </div>
  </div>

@endsection

@section('style')

@stop

@section('script')

@stop
