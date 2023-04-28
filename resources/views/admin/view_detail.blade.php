<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
</head>
<body>
    <div class="page d-flex">
        @include('admin.sidebar')
        <div class="content w-full mb-40">
            <!-- start head -->
            @include('admin.nav')
            <!-- end head -->
            <h1 class="p-relative">Demande details</h1>
            <div class="wrap">
            <h2>{{$data['Type']}}</h2>
            <form action="" method="" enctype="">
                <div class="userDet">
                    <div class="input-box">
                        <label class='' for="">Nom:</label>
                        <input type="text" placeholder="Nom" value="{{$data['Nom']}}" required disabled>
                    </div>
                    <div class="input-box">
                    <label for="">Prenom:</label>
                        <input type="text" placeholder="Prénom" value="{{$data['Prenom']}}" required disabled>
                    </div>
                    <div class="input-box">
                    <label for="">Apogée:</label>
                        <input type="text" placeholder="Code Apogée" value="{{$data['Appogé']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">CNE:</label>
                        <input type="text" placeholder="CNE" value="{{$data['CNE']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Email:</label>
                        <input type="email" placeholder="Email" value="{{$data['Email']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Niveau</label>
                        <input type="text" placeholder="Niveau" value="{{$etudiant['Niveau']}}" required disabled>
                    </div>
                    @if($data['Type']  == 'Relevé de Notes')
                    <div class="input-box">
                        <label for="">Semestre Demandé:</label>
                        <input type="text" placeholder="Semestre Demandé" value="{{$data['Semestre']}}" required disabled>
                    </div>
                    @endif
                    @if($data['Type'] == 'Convention de Stage')
                    <div class="input-box">
                        <label for="">Nom d'entreprise:</label>
                        <input type="text" value="{{$data['nomEntreprise']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Representant d'entreprise:</label>
                        <input type="text" value="{{$data['representant']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Adresse email d'entrepris:</label>
                        <input type="text" value="{{$data['adressMail']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Tele d'entreprise:</label>
                        <input type="text" value="{{$data['tele']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Adresse reel d'entreprise:</label>
                        <input type="text" value="{{$data['adresseReel']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Periode de stage:</label>
                        <input type="text" value="{{$data['periode']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Encadrant d'entreprise:</label>
                        <input type="text" value="{{$data['encadrantEntreprise']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Encadrant d'ecole:</label>
                        <input type="text" value="{{$data['encadrantEcole']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="" class="">Theme de stage:</label>
                        <input type="text" value="{{$data['themeDeStage']}}" required disabled>
                    </div>
                    <div class="input-box">
                        <label for="">Reçu D'assurance:</label>
                        <a href="{{asset('Image/'. $data['image'])}}" class="visit d-block fs-14 rad-6 bg-blue c-white w-fit btn-shape">Reçu</a>
                    </div>
                    @endif
                    @if($data['Validation'] == 'n')
                    <div class="input-box">
                        <label for="" class="">Motif de refus:</label>
                        <input type="text" value="{{$data['Motif']}}" required disabled>
                    </div>
                    @elseif($data['Validation'] == 'y')
                    <div class="input-box">
                        <label for="">Telecharger le document Envoyé:</label>
                        <a href="/doc/{{$data['id']}}}}" class="visit d-block fs-14 rad-6 bg-blue c-white w-fit btn-shape">Telecharger</a>
                    </div>
                    @endif
                </div>
                </form>
                @if($data['Validation'] == 'y')
                <a href="/send/{{$data['id']}}"><span class="label bg-green c-white btn-shape">Renvoyer le document a l'etudiant</span></a>
                @endif
            </div>
            <div class="text">
                <h3>Revenir à l'historique <a href="{{url('historique')}}">Historique</a></h3>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>
</html>