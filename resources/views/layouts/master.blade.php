<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/navbar.css') }}">
        @yield('css')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ac2748b2eb.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>@yield('title')</title>

    </head>
    <body>
        @include('layouts.navbar')
        <br><br><br><br>
        @yield('content')

        <footer class="bg-light py-5">
          <div class="container">
            <div class="small text-center text-muted">Copyright &copy; 2019 - Evenk</div>
          </div>
        </footer>



        <script>

            $(document).ready(function(){


                $('#sevent_name').keyup(function(){
                    var query = $(this).val();
                    if(query != '')
                    {
                     var _token = $('input[name="_token"]').val();
                     $.ajax({
                      url:"{{ route('autocomplete.fetch.sevents') }}",
                      method:"POST",
                      data:{query:query, _token:_token},
                      success:function(data){
                       $('#seventList').fadeIn();
                       $('#seventList').html(data);
                      }
                     });
                    }
                });


                $(document).on('click', '#seventitem', function(){
                    $('#sevent_name').val($(this).text());
                    $('#sevent_id').val($(this).data('value'));
                    $('#seventList').fadeOut();
                });

            });
        </script>

    </body>
</html>
