<!-- resources/views/admin/dashboard.blade.php -->

@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <h2 class="text-uppercase">Espace DE VISUALISATION</h2>
    <p>Ci-dessous les détails du site.</p>

    <section class="mx-auto" style="background-color: #f1f5f9; min-height: 50dvh; width: calc(80% - 24px);">
         <div class="container-fluid mx-auto">
            
          <div class="title-wrapper pt-30 mb-5">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2 class="text-uppercase">Détails site</h2>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">La boutique sn.</li>
                    </ol>
                  </nav>
                </div>
              </div>

            </div>
            
          </div>


          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon purple">
                  <i class="lni lni-cart-full"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Total Catégories</h6>
                  <h3 class="text-bold mb-10">{{$totalCategory}}</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 derniers jours)</span>
                  </p>
                </div>
              </div>

            </div>
           
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon success">
                  <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Total produits ajouté(s)</h6>
                  <h3 class="text-bold mb-10">{{$totalProduit}}</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">Increased</span>
                  </p>
                </div>
              </div>

            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Total Commandes</h6>
                  <h3 class="text-bold mb-10">0</h3>
                  <p class="text-sm text-danger">
                    <i class="lni lni-arrow-down"></i> 0
                    <span class="text-gray">Expense</span>
                  </p>
                </div>
              </div>

            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Utilisateurs Inscrit(s)</h6>
                  <h3 class="text-bold mb-10">{{$totalUser}}</h3>
                  <p class="text-sm text-success">
                    <i class="lni lni-arrow-down"></i> -2.00%
                    <span class="text-gray">Expense</span>
                  </p>
                </div>
              </div>

            </div>

         </div>
      </section>
@endsection
