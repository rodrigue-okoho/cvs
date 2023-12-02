
@extends('base')

@section('content')
<div class="row">
    <div class="col-md-3 sider-bar" style="background-color: #0a53be">
        {{--section image--}}
        <section>
            <div class="text-center">
                <img class="img-thumbnail rounded-circle" src="{{asset('images/user.png')}}" height="100" width="100">
            </div>

        </section>
        {{--section lingustic skills--}}
        <section class="mt-3 mx-2">
            <span class="left-title">Lingustics skill</span>
            <div class="mx-2 text-white">
                <div class="">German</div>
                <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%;text-align: right">C1</span></div>
                <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>
                <div><span style="width: 60%">Reading Comprehension:</span><span style="width: 40%">C1</span></div>

            </div>
        </section>
        {{--section digital link--}}
        <section class="mt-3 mx-2">
            <span class="left-title">Digital Link</span>
        </section>

    </div>
    <div class="col-md-9">
        <section>
            <h3>Laura hertk</h3>
            <h3 class="text-primary">Anderson</h3>
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


@endsection
