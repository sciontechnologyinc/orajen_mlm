@extends('ecommerce.master.template')

@section('content')

<div class="container contact-form">
            <div class="contact-image">
                <img src="/img/logo.png" alt="orajen_logo"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <div class="contactus">
                <div class="or">OR</div>
            </div>
            <div class="container contact-form">
                <h3>Contact Us</h3>
                <div class="phoneno"><i class="fa fa-mobile"></i>Phone No : 09123456789</div>
                <div class="email"><i class="fa fa-envelope"></i>Email Address : orajenmarketing@gmail.com</div>
                <div class="address"><i class="fa fa-map-marker"></i> Location : Sta Rosa Laguna</div>
            </div>
</div>
@endsection