<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <title>OKOHO-CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{public_path('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{public_path('css/style.css')}}" type="text/css">

</head>

<body>
    <div class="rowp">
        <div class="col-mx-3 f-10" style="">
            {{--section image--}}
            <section class="text-white">
                <div class=" text-center" style="margin-top: 10px">
                 {{-- <img class="img-thumbnail rounded-circle" src="{{public_path('images/user.png')}}" height="100" width="100">--}}
                    <img class="img-thumbnail icon" src="{{$candidat['userAccount']['imageUrl']}}" height="100" width="100">
                </div>
                <div  class="mt-3 mx-2">
                        <p><img class="img-thumbnail rounded-circle" height="18" width="18" src="{{public_path("images/tel.png")}}" alt=""/> <span class="f-10 mx-2">{{$candidat['userAccount']['phoneNumber']}}</span></p>
                        <p><img class="img-thumbnail rounded-circle" height="18" width="18" src="{{public_path("images/mail.png")}}" alt=""> <span class="f-10 mx-2">{{$candidat['userAccount']['email']}}</span></p>
                        <p><img class="img-thumbnail rounded-circle"  height="18" width="18" src="{{public_path("images/www.png")}}" alt=""> <span class="f-10 mx-2">{{$candidat['facebook']}}</span></p>

                </div>
            </section>
            {{--section lingustic skills--}}
            @if(sizeof($languages))
            <section class="mt-3 mx-2">
                <span class="left-title">Lingustics skill</span>
                @foreach($languages as $langue)
                <div class="mx-2 text-white">
                    <div class="blod">{{strtoupper($langue['ortherLanguage'])}}</div>
                    <div class="mt-3"><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%;text-align: right">{{strtoupper($langue['readingComprehension1'])}}</span></div>
                    <div class="mt-3"><span style="width: 60%">OralIntegration:</span><span style="width: 40%">{{strtoupper($langue['oralIntegration'])}}</span></div>
                    <div class="mt-3"><span style="width: 60%">Written:</span><span style="width: 40%">{{strtoupper($langue['written'])}}</span></div>
                </div>
                @endforeach
            </section>
            @endif
            {{--section digital link--}}
            <section class="mt-3 mx-2">
                <span class="left-title">Digital Link</span>
            </section>

        </div>
        <div class="col-mx-9">
            <section style="margin: 10px">
                <p style="margin-top: 20px;color: #0a53be;font-size: 45px !important;">{{$candidat['userAccount']['firstName']}}</p>
                <p class="blod" style="padding-top: 0;color: #0a53be;font-size: 45px !important; font-weight: bold !important;">{{$candidat['userAccount']['lastName']}}</p>
                <span>Designer</span>
                <section class="mt-3 mx-2">
                    <span class="right-title">Profile</span>
                    <div>
                        {{$candidat['description']}}
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

