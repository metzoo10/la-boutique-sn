<!-- resources/views/admin/dashboard.blade.php -->

@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
@if(session('connexion_success'))
		<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
		<h4> {{session('connexion_success') }} </h4>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

<div class="container-fluid mt-5">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-uppercase text-info text-decoration-none" href="/">Dashboard</a></li>
        <li class="breadcrumb-item active text-uppercase" aria-current="page">Detail du site</li>
      </ol>
  </nav>
</div>
<div class="container-fluid mt-5">
    <h2 class="text-uppercase">Espace DE VISUALISATION</h2>
    <p class="py-3">Ci-dessous les détails du site.</p>

    <section class="mx-auto py-3 " style=" min-height: 50dvh; width: calc(80% - 24px); background: rgba(62, 127, 247, 0.407); border-radius: 10px">
         <div class="container-fluid mx-auto">

          <div class="title-wrapper pt-30 mb-5">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2 class="text-uppercase">Détails site</h2>
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
                  <a href="{{ route('admin.categories.index') }}" class="btn btn-dark w-100">
                    <h6 class="mb-10">Total Catégories</h6>
                  <h3 class="text-bold mb-10">{{$totalCategory}}</h3>
                  <p class="text-sm text-lighter">
                    <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 derniers jours)</span>
                  </p>
                  </a>

                </div>
              </div>

            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon success">
                  <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                  <a href="{{ route('admin.produits.index') }}" class="btn btn-danger w-100">
                  <h6 class="mb-10">Total produits ajouté(s)</h6>
                  <h3 class="text-bold mb-10">{{$totalProduit}}</h3>
                  <p class="text-sm ">
                    <i class="lni lni-arrow-up"></i> +5.45%
                    <span class="text-gray">(30 derniers jours)</span>
                  </p>
                </a>
                </div>
              </div>

            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <a href="{{ route('admin.commandes.index') }}" class="btn btn-success w-100">
                  <h6 class="mb-10">Total Commandes</h6>
                  <h3 class="text-bold mb-10">{{$totals_command}}</h3>
                  <p class="text-sm text-lighter">
                  <i class="lni lni-arrow-up"></i> +2.00%
                    <span class="text-gray">(30 derniers jours)</span>
                  </p>
                </a>
                </div>
              </div>

            </div>


            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30 border rounded-3 p-3"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                <div class="icon primary">
                  <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content">
                  <a href="{{ route('admin.utilisateurs.index') }}" class="btn btn-warning w-100">
                  <h6 class="mb-10">Utilisateurs Inscrit(s)</h6>
                  <h3 class="text-bold mb-10">{{$totalUser}}</h3>
                  <p class="text-sm text-lighter">
                    <i class="lni lni-arrow-down"></i> +2.00%
                    <span class="text-gray">(30 derniers jours)</span>
                  </p>
                  </a>
                </div>
              </div>

            </div>

         </div>
      </section>
</div>
@endsection
