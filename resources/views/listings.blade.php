<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listings</h1>
    <h1>{{$heading}}</h1>
    {{-- You can use @if block or you use @unless --}}
    {{-- @if (count(@listings) == 0)
        <p>No listings found</p>
    @endif --}}

    @unless (count(@listings) == 0)  
    @foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}"> {{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
    @endforeach
    
    @else
    <p>No listings found</p>
    @endunless
</body>
</html>