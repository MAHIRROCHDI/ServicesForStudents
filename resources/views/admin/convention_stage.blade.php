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
            <h1 class="p-relative">{{'Convention de Stage'}}</h1>
            <!-- start projects table-->
            <div class="projects p-20 bg-white rad-10 m-20">
                <div class="responsive-table">
                <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>Nom d'Etudiant</td>
                                <td>CNE</td>
                                <td>Appogée</td>
                                <td>Date d'Envoi</td>
                                <td>Details</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($demandes as $demande)
                            @if(($demande ->Type == 'Convention de Stage') && ($demande -> Etat == 'n'))
                            <tr>
                                <td>{{$demande->Nom.' '.$demande->Prenom}}</td>
                                <td>{{$demande->CNE}}</td>
                                <td>{{$demande->Appogé}}</td>
                                <td>{{$demande->created_at}}</td>
                                <td>
                                <a href='{{route("admin.show", $demande->id)}}' class="visit d-block fs-14 rad-6 bg-blue c-white w-fit btn-shape"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>