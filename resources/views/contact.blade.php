@extends('layouts.app')

@section('content')

<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">




<div class="bg-contact100" >
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form" action="https://formspree.io/f/xgerbaqe" method="POST">
					<span class="contact100-form-title">
						<div>
							<b>Get in touch with us</b>
						</div>
                            <b class=" font-weight-light" style="font-size: 15px;">
								interested in our solutions or IT services? Then please get in touch and we'll be glad to help.
                            </b>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Send
						</button>
					</div>
				</form>
			</div>
			<div class="our-ream_and_cintactus"> 
				<div class="title_header_contcact">
						<h2>  Our Terms And Conditions </h2>
					</div>
					<div class="desc--and-text_contact">
						<p>
							On Coody you will receive original products from developers but at a much-reduced price tag.
							All files do not contain ads, viruses, or malicious code. We provide good technical consultations and
							assistance in installing products. We have regular updates and direct download links.
							Contact Us: Coody@support.com
						</p>
					</div>
			
				</div>
			</div>

	</div>
	 


	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{ asset('/js/main.js') }}"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

</script>
@endsection