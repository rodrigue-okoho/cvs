<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <title>OKOHO-CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{public_path('css/style.css')}}" type="text/css">

</head>

<body>
    <div class="row">
        <div class="col-md-3 sider-bar f-10" style="background-color: #0a53be">
            {{--section image--}}
            <section class="text-white">
                <div class=" text-center" style="margin-top: 10px">
                  <img class="img-thumbnail rounded-circle" src="{{public_path('images/user.png')}}" height="100" width="100">
                     {{-- <img class="img-thumbnail rounded-circle" src="{{$candidat['userAccount']['imageUrl']}}" height="100" width="100">--}}
                </div>
                <div  class="mt-3 mx-2">
                    <p><img src="" alt=""/> <span class="f-10">+237675066919</span></p>
                    <p><img src="" alt=""> <span class="f-10">{{$candidat['userAccount']['email']}}</span></p>
                    <p><img src="" alt=""> <span class="f-10">{{$candidat['facebook']}}</span></p>
                </div>
            </section>
            {{--section lingustic skills--}}
            <section class="mt-3 mx-2">
                <span class="left-title">Lingustics skill</span>
                <div class="mx-2 text-white">
                    <div class="blod">German</div>
                    <div class="mt-3"><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%;text-align: right">C1</span></div>
                    <div class="mt-3"><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>
                    <div class="mt-3"><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>

                </div>
            </section>
            {{--section digital link--}}
            <section class="mt-3 mx-2">
                <span class="left-title">Digital Link</span>
            </section>

        </div>
        <div class="col-md-9">
            <section>
                <h3 style="margin: 0;color: #0a53be">{{$candidat['userAccount']['firstName']}}</h3>
                <h2 class="blod" style="margin: 0;color: #0a53be">{{$candidat['userAccount']['lastName']}}</h2>
                <span>Designer</span>
                <section class="mt-3 mx-2">
                    <span class="right-title">Profile</span>
                    <div>
                        vous pouvez le charger dans votre application en ajoutant le fournisseur de services (service provider) au tableau $providers et la
                        façade ("PDF" en abrégé) au tableau $aliases dans votre fichier de configuration
                    </div>
                </section>
                @if(sizeof($educations))
                <section class="mt-3 mx-2 outer-box">
                    <span class="right-title">Education</span>

                        <ul>
                            @foreach($educations as $education)
                            <li> <span>{{$education['begin']}}:{{$education['end']}}</span> <span>{{$education['libelle']}} : {{$education['traning_body']}}</span></li>
                            @endforeach
                        </ul>

                </section>
               @endif
                @if(sizeof($experiences))
                    <section class="mt-3 mx-2 outer-box">
                        <span class="right-title">Experience</span>
                        <ul>
                            @foreach($experiences as $experience)
                                <li> <span>{{$experience['begin']}}:{{$experience['end']}}</span> <span>{{$experience['libelle']}} : {{$experience['employer_name']}}</span></li>

                            @endforeach
                        </ul>
                    </section>
              @endif

            </section>
        </div>
    </div>

</body>
</html>

