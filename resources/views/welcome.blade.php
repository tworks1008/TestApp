<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .container
            {
                width: 500px;
                margin-top: 50px;
            }
            form {                
                background: #ecf5fc;
                padding: 40px 50px 45px;
            }
            .form-control:focus {
                border-color: #000;
                box-shadow: none;
            }
            label {
                font-weight: 600;
            }
            .error {
                color: red;
                font-weight: 400;
                display: block;
                padding: 6px 0;
                font-size: 14px;
            }
            .form-control.error {
                border-color: red;
                padding: .375rem .75rem;
            }
        </style>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    </head>
    <body class="antialiased">
        
            
            <div class="container mt-5">
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif 
                <!-- add heading contact form -->
                <h1 class="text-center">Contact Form</h1>
                
                <form  method="post" action="{{ route('contact.store') }}" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Date</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date">
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Time (hour:minute am/pm)</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control @error('hour') is-invalid @enderror"  type="number" id="hour" name="hour" min="1" max="12">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control @error('minute') is-invalid @enderror" type="number" id="minute" name="minute" min="0" max="59">
                            </div>
                            <div class="col-md-4">
                                <select class="form-control @error('notation') is-invalid @enderror" name="notation">
                                    <option value="am">am</option>
                                    <option value="pm">pm</option>
                                </select>
                            </div>
                        </row>
                            
                        @error('hour')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('minute')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('notation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                
                    </div>
                    <div class="form-group mb-2">
                        <label>Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="4"></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                     
                    </div>
                    <div class="d-grid mt-3">
                    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    </div>
                </form>
            </div>   
    </body>
</html>
