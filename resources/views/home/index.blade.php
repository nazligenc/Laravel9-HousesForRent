@extends('layouts.frontbase')

@section('title', 'Houses For Rent')

@section('slider')

@include('home.slider')
@endsection

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-6">
                    <div class="titlepage text_align_left">
                        <h2>About Agency</h2>
                        <p>readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in theirreadable English. </p>
                        <a class="read_more" href="about.html">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 pa_right0">
                    <div class="about_img">
                        <figure><img src="{{asset('assets')}}/images/about_img.jpg" alt="#"/>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- wedo -->
    <div class="wedo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>What we do </h2>
                        <p>even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="ho_box" class="our_wedo text_align_center">
                        <i><img src="{{asset('assets')}}/images/wedo_icon1.png" alt="#"/></i>
                        <h3>Web Development</h3>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will web sites still in</p>
                    </div>
                    <a class="read_more" href="wedo.index">Read More</a>
                </div>
                <div class="col-md-4">
                    <div id="ho_box" class="our_wedo orang text_align_center">
                        <i><img src="{{asset('assets')}}/images/wedo_icon2.png" alt="#"/></i>
                        <h3>App Development</h3>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will web sites still in</p>
                    </div>
                    <a class="read_more" href="wedo.index">Read More</a>
                </div>
                <div class="col-md-4">
                    <div id="ho_box" class="our_wedo text_align_center">
                        <i><img src="{{asset('assets')}}/images/wedo_icon3.png" alt="#"/></i>
                        <h3>SEO Optimization</h3>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will web sites still in</p>
                    </div>
                    <a class="read_more" href="wedo.index">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end wedo -->
    <!-- service -->
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Service</h2>
                        <p>that it has a more-or-less normal distribution of letters, as </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-4">
                    <div id="ho_img" class="service_img">
                        <figure><img src="{{asset('assets')}}/images/work1.jpg" alt="#"/></figure>
                    </div>
                    <div class="service_box">
                        <h3>Website Design</h3>
                        <p>look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_img" class="service_img">
                        <figure><img src="{{asset('assets')}}/images/work2.jpg" alt="#"/></figure>
                    </div>
                    <div class="service_box">
                        <h3>Website Development</h3>
                        <p>look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div id="ho_img" class="service_img">
                        <figure><img src="{{asset('assets')}}/images/work1.jpg" alt="#"/></figure>
                    </div>
                    <div class="service_box">
                        <h3>App Design </h3>
                        <p>look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end service -->
    <!-- letter -->
    <div class="letter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Newsletter</h2>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <form id="colof" class="form_subscri">
                        <input class="newsl" placeholder="Your email Request" type="text" name="Email">
                        <button class="subsci_btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end letter -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Our Team</h2>
                        <p>that it has a more-or-less normal distribution of letters, as </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-4">
                    <div id="ho_img" class="team_box">
                        <figure><img src="{{asset('assets')}}/images/team_img1.jpg" alt="#"/></figure>
                        <h3>jon</h3>
                        <span>Graphic Designer</span>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="ho_img" class="team_box">
                        <figure><img src="{{asset('assets')}}/images/team_img2.jpg" alt="#"/></figure>
                        <h3>Markjack</h3>
                        <span>html devoloper</span>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div id="ho_img" class="team_box">
                        <figure><img src="{{asset('assets')}}/images/team_img3.jpg" alt="#"/></figure>
                        <h3>Hony</h3>
                        <span>Php devoloper</span>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end team -->

    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class="col-md-4">
                    <div class="blog_img">
                        <figure><img src="{{asset('assets')}}/images/blog.jpg" alt="#"/></figure>
                    </div>
                    <div class="blog_text text_align_center">
                        <h3>Design</h3>
                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_img">
                        <figure><img src="{{asset('assets')}}/images/blog2.jpg" alt="#"/></figure>
                    </div>
                    <div class="blog_text text_align_center">
                        <h3>Design</h3>
                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_img">
                        <figure><img src="{{asset('assets')}}/images/blog3.jpg" alt="#"/></figure>
                    </div>
                    <div class="blog_text text_align_center">
                        <h3>Design</h3>
                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <a class="read_more" href="javascript:void(0)">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form_control" placeholder="Your Name" type="type" name=" Name">
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Your Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea1" style="color:#323757;" placeholder="Message" type="type" name="message"> </textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

