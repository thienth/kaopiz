<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post-middle')}}" method="post">
        <span style="color: red">{{session('errMsg')}}</span>
        @csrf
        <input type="text" name="product_name" id="product_name">
        <input type="text" name="age">
        <button type="submit">Submit</button>
    </form>
    
    <span id="nameErr" style="color: red"></span>
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script>
        // $('#product_name').on('blur', function(){
        //     var name = $(this).val();
        //     $.ajax({
        //         url: "{{route('postajax')}}",
        //         method: 'post',
        //         data: {
        //             _token: "{{csrf_token()}}",
        //             product_name: name
        //         },
        //         dataType: 'JSON',
        //         success: function(response){
        //             console.log(response);
        //             $('#nameErr').text(response.msg);
        //         }
        //     })
        // })        
    </script>
</body>
</html>