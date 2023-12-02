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
                </div>
                <div  class="mt-3 mx-2">
                    <p><img src=""> <span class="f-10">+237675066919</span></p>
                    <p><img src=""> <span class="f-10">rodriguembah13@gmail.com</span></p>
                    <p><img src=""> <span class="f-10">www.monprofil.com</span></p>
                </div>
            </section>
            {{--section lingustic skills--}}
            <section class="mt-3 mx-2">
            {{--section digital link--}}
            <section class="mt-3 mx-2">
                <span class="left-title">Lingustics skill</span>
                <div class="mx-2 text-white">
                    <div class="">German</div>
                    <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%;text-align: right">C1</span></div>
                    <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>
                    <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>

                </div>
            </section>
                <span class="left-title">Digital Link</span>
            </section>

        </div>
        <div class="col-md-9">
            <section>
                <h3>{{$candidat['userAccount']['firstName']}}</h3>
                <h3 class="text-primary">{{$candidat['userAccount']['lastName']}}</h3>
                <span>Designer</span>
                <section class="mt-3 mx-2">
                    <span class="right-title">Profile</span>
                    <div>
                        vous pouvez le charger dans votre application en ajoutant le fournisseur de services (service provider) au tableau $providers et la
                        façade ("PDF" en abrégé) au tableau $aliases dans votre fichier de configuration
                    </div>
                </section>
                <section class="mt-3 mx-2">
                    <span class="right-title">Education</span>
                    <div>
                    </div>
                </section>
            </section>
        </div>
    </div>

</body>
</html>

