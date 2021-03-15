@include('includes.header')
    
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Register</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Register</h2>
                </div>
                <div class="col-lg-8">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
                </div>
                @endif
                    <form method="post" action="{{route('registeration')}}" enctype="multipart/form-data" >    
                    @csrf 
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"  type="text"  placeholder="{{__('messages.First Name')}}" name="firstname">
                               @error('firstname')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"  type="text"  placeholder="{{__('messages.last name')}}" name="lastname">
                                @error('lastname')
                                <small class="from-text text-danger"> {{$message}} </small>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control"  type="email"  placeholder="{{__('messages.email')}}" name="email">
                                    @error('email')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control"   type="password"  placeholder="{{__('messages.password')}}" name="password">
                                    @error('password')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="{{__('messages.phone')}}" name="phone">
                                    @error('phone')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                  
                                    <input class="form-control" type="number" placeholder="{{__('messages.age')}}" name="age">
                                    @error('age')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label>Gender:</label>
                            </div>
                            <div class="col-sm-8 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  value="male" name="check">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline offset-sm-6">
                                    <input class="form-check-input" type="radio"  value="female" name="check">
                                    <label class="form-check-label" for="inlineRadio2">female</label>
                                </div>
                                @error('gender')
                               <small class="form-text text-danger">{{$message}} </small>
                               @enderror
                            </div>
                           <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Image:</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                </div>
                            </div> 
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn" name="click">register</button>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    
    @include('includes.footer')