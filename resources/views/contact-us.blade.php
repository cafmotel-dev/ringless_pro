@extends('web')
@section('title', 'Best VOIP Phone Services  | Cloud Phone System |Cloud PBX Providers| USA, CANADA')

@section('content')
<style>
    .phn_div {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px; /* Adjust as needed */
}

#loader {
    display: none; /* Hide the loader initially */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000; /* Ensure the loader appears above other content */
}

.loader-content {
    background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Optional: Add shadow for better visibility */
}
.blur {
    filter: blur(5px); /* Adjust the blur intensity as needed */
    pointer-events: none; /* Prevent interactions with blurred elements */
}

    </style>
<body>
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Header Main Area -->

        <!-- Header Main Area End Here -->

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">Contact Us</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="#" class="home"><span>Home</span></a></span>
                                <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                                <span><span class="post-root post post-post current-item">Contact Us</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Contact Us Content -->
        <div class="page-content">
            <!-- Contact -->
            <section class="contact-section-home1">
                <div class="container">
                    <div class="section-lg">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle-white">CONTACT WITH US</h4>
                                    <h2 class="pbmit-title">
                                        Feel free to get in touch with experts
                                    </h2>
                                    <div class="mt-2">
                                        Interested in sending ringless voicemails? Send us a
                                        message or schedule a demo with a Ringless Pro team member by
                                        submitting the form.
                                    </div>
                                </div>
                                <ul class="pbmit-social-links">
                                    <li class="pbmit-social-li pbmit-social-facebook">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-twitter">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-twitter"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-instagram">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-youtube">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                            <div id="loader">
    <div class="loader-content">
        <!-- Loader image -->
        <img src="{{asset('web/images/loader-30px.gif')}}" alt="Loading..." />
    </div>
</div>
<div id="msg" class="h3 text-center"></div>

<form  role="form">
                                    <div class="row g-4">
                                        <div class="col-sm-12 col-md-6">
                                        <span id="nameMsg"style="color:red;"></span>
                                            <input type="text" class="form-control mb-0" placeholder="Your Name"
                                                name="name"id="name" />
                                                <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                        <span id="emailMsg"style="color:red;"></span>
                                            <input type="email" class="form-control" placeholder="Email Address"
                                                name="email"id="email" />
                                                <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="col-sm-12 col-md-6 mt-0">
                                        <span id="phoneMsg"style="color:red;"></span>
                                            <input type="text" class="form-control" placeholder="Phone Number"
                                                name="phone" id="phone_number"/>
                                                <div class="help-block with-errors"></div>

                                        </div>
                                        <div class="col-sm-12 col-md-6 mt-0">
                                            <input type="text" class="form-control" placeholder="subject"
                                                name="subject" id="subject"/>
                                        </div>
                                        <div class="col-sm-12 mt-0">
                                        <span id="Msg"style="color:red;"></span>

                                            <textarea class="form-control" placeholder="Write Message"name="message"
                                              data-gramm="false"
                                                wt-ignore-input="true"id="message"></textarea>
                                        </div>
                                          <div class="form-group text-center">
                            <span id="msgCaptcha"style="color:red;"></span>


    <div class="col-lg-12 col-md-12">
    <div class="form-group d-flex align-items-center">
        <a id="captchaTable"
            class="flex justify-center text-white social-icon phn_div" style="
            font-size: 20px;
            height: 25px;
            font-style: oblique;
            border: none;
            margin-right:10px;
            background: #F86F03;
            border-radius: 37px; padding: 16px;
        
            ">
        </a>
        <button id="refreshButton" class="bg-blue-500 text-black rounded-md focus:outline-none ml-2"
                style=" border: none; border-radius: 37px; padding: 6px;
                color: black; cursor: pointer; margin-right:10px;">
         <i class="fa fa-refresh" aria-hidden="true"></i>
        </button>
        <input type="text" class="form-control" id="captchaInput" required
               data-error="Please enter captcha" placeholder="Enter Captcha">
               
    </div>
            
            <div class="help-block with-errors"></div>
</div>
</div>
                                        <div class="mt-0">
                                            <!-- <a href="#" class="pbmit-btn pbmit-btn-hover-secondary">Send a Massage</a> -->
                                            <button type="submit" name="submit"id="submit" class="pbmit-btn pbmit-btn-hover-secondary">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="contact-section-home1-bottom">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-20">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xido-icon pbmit-xido-icon-location"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-heading-desc">Visit Our Office</div>
                                            <h2 class="pbmit-element-title">
                                                169 Madison Ave STE 2945 New York, NY 10016
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-20">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xido-icon-email"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-heading-desc">Send Email</div>
                                            <h2 class="pbmit-element-title">
                                                <a href="mailto:sales@ringless.pro">sales@ringless.pro</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-20">
                                    <div class="pbmit-ihbox-box d-flex align-items-center">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-xido-icon pbmit-xido-icon-call"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-heading-desc">Call Anytime</div>
                                            <h2 class="pbmit-element-title">+1 844-614-2007</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=169 Madison Ave STE 2945 New York, NY 10016&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </section>
            <!-- Contact End -->
        </div>
        <!-- Contact Us Content End -->
   <!-- End Map Area -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/imask"></script>
  <script>
    var phoneInput = document.getElementById('phone_number');
    var phoneMask = new IMask(phoneInput, {
      mask: '(000) 000-0000'
    }); 
</script>
<script>
    // Call the captcha function on page load
    captcha();

    function captcha() {
        const captchaTable = document.getElementById('captchaTable');
        const captchaInput = document.getElementById('captchaInput');
        const refreshButton = document.getElementById('refreshButton');
        const verifyButton = document.getElementById('submit');
        const resultMessage = document.getElementById('msgCaptcha');

        // Generate the initial Captcha
        generateCaptchaTable();

        // Event listener for the Refresh button
        refreshButton.addEventListener('click', function () {
            generateCaptchaTable();
            resultMessage.textContent = '';
        });

        // Event listener for the Verify button
        verifyButton.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent form submission
   // Get form data
   var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone_number').val();
        var message = $('#message').val();
        var subject = $('#subject').val();

        // Check if name is empty
        if (name.trim() === '') {
            $("#nameMsg").html('Please enter your name.');
            setTimeout(function () {
                $("#nameMsg").html('');
            }, 3000);
            return; // Stop form submission
        }

        // Check if email is empty and in valid format
        if (email.trim() === '' || !isValidEmail(email)) {
            if (email.trim() === '') {
                $("#emailMsg").html('Please enter your email.');
            } else {
                $("#emailMsg").html('Please enter a valid email.');
            }
            setTimeout(function () {
                $("#emailMsg").html('');
            }, 3000);
            return; // Stop form submission
        }

        // Check if phone is empty and a valid 10-digit number
        if (phone.trim() === '' || !isValidPhoneNumber(phone)) {
            if (phone.trim() === '') {
                $("#phoneMsg").html('Please enter your phone number.');
            } else {
                $("#phoneMsg").html('Please enter a valid 10-digit number.');
            }
            setTimeout(function () {
                $("#phoneMsg").html('');
            }, 3000);
            return; // Stop form submission
        }

        // Check if message is empty
        if (message.trim() === '') {
            $("#Msg").html('Please enter your message.');
            setTimeout(function () {
                $("#Msg").html('');
            }, 3000);
            return; // Stop form submission
        }

            const inputText = captchaInput.value.trim().toLowerCase();
            const captchaText = captchaTable.dataset.captcha.trim().toLowerCase();
            if (inputText === '') {
                resultMessage.textContent = 'Please enter the valid CAPTCHA.';
                resultMessage.classList.remove('text-green-500', 'text-red-500');
                setTimeout(function() {
        resultMessage.textContent = ''; // Clear the message after 3 seconds
    }, 3000);
                return; // Exit the function if CAPTCHA input is empty
            }
            // Verify the entered Captcha
            if (inputText !== captchaText) {
                resultMessage.textContent = 'Incorrect Captcha. Please try again.';
                resultMessage.classList.remove('text-green-500');
                resultMessage.classList.add('text-red-500');
                generateCaptchaTable(); // Refresh CAPTCHA on incorrect input
                setTimeout(function() {
                resultMessage.textContent = ''; // Clear the message after 3 seconds
            }, 3000);
                return; // Exit the function if CAPTCHA is incorrect
            }

            // CAPTCHA is correct, submit the form
            $('form').submit();
        });

        // Function to generate a random string for the Captcha
        function generateRandomString(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }

        // Function to generate the Captcha table
        function generateCaptchaTable() {
            const captchaText = generateRandomString(6);
            captchaTable.dataset.captcha = captchaText;
            captchaTable.innerHTML = '';
            for (let i = 0; i < captchaText.length; i++) {
                const cell = document.createElement('div');
                cell.textContent = captchaText.charAt(i);
                cell.classList.add();
                captchaTable.appendChild(cell);
            }
            captchaInput.value = ''; // Clear the input field
        }
    }

    $(document).ready(function () {
    var formSubmitted = false; // Flag to track if the form has been submitted
    var loader = $('#loader'); // Get the loader element
    var formElements = $('form input, form textarea, form button'); // Select form elements to blur

    // Hide the loader initially
    loader.hide();

    // Prevent the default form submission
    $('form').submit(function (e) {
        e.preventDefault();

        // Prevent multiple form submissions
        if (formSubmitted) {
            return false;
        }

        // Disable the submit button to prevent multiple submissions
        $('#submit').prop('disabled', true);

        // Show the loader
        loader.show();

        // Blur form elements
        formElements.addClass('blur');

        // If all fields are filled and valid, proceed with form submission
        var formData = $(this).serialize(); // Serialize form data
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var url = '/save-contact-us'; // Replace 'your-endpoint-url' with your actual endpoint URL

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
            },
            success: function (response) {
                // Hide the loader
                loader.hide();
                captcha();
                
                $('form')[0].reset(); // Reset form after successful submission
                formSubmitted = true; // Set formSubmitted flag to true
                setTimeout(function () {
            $('#submit').prop('disabled', false); // Enable the submit button after a delay
            formSubmitted = false; // Reset formSubmitted flag after delay
            formElements.removeClass('blur'); // Remove blur from form elements
            $("#msg").html('Thank you for contacting us. We will reach you shortly');
            console.log(response);
            setTimeout(function () {
                $("#msg").html('');
            }, 5000);
        }, 2000); // Adjust the delay as needed
    },
            error: function (xhr, status, error) {
                // Hide the loader
                loader.hide();

                // Show error message for other types of errors
                $("#msg").html('An error occurred while submitting the form.');
                $('#submit').prop('disabled', false); // Enable the submit button on error
                formSubmitted = false; // Reset formSubmitted flag on error
                formElements.removeClass('blur'); // Remove blur from form elements
            }
        });
    });
});



// Function to validate email format
function isValidEmail(email) {
    var emailPattern =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailPattern.test(email);
}

// Function to validate phone number format (10 digits)
function isValidPhoneNumber(phone) {
    var phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/; 
    return phonePattern.test(phone);
}

</script>
@endsection