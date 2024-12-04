<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Rama SHG</title>
      
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
      <!-- Custom Styles -->
      <style>
         body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         }
         .container {
            margin-top: 50px;
         }
         .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         }
         .card-header {
            background-color: #343a40;
            color: #fff;
            font-size: 18px;
            text-align: center;
         }
         .card-body {
            padding: 30px;
         }
         .alert {
            margin-bottom: 20px;
         }
         .razorpay-payment-button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
         }
         .razorpay-payment-button:hover {
            background-color: #218838;
         }
         .form-footer {
            margin-top: 20px;
         }
      </style>
   </head>
   <body>
      <div id="app">
         <main class="py-4">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <!-- Error Message -->
                     @if($message = Session::get('error'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif

                     <!-- Success Message -->
                     @if($message = Session::get('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     @endif

                     <!-- Payment Form -->
                     <div class="card">
                        <div class="card-header">
                           Razorpay Payment Gateway
                        </div>
                        <div class="card-body text-center">
                           <form action="{{ route('front.payment') }}" method="POST">
                              @csrf
                              <script src="https://checkout.razorpay.com/v1/checkout.js"
                                 data-key="{{ env('RAZOR_KEY') }}"
                                 data-amount="{{ $product->price * 100 }}" 
                                 data-currency="INR"
                                 data-buttontext="Proceed to Pay ₹{{ $product->price }}"
                                 data-name="Rama SHG"
                                 data-description="Paying for {{ $product->name }}"
                                 data-image="https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png"
                                 data-prefill.name="name"
                                 data-prefill.email="email"
                                 data-theme.color="#F37254"></script>
                              <!-- Optional form footer content -->
                              <div class="form-footer text-center">
                                 <small class="text-muted">You will be redirected to Razorpay for secure payment.</small>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>

      <!-- Bootstrap JS and dependencies -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
