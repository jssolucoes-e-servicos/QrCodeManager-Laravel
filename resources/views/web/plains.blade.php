@extends('templates.web.site')

@section('content-view')3

<!-- ***** Pricing Plans Start ***** -->
<section class="section colored" id="pricing-plans">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Pricing Plans</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        @yield('web.contents.plans')
</section>
<!-- ***** Pricing Plans End ***** -->

<div class="row">
    <!-- ***** Pricing Item Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
        <div class="pricing-item">
            <div class="pricing-header">
                <h3 class="pricing-title">Starter</h3>
            </div>
            <div class="pricing-body">
                <div class="price-wrapper">
                    <span class="currency">R$</span>
                    <span class="price">19,90</span>
                    <span class="period">mês</span>
                    <span class="period">( pagamento anual )</span>
                </div>
                <ul class="list">
                    <li class="active">10 Qr Codes dinâmicos</li>
                    <li class="active">1000 scans</li>
                    <li class="active">1 usuário</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="/site/planos/contratar/starter" class="main-button">Contratar agora</a>
            </div>
        </div>
    </div>
    <!-- ***** Pricing Item End ***** -->

    <!-- ***** Pricing Item Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
        <div class="pricing-item active">
            <div class="pricing-header">
                <h3 class="pricing-title">Advanced</h3>
            </div>
            <div class="pricing-body">
                <div class="price-wrapper">
                    <span class="currency">R$</span>
                    <span class="price">39,90</span>
                    <span class="period">mês</span>
                    <span class="period">( pagamento anual )</span>
                </div>
                <ul class="list">
                    <li class="active">40 Qr Codes dinâmicos</li>
                    <li class="active">scans Ilimitados</li>
                    <li class="active">2 usuários</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="/site/planos/contratar/advanced" class="main-button">Contratar agora</a>
            </div>
        </div>
    </div>
    <!-- ***** Pricing Item End ***** -->

    <!-- ***** Pricing Item Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
        <div class="pricing-item">
            <div class="pricing-header">
                <h3 class="pricing-title">Professional</h3>
            </div>
            <div class="pricing-body">
                <div class="price-wrapper">
                    <span class="currency">R$</span>
                    <span class="price">174,90</span>
                    <span class="period">mês</span>
                    <span class="period">( pagamento anual )</span>
                </div>
                <ul class="list">
                    <li class="active">200 Qr Codes dinâmicos</li>
                    <li class="active">Scans Ilimitados</li>
                    <li class="active">5 usuários</li>
                </ul>
            </div>
            <div class="pricing-footer">
                <a href="/site/planos/contratar/professional" class="main-button">Contratar agora</a>
            </div>
        </div>
    </div>
    <!-- ***** Pricing Item End ***** -->
</div>
</div>




@endsection


