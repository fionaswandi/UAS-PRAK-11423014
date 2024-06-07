@if(!config('app.isMobile'))
<style>
  #dekstop-home-1{        
    height:657px;
    max-width: 1349px;
    margin:auto;
    background:url('{{asset('assets/images/home-background-1.png')}}') no-repeat;
    position:relative;
    margin-bottom: 10px;
  }

  #dekstop-home-1-position-1{
    position: absolute;
    top:20px;
    left:20px;
  }

  #dekstop-home-1-position-2{
    position: absolute;
    right:20px;
    top:20px;
  }

  #dekstop-home-1-position-3{
    position: absolute;
    color:white;
    left:50px;
    top:250px;
  }
  #dekstop-home-2{
    margin-bottom: 10px;
    background:url('{{ asset('assets/images/home-background-2.png')}}') no-repeat;     
    margin:auto;
    height:800px;
    max-width:1349px;
    padding:50px;
  }

  .cursor-pointer{
    cursor: pointer;
  }

  .font-size-30{
    font-size: 30px;
  }
        .hero-overlay {
            position: absolute;
            top: 50px;
            left: 70px;
            padding: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            z-index: 2;
            color: white; 
        }

        .hero-overlay h1 {
            font-size: 50px;
            font-weight: bold;
            margin: 0;
            overflow: hidden;
            border-right: .10em orange; /* Blinking cursor */
            white-space: nowrap;
            letter-spacing: 0.10em;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: white }
        }
           
</style>

<span class="d-none d-md-block d-lg-block d-xl-block d-xs-none d-sm-none">
  <div id="dekstop-home-1">

    <div id="dekstop-home-1-position-2">
      <div class="d-flex flex-row p-3 animated flipInX">
        @if(auth()->user())
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='{{route('user.home')}}'">
          <i class='fe fe-inbox'></i> 
          Dashboard
        </button>

        <button class="btn btn-danger pl-5 pr-5 ml-2"
          onclick="window.location='{{route('logout')}}'">
          <i class='fe fe-log-out'></i> 
          Keluar
        </button>
        @endif

        @if(!auth()->user())
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='{{route('signup')}}'">
          <i class='fe fe-user-plus'></i> 
          Daftar
        </button>
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='{{route('signin')}}'">
          <i class='fe fe-log-in'></i> 
          Masuk
        </button>
        @endif
      </div>
    </div>
    <div id="dekstop-home-1-position-3" class="animated flipInX">
      <div class="text-center font-size-30">
        Sistem Booking Lapangan Badminton
      </div>
      <div class="mt-3 text-center">
        &nbsp;&nbsp;&nbsp;
        Website penyewaan lapangan badminton digital yang praktis dan terpercaya!
      </div>
    </div>
  </div>

  <!-- Hero -->
        <div class="hero-overlay">
            <h1 id="welcome-part1"></h1>
            <h1 id="welcome-part2"></h1>
        </div>
    </div>

  <div id="dekstop-home-2">
    <div class="ml-3 font-size-30">
      Lokasi-Lokasi Kami
    </div>
    <div class="d-flex flex-row flex-wrap mt-3"> 
      @foreach([0,1,2,3] as $item)                  
        <div class="col-3 mb-5 cursor-pointer"
          onclick="window.location=''">
          <img src="{{asset('assets/images/locations/'.($item+1).'.png')}}"
            class="img-fluid">
        </div>      
      @endforeach    
    </div>       
  </div>
</span>
@endif

<script>
  document.addEventListener("DOMContentLoaded", function () {
        const textPart1 = "Selamat Datang Di Website";
        const textPart2 = "FIONA SWANDI";
        let i = 0;
        let j = 0;
        const speed = 70;
        const welcomeElement1 = document.getElementById("welcome-part1");
        const welcomeElement2 = document.getElementById("welcome-part2");

        function typeWriter1() {
            if (i < textPart1.length) {
                welcomeElement1.innerHTML += textPart1.charAt(i);
                i++;
                setTimeout(typeWriter1, speed);
            } else {
                setTimeout(typeWriter2, 500); // Start the second text after a delay
            }
        }

        function typeWriter2() {
            if (j < textPart2.length) {
                welcomeElement2.innerHTML += textPart2.charAt(j);
                j++;
                setTimeout(typeWriter2, speed);
            }
        }

        typeWriter1();
    });
</script>