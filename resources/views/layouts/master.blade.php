<html>

      @include('include.head')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
 	  
      @include('include.header')
	  
      @include('include.sidebar')
        
        @yield('content')
         
      @include('include.footer')
		 
  <!-- /footer content -->
      </div>
    </div>

    
  </body>
  </html>