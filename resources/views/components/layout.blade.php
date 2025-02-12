<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle?? 'defautl title'}}</title>
    <meta name="description" content="{{$metaDescription ?? 'default description'}}"/>
    <link href="{{ asset('css/post-index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/post-form.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


    <x-partials.navigate/>

    @session('status')
    <div>
       {{$value}}
    </div>
    @endsession

    {{$slot}}
    @isset($sidebar)
        <div>
            <h3>Sidebar</h3>
            <div>{{$sidebar}}</div>
        </div>
    @endisset

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

