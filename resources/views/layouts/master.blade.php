<!DOCTYPE html>
<html>
	<head>
    @include('partial.head')
    @yield('head')
	</head>
	<body>
		<div class="body">
			@include('partial.header')
      
      @yield('content')

			@include('partial.footer')
		</div>
    @include('partial.js')
	</body>
</html>
