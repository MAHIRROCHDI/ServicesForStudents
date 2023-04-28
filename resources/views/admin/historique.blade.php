<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div class="page d-flex">
        @include('admin.sidebar')
        <div class="content w-full">
            <!-- start head -->
            @include('admin.nav')
            <!-- end head -->
            <h1 class="p-relative">{{'Historique'}}</h1>
            <!-- start projects table-->
            <div class="projects p-20 bg-white rad-10 m-20">
            <div class="head bg-white p-15 between-flex">
                    <div class="form-group">
                    <input class="p-10 rad-10 b-solid" type="search" placeholder="chercher" name="search" id="search">  
                    <!-- <button class="fs-14 rad-6 bg-blue c-white w-fit btn-shape b-none"> Rechercher</button>
                    <button class="fs-14 rad-6 bg-green c-white w-fit btn-shape b-none "> <a href="{{url('/historique')}}" class="text-decoration-none link-dark">Reset</a></button> -->
                    </div>
            </div>
                <div class="responsive-table">
                    <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>Type de Demande</td>
                                <td>Date d'Envoi</td>
                                <td>Etudiant</td>
                                <td>Validation</td>
                                <td>Details</td>
                            </tr>
                        </thead>
                        <tbody class="alldata">
                        @foreach($demandes as $demande)
                        @if($demande -> Etat == 't')
                            <tr>
                            <td>{{$demande['Type']}}</td>
                            <td>
                                <?php
                                $date1=date_create($demande['created_at']);
                                $date2=date_create(date('y-m-d'));
                                $diff=date_diff($date1,$date2);
                                echo $diff->format("Il y a %a Jours");
                                ?>
                            </td>
                            <td>{{$demande['Nom']}} {{$demande['Prenom']}}</td>
                        @if($demande['Validation']==='y')
                            <td>
                                <span class="label bg-green c-white btn-shape">Validé</span>
                            </td>
                        @else
                            <td>
                                <span class="label bg-red c-white btn-shape">Refusée</span>
                            </td>
                        @endif
                            <td>
                                <a href="view_detail/{{$demande['id']}}" class="visit d-block fs-14 rad-6 bg-blue c-white w-fit btn-shape"><i class="fas fa-eye"></i></a>
                            </td>
                            </tr>
                        @endif
                        @endforeach
                        </tbody>
                        <tbody id="Content" class="searchdata">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#search').on('keyup', function(){
                $value=$(this).val();
                if($value){
                    $('.alldata').hide() ;
                    $('.searchdata').show();
                }
                else {
                    $('.alldata').show() ;
                    $('.searchdata').hide();
                }
                $.ajax({
                    type:'get',
                    url:"{{URL::to('search')}}",
                    data:{'search':$value},
                    success:function(data){
                        $('#Content').html(data);
                    }
                });
            })
        </script>
</body>
</html>