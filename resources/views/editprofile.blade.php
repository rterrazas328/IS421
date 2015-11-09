@extends('myapp')


@section('content')
    <section>
        <div class="container-fluid">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="" enctype="multipart/form-data" autocomplete="on" role="form">
                                    <div class="form-group form-group-">
                                        <label class="control-label" for="imageprofile">Profile Picture:</label>
                                        <a href="#" class="thumbnail">
                                            <img class="img-responsive" src="/img/icon.png" alt="">
                                        </a>
                                        <input id="imageprofile" name="image" type="file" accept="image/*" />
                                        <div class="col-md-4">
                                            <input class="form-control" type="submit" name="profilePic" value="Save"/>
                                        </div>
                                        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row" id="aboutMe">
                            <div class="col-md-6">
                                <form action="" autocomplete="on" role="form">
                                    <div class="form-group">
                                        <label class="control-label" for="aboutMeprofile">About Me:</label>
                                        <textarea class="form-control" rows="7" id="aboutMeprofile" name="aboutMe"></textarea>
                                        <div class="col-md-4">
                                            <input class="form-control" type="submit" name="saveAboutMe" value="Save">
                                        </div>
                                        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <form class="form-horizontal" action="" autocomplete="on" role="form" >
                            <div class="form-group form-group-sm">
                                <label class="control-label" for="firstnameprofile">First Name:</label>
                                <input class="form-control" id="firstnameprofile" name="firstname" required="required" type="text"  />

                                <label class="control-label" for="lastnameprofile">Last Name:</label>
                                <input class="form-control" id="lastnameprofile" name="lastname" required="required" type="text"  />

                                <label class="control-label" for="usernameprofile">Username:</label>
                                <input class="form-control" id="usernameprofile" name="username" required="required" type="text"  />

                                <label class="control-label" for="streetaddressprofile">Street Address:</label>
                                <input class="form-control" id="streetaddressprofile" name="address" required="required" type="text" />

                                <label class="control-label" for="cityprofile">City:</label>
                                <input class="form-control" id="cityprofile" name="city" required="required" type="text" />

                                <label class="control-label" for="stateprofile">State:</label>
                                <input class="form-control" id="stateprofile" name="state" required="required" type="text" />

                                <label class="control-label" for="countryprofile">Country:</label>
                                <input class="form-control" id="countryprofile" name="country" required="required" type="text" />

                                <label class="control-label" for="bdayprofile">Date Of Birth:</label>
                                <input class="form-control" id="bdayprofile" name="bday" required="required" type="date" />

                                <label class="control-label" for="phoneprofile">Phone Number:</label>
                                <input class="form-control" id="phoneprofile" name="country" required="required" type="tel" />

                                <label class="control-label" for="emailprofile"> E-mail Address:</label>
                                <input class="form-control" id="emailprofile" name="email" required="required" type="email" />
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="submit" name="updateProfile" value="Save"/>
                            </div>
                            <?php
                                $user = Auth::user();
                                echo $user;
                            ?>
                            <input type="hidden" name="honeypot" value="IS-421-RRZ" />
                            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection