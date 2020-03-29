@extends('templates.app.app')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('content-view')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><i class="fas fa-home"></i></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div>
            <h1>Meus QRCodes <small>Ativos</small></h1>

            @foreach($qrcs as $qrc)
              <?php $categoria = $qrc->group() ?>




              <div class="card">
                <div class="row qrc-item">
                  <div class="col-md-7 qrc-item-line">
                    <p class="qrc-item-name">Nome: <span style="font-weight: bold">{{ $qrc->id .'-'. $qrc->title }}</span></p>
                    <p class="qrc-item-category">Categoria: <span style="font-weight: bold"></span></p>
                    <p class="qrc-item-url">URL de destino: <span style="font-weight: bold">{{ $qrc->url }}</span></p>
                  </div>
                  <div class="col-md-3">
                    <img src="{{ $qrc->qrcode_svg}}" alt="QrCode error" width="100">
                  </div>
                  <div class="col-md-2">
                    <div class="row">
                    <a href="/app/qrcode/<?= $qrc->id ?>" class="btn"><i class="far fa-edit nav-icon"></i> Atualizar</a>
                    </div>
                    <div class="row"></div>
                    <div class="row"><button class="btn btn-primary btn-sm"> Ver Detalhes</button></div>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
