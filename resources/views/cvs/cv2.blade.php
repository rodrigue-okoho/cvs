<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <title>OKOHO-CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{public_path('css/style2.css')}}" type="text/css">

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
        </section>
        <section class="mt-3 mx-2">
            <span class="profile-title">Profile</span>
            <div class="description">
                {{$candidat['description']}}
            </div>
        </section>

        <section class="mt-3 mx-2">
            <span class="profile-title">CONTACT ME</span>
            <div class="description">
                <div>
                    <div class="l20">
                        <img class="" height="25" width="25" src="{{public_path("images/tel.png")}}" alt=""/>
                    </div>
                    <div class="l80">
                        <span class="f-break f-title">Phone</span>
                        <span class="f-break">{{$candidat['userAccount']['phoneNumber']}}</span>
                        <span class="f-break">{{$candidat['userAccount']['phoneNumber']}}</span>
                    </div>
                </div>
                <div>
                    <div class="l20">
                        <img class="" height="25" width="25" src="{{public_path("images/mail.png")}}" alt=""/>
                    </div>
                    <div class="l80">
                        <span class="f-break f-title">Email</span>
                        <span class="f-break">{{$candidat['userAccount']['email']}}</span>
                    </div>
                </div>
                <div>
                    <div class="l20">
                        <img class="img-thumbnail rounded-circle" height="25" width="25" src="{{public_path("images/www.png")}}" alt=""/>
                    </div>
                    <div class="l80">
                        <span class="f-break f-title">Website</span>
                        <span class="f-break">{{$candidat['facebook']}}</span>
                    </div>
                </div>
                {{--  <p><img class="img-thumbnail rounded-circle" height="18" width="18" src="{{asset("images/mail.png")}}" alt=""> <span class="f-10 mx-2">{{$candidat['userAccount']['email']}}</span></p>
                  <p><img class="img-thumbnail rounded-circle"  height="18" width="18" src="{{asset("images/www.png")}}" alt=""> <span class="f-10 mx-2">{{$candidat['facebook']}}</span></p>
  --}}
            </div>
        </section>

    </div>
    <div class="col-mx-9">
        <section style="margin: 10px">
            <span class="f-break sub-title">{{$candidat['userAccount']['firstName']}} {{$candidat['userAccount']['lastName']}}</span>
            <span class="f-break n-title">{{$candidat['jobTitle']}}</span>

            @if(sizeof($educations))
                <section style="margin-top: 20px">
                    <span class="body-title">Education</span>
                    <ul>
                        @foreach($educations as $education)
                            <li> <span>{{$education['begin']}}:{{$education['end']}}</span> <span>{{$education['libelle']}} : {{$education['traning_body']}}</span></li>
                        @endforeach
                    </ul>

                </section>
            @endif
            @if(sizeof($experiences))
                <section style="margin-top: 20px">
                    <span class="body-title">Experience</span>
                    <ul>
                        @foreach($experiences as $experience)
                            <li> <span>{{$experience['begin']}}:{{$experience['end']}}</span> <span>{{$experience['libelle']}} : {{$experience['employer_name']}}</span></li>

                        @endforeach
                    </ul>
                </section>
            @endif
            @if(sizeof($languages))
                <section class="mt-3 mx-2">
                    <span class="body-title">Lingustics skill</span>
                    @foreach($languages as $langue)
                        <div class="mx-2">
                            <div class="blod">{{strtoupper($langue['ortherLanguage'])}}</div>
                            <div class="mt-3"><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%;text-align: right">{{strtoupper($langue['readingComprehension1'])}}</span></div>
                            <div class="mt-3"><span style="width: 60%">OralIntegration:</span><span style="width: 40%">{{strtoupper($langue['oralIntegration'])}}</span></div>
                            <div class="mt-3"><span style="width: 60%">Written:</span><span style="width: 40%">{{strtoupper($langue['written'])}}</span></div>
                        </div>
                    @endforeach
                </section>
            @endif
        </section>
    </div>
</div>

</body>
</html>
