<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <title>OKOHO-CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{public_path('css/style.css')}}" type="text/css">
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: "Montserrat", sans-serif;
    }

    body {
        background: #585c68;
        font-size: 14px;
        line-height: 22px;
        color: #555555;
    }

    .bold {
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
    }

    .semi-bold {
        font-weight: 500;
        font-size: 16px;
    }

    {
        width: 800px;
        height: auto;
       /* margin: 50px auto;*/
    }

    .resume_left {
        float: left;
        width: 30%;
        /*width: 280px;*/
        background: #0bb5f4;
    }

    .resume_profile {
        width: 100%;
        height: 200px;
    }

    .resume_left .resume_profile img {
        width: 100%;
        height: 100%;
    }

    .resume_content {
        padding: 0 25px;
    }

    .title {
        margin-bottom: 20px;
    }

    .resume_left .bold {
        color: #fff;
    }

    .regular {
        color: #b1eaff;
    }

   .resume_item {
        padding: 25px 0;
        border-bottom: 2px solid #b1eaff;
    }

   .resume_item:last-child,
   .resume_item:last-child {
        border-bottom: 0px;
    }

    .resume_left ul li {
       /* display: flex;*/
        margin-bottom: 10px;
        align-items: center;
    }

     .resume_left ul li:last-child {
        margin-bottom: 0;
    }

    .resume_left ul li .icon {
        width: 35px;
        height: 35px;
        background: #fff;
        color: #0bb5f4;
        border-radius: 50%;
        margin-right: 15px;
        font-size: 16px;
        position: relative;
    }

    .icon i,
    .resume_right .resume_hobby ul li i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .resume_left ul li .data {
        color: #b1eaff;
    }

    .resume_left .resume_skills ul li {
        display: flex;
        margin-bottom: 10px;
        color: #b1eaff;
        justify-content: space-between;
        align-items: center;
    }

  .resume_left .resume_skills ul li .skill_name {
        width: 25%;
    }

   .resume_left .resume_skills ul li .skill_progress {
        width: 60%;
        margin: 0 5px;
        height: 5px;
        background: #009fd9;
        position: relative;
    }

    .resume_left .resume_skills ul li .skill_per {
        width: 15%;
    }

    .resume_left .resume_skills ul li .skill_progress span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #fff;
    }

    .resume_left .resume_social .semi-bold {
        color: #fff;
        margin-bottom: 3px;
    }

    .resume_right {
        margin-left: 1%;
        width: 67%;
        background: #fff;
        padding: 25px;
    }

    .resume_right .bold {
        color: #0bb5f4;
    }

    .resume_right .resume_work ul,
    .resume_right .resume_education ul {
        padding-left: 40px;
        overflow: hidden;
    }

    .resume_right ul li {
        position: relative;
    }

    .resume_right ul li .date {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .resume_right ul li .info {
        margin-bottom: 20px;
    }

    .resume_right ul li:last-child .info {
        margin-bottom: 0;
    }

    .resume_right .resume_work ul li:before,
    .resume_right .resume_education ul li:before {
        content: "";
        position: absolute;
        top: 5px;
        left: -25px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        border: 2px solid #0bb5f4;
    }

    .resume_right .resume_work ul li:after,
    .resume_right .resume_education ul li:after {
        content: "";
        position: absolute;
        top: 14px;
        left: -21px;
        width: 2px;
        height: 115px;
        background: #0bb5f4;
    }

    .resume_right .resume_hobby ul {
        display: flex;
        justify-content: space-between;
    }

    .resume_right .resume_hobby ul li {
        width: 80px;
        height: 80px;
        border: 2px solid #0bb5f4;
        border-radius: 50%;
        position: relative;
        color: #0bb5f4;
    }

    .resume_right .resume_hobby ul li i {
        font-size: 30px;
    }

    .resume_right .resume_hobby ul li:before {
        content: "";
        position: absolute;
        top: 40px;
        right: -52px;
        width: 50px;
        height: 2px;
        background: #0bb5f4;
    }

    .resume_right .resume_hobby ul li:last-child:before {
        display: none;
    }

</style>
</head>

<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="row">
    <div class="col-md-3">
        {{--<div class="resume_profile">
            <img src="https://i.imgur.com/eCijVBe.png" alt="profile_pic">
        </div>--}}
        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title">
                    <p class="bold">stephen colbert</p>
                    <p class="regular">Designer</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-signs"></i>
                        </div>
                        <div class="data">
                            21 Street, Texas <br /> USA
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="data">
                            +324 4445678
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="data">
                            stephen@gmail.com
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-weebly"></i>
                        </div>
                        <div class="data">
                            www.stephen.com
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">skill's</p>
                </div>
                <ul>
                    <li>
                        <div class="skill_name">
                            HTML
                        </div>
                        <div class="skill_progress">
                            <span style="width: 80%;"></span>
                        </div>
                        <div class="skill_per">80%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            CSS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 70%;"></span>
                        </div>
                        <div class="skill_per">70%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            SASS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 90%;"></span>
                        </div>
                        <div class="skill_per">90%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 60%;"></span>
                        </div>
                        <div class="skill_per">60%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JQUERY
                        </div>
                        <div class="skill_progress">
                            <span style="width: 88%;"></span>
                        </div>
                        <div class="skill_per">88%</div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">Social</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Facebook</p>
                            <p>Stephen@facebook</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Twitter</p>
                            <p>Stephen@twitter</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Youtube</p>
                            <p>Stephen@youtube</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Linkedin</p>
                            <p>Stephen@linkedin</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">About us</p>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis illo fugit officiis distinctio culpa officia totam atque exercitationem inventore repudiandae?</p>
        </div>
        <div class="resume_item resume_work">
            <div class="title">
                <p class="bold">Work Experience</p>
            </div>
            <ul>
                <li>
                    <div class="date">2013 - 2015</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2015 - 2017</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2017 - Present</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">Education</p>
            </div>
            <ul>
                <li>
                    <div class="date">2010 - 2013</div>
                    <div class="info">
                        <p class="semi-bold">Web Designing (Texas University)</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2000 - 2010</div>
                    <div class="info">
                        <p class="semi-bold">Texas International School</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_hobby">
            <div class="title">
                <p class="bold">Hobby</p>
            </div>
            <ul>
                <li><i class="fas fa-book"></i></li>
                <li><i class="fas fa-gamepad"></i></li>
                <li><i class="fas fa-music"></i></li>
                <li><i class="fab fa-pagelines"></i></li>
            </ul>
        </div>
    </div>
</div>
{{--<div class="resume">
    <div class="resume_left">
       --}}{{-- <div class="resume_profile">
            <img src="https://i.imgur.com/eCijVBe.png" alt="profile_pic">
        </div>--}}{{--
        <div class="resume_content">
            <div class="resume_item resume_info">
                <div class="title">
                    <p class="bold">stephen colbert</p>
                    <p class="regular">Designer</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-signs"></i>
                        </div>
                        <div class="data">
                            21 Street, Texas <br /> USA
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="data">
                            +324 4445678
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="data">
                            stephen@gmail.com
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-weebly"></i>
                        </div>
                        <div class="data">
                            www.stephen.com
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_skills">
                <div class="title">
                    <p class="bold">skill's</p>
                </div>
                <ul>
                    <li>
                        <div class="skill_name">
                            HTML
                        </div>
                        <div class="skill_progress">
                            <span style="width: 80%;"></span>
                        </div>
                        <div class="skill_per">80%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            CSS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 70%;"></span>
                        </div>
                        <div class="skill_per">70%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            SASS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 90%;"></span>
                        </div>
                        <div class="skill_per">90%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JS
                        </div>
                        <div class="skill_progress">
                            <span style="width: 60%;"></span>
                        </div>
                        <div class="skill_per">60%</div>
                    </li>
                    <li>
                        <div class="skill_name">
                            JQUERY
                        </div>
                        <div class="skill_progress">
                            <span style="width: 88%;"></span>
                        </div>
                        <div class="skill_per">88%</div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_social">
                <div class="title">
                    <p class="bold">Social</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Facebook</p>
                            <p>Stephen@facebook</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Twitter</p>
                            <p>Stephen@twitter</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Youtube</p>
                            <p>Stephen@youtube</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="data">
                            <p class="semi-bold">Linkedin</p>
                            <p>Stephen@linkedin</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">About us</p>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis illo fugit officiis distinctio culpa officia totam atque exercitationem inventore repudiandae?</p>
        </div>
        <div class="resume_item resume_work">
            <div class="title">
                <p class="bold">Work Experience</p>
            </div>
            <ul>
                <li>
                    <div class="date">2013 - 2015</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2015 - 2017</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2017 - Present</div>
                    <div class="info">
                        <p class="semi-bold">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">Education</p>
            </div>
            <ul>
                <li>
                    <div class="date">2010 - 2013</div>
                    <div class="info">
                        <p class="semi-bold">Web Designing (Texas University)</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
                <li>
                    <div class="date">2000 - 2010</div>
                    <div class="info">
                        <p class="semi-bold">Texas International School</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="resume_item resume_hobby">
            <div class="title">
                <p class="bold">Hobby</p>
            </div>
            <ul>
                <li><i class="fas fa-book"></i></li>
                <li><i class="fas fa-gamepad"></i></li>
                <li><i class="fas fa-music"></i></li>
                <li><i class="fab fa-pagelines"></i></li>
            </ul>
        </div>
    </div>
</div>--}}

</body>
</html>

