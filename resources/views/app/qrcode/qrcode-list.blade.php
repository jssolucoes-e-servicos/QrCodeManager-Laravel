@extends('templates.app.app')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('content-view')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Meus QrCodes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><i class="fas fa-home"></i></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      @foreach($qrcs as $qrc)
      <div class="card">
        <div class="row">
          <div class="col-md-7 qrc-item">
            <p class="qrc-item-name">Nome: {{ $qrc->title }}</p>
            <p class="qrc-item-category">Categoria: {{ $qrc->group_id }}</p>
            <p class="qrc-item-url">URL de destino: {{ $qrc->url }}</p>
          </div>
          <div class="col-md-3">
            <img src="{{ asset('storage/qrcodes/'.$qrc->id.'.svg')}}" alt="QrCode error" width="100">
          </div>
          <div class="col-md-2">
            <div class="row"><button class="btn btn-primary"> Alterar </button></div>
            <div class="row"><button class="btn btn-primary"> Ver Detalhes</button></div>
          </div>
        </div>
      </div>
      @endforeach
    </section>
  </div>
@endsection
