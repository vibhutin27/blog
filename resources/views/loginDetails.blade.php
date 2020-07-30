<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body >
        

            <div class="content">
                <div class="table-responsive">
                    <table id="user_table"  class="table table-bordered table-striped">
                        <thead >
                            <tr>
                                <th width="25%">QNo</th>
                                <th width="25%">QText</th>
                                <th width="25%">QValue</th>
                                <th width="25%">action</th>
                            
                            </tr>
                        
                        </thead>
                    </table>               
                </div>

                
            </div>
        </div>
        <script>
       $(document).ready(function(){
            $('#user_table').DataTable();
            processing: true,
            serverSider: true, 
            ajax:{
                    url: "{{ route('loginDetails.index') }}",
            },
            columns: [
                {
                    data : 'QNo',
                    name : 'QNo'
                },
                {
                    data : 'QText',
                    name : 'QText'
                },
                {
                    data : 'QValue',
                    name : 'QValue'
                },
                {
                    data : 'action',
                    name : 'action',
                    orderable: flase
                },
            ]
       }) ;
        <script>
    </body>
</html>
