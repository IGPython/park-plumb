<?php 
?>
<head>
<title><?php echo $title?></title>
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content= "<?php echo $pageDesc ?> ">

<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/side-style.css" type="text/css" />
<link rel="stylesheet" href="styles/reset.css" type="text/css" />
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<script type="text/javascript" src="scripts/cssQuery-p.js"></script>
<script type="text/javascript" src="scripts/jcoglan.com/sylvester.js"></script>
<script type="text/javascript" src="scripts/cssSandpaper.js"></script>
<script type="text/javascript" src="scripts/jquery-PseudoCSS.1.0.js"></script>
<script type="text/javascript" src="scripts/jquery-easySlider1.7.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        numeric: true,
        speed: 1200,
        pause: 5000 // change slide interval speed here
    });
});
</script>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#conhold').hover(function(){
			$(this).stop().animate({'right':'0px'});
		}, function(){
			$(this).stop().animate({'right':'-340px'});
		});
		
		$('input#name, input#email,input#tel, textarea#comment').each(function() {
			var default_value = this.value;
			$(this).focus(function() {
				$('.error').hide();
				if(this.value == default_value) {
					this.value = '';
				}
			});
			$(this).blur(function() {
				if(this.value == '') {
					this.value = default_value;
					$(this).css({'background-color':'', 'color':''});
				} else {
					$(this).css({'background-color':'rgba(255,255,255,0.7)', 'color':'#666'});
				}
			});
		});
		
		$('.success, .error').hide();
		$('#contact_form').submit(function(){
			var errors = 0;
			$('.error').hide();
			$('#contact_form :input').each(function() {
				var value = this.value.toLowerCase();
				var name = this.name.toLowerCase();
				if(name == "email") {
					email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
					if(!email_regex.test(value)){
						$('.error').text("Enter a valid email address").fadeIn();
						errors++;
					}
				}
				switch(value){
					case 'name *':
						$('.error').text("Enter you're name").fadeIn();
						errors++;
						break;
					case 'email *':
						$('.error').text("Enter you're email").fadeIn();
						errors++;
						break;
					case 'comment *':
						$('.error').text("Enter a comment").fadeIn();
						errors++;
						break;
				}
			});
			if(errors == 0){
				submitForm();
			}
			return false;
		});
		
	});
	
	function submitForm(){
		var inputs = [];
		$('#contact_form :input').each(function() {
			inputs.push(this.name+"="+escape(this.value));
		});
		query = inputs.join('&');
		jQuery.ajax({
			type: 'post',
			url: 'sendForm.php',
			data: query,
			error: function(r) {
				$('.error').text("Something went wrong").fadeIn();
			},
			success: function(r) {
				if(r == "success"){
					$('.input-field').val("");
					$('#contact_form input#submit').fadeOut(1000);
					$('.success').text("Thanks for your message").fadeIn();
				}
			}
		});
	}
	
</script>
</head>