<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Complete</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- component -->
    <div class="bg-gray-100 h-screen flex items-center px-5">
        <div class="bg-white max-w-lg p-6  md:mx-auto">
            <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <div class="text-center">
                <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Done!</h3>
                <p class="text-gray-600 my-2">Thank you for completing your secure online payment.</p>
                <p> Please wait while your payment is being processed. This takes less than 4hrs to complete. Your ticket details will be sent to your email as soon as it is done.  </p>
                <p>Please contact <a href="mailto:thepbs@gmail.com">thepbs@gmail.com</a> if you don't receive it after 24hrs. </p>
                <p> Have a great day! </p>
                <div class="py-10 text-center">
                    <a href="{{ route('home') }}" class="px-12 bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3">
                        GO BACK
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>