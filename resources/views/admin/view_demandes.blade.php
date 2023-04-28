<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
</head>
<body>
    <div class="page d-flex">
        @include('admin.sidebar')
        <div class="content w-full">
            <!-- start head -->
            @include('admin.nav')
            <!-- end head -->
            <h1 class="p-relative">Traiter Demandes</h1>
            <div class="services" id="services">
            <div class="container">
                <div class="box">
                <a href="{{url('releve_note')}}"><img src="adminDash/images/releve.png" alt=""> </a>
                    <h3>Relevé de Note</h3>
                    <div class="details">
                    </div>
                </div>
                <div class="box">
                <a href="{{url('attestation_scolarite')}}"><img src="adminDash/images/scolarite.png" alt=""></a>
                    <h3>Attestation de Scolarité</h3>
                    <div class="details">
                    </div>
                </div>
                <div class="box">
                    <a href="{{url('convention_stage')}}"><img src="adminDash/images/stage.png" alt=""></a>
                    <h3>ِConvention de Stage</h3>
                    <div class="details">
                    </div>
                </div>
                <div class="box">
                <a href="{{url('attestation_reussite')}}"><img src="adminDash/images/reusit.png" alt=""></a>
                        <h3>Attestation de Réussite</h3>
                    <div class="details">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>