<html>
    <body>
        <h1>{{$id}}</h1>
        @if ($id=="ant") 
        <img src="{{$ant}}" height="150">
        @endif

        @if ($id=="bird") 
        <img src="{{$bird}}" height="150">
        @endif

        @if ($id=="cat") 
        <img src="{{$cat}}" height="150">
        @endif
      
        @if ($id=="god") 
        <img src="{{$god}}" height="150">
        @endif

        @if ($id=="spider") 
        <img src="{{$spider}}" height="150">
        @endif
    </body>
</html>