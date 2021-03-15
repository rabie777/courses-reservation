@include('includes.header')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>Enroll</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Enroll</h2>
                </div>
                
                <div class="col-lg-8">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                     {{Session::get('success')}}
                </div>
                @endif
                    <form method="post" action="{{route('update',[$data -> id])}}" enctype="multipart/form-data" >
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="{{$data->firstname}}"  value="{{$data->price}}" placeholder="{{__('messages.First Name')}}" name="firstname" >
                                    @error('firstname')
                                <small class="form-text text-danger">{{$message}} </small>
                                @enderror
                                </div>
                              
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="{{$data->lastname}}" placeholder="{{__('messages.last name')}}" name="lastname" >
                                    @error('lastname')
                                <small class="form-text text-danger">{{$message}} </small>
                                @enderror
                                </div>
                               
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"  type="email" value="{{$data->email}}" placeholder="{{__('messages.email')}}" name="email">
                                    @error('email')
                                <small class="form-text text-danger">{{$message}} </small>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"  type="text" value="{{$data->phone}}" placeholder="{{__('messages.phone')}}" name="phone">
                                    @error('phone')
                                <small class="form-text text-danger">{{$message}} </small>
                                @enderror
                                </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="spec">Categories:</label>
                                    <select class="form-control" name="category">
                                        <option value="Web App">Web App</option>
                                        <option value="Desktop App">Desktop App</option>
                                        <option value="Mobile App">Mobile App</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="spec">Courses:</label>
                                    <select class="form-control" name="course">
                                        <option value="php">php</option>
                                        <option value="c#">c#</option>
                                        <option value="python">python</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"  type="file" placeholder="image" name="photo">
                                    @error('photo')
                                <small class="form-text text-danger">{{$message}} </small>
                                @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Update</button>
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