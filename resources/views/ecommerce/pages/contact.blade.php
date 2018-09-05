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
                <div class="phoneno"><i class="fa fa-mobile"></i>Phone No : 09985825746</div>
                <div class="email"><i class="fa fa-envelope"></i>Email Address : orajenmarketing@gmail.com</div>
                <div class="address"><i class="fa fa-map-marker"></i> Location : 08 Kasoy Street, Zone 1, North Signal Village, Taguig City</div>
                <div class="locationmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d682.7889625422396!2d121.05838400737777!3d14.516941422370236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8b52fb026a1%3A0x656793209e39ef6e!2sZone+1%2C+8+Kasoy+St%2C+Manila%2C+1630+Metro+Manila!5e0!3m2!1sen!2sph!4v1536089025541" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
</div>
@endsection