<footer class="bg-white px-[5%] pt-[5%]">
      <div
        class="flex flex-col lg:flex-row justify-between items-center border-b border-[#A4A4A4] pb-10"
      >
        <img src="./assets/img/logo.png" class="w-[140px] lg:w-[140px]" alt="" />
        <div class="items-center gap-5 hidden lg:flex">
         <a href=""><img src="./assets/img/youtube.png" alt="" /></a> 
         <a href=""> <img src="./assets/img/instagram.png" alt="" /></a>
        </div>
      </div>
      <div
        class="flex flex-col md:flex-row justify-between items-center text-black text-lg nimbusl-regular py-5"
      >
        <ul class="flex items-center gap-2 lg:gap-4 md:gap-7">
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Privacy&nbsp;Policy</a></li>
          <li><a href="">Advertise</a></li>
          <div class="flex flex-col items-center gap-5 lg:hidden">
         <a href=""><img src="./assets/img/youtube.png" alt="" /></a> 
         <a href=""> <img src="./assets/img/instagram.png" alt="" /></a>
        </div>
        </ul>
        <p>© 2024 Copyright RISS Group</p>
      </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
      
      document.getElementById('search-toggle').addEventListener('click', function () {
            document.getElementById('search').classList.toggle('hidden');
        });
    
        document.getElementById('menue-toggle').addEventListener('click', function () {
            document.getElementById('menue').classList.toggle('hidden');
        });
    
      </script>
      
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheelControl: true,
        mousewheelForceToAxis: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1300: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      });
    </script>


    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheelControl: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
    <!-- Swiper JS -->
   
<script>
  
var swiper = new Swiper(".mySwiper0", {
  slidesPerView: 1,
  mousewheelControl: true,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
});

</script>




    <script>
      var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 3,
        mousewheelControl: true,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>



<script>
     var swiper = new Swiper(".mySwiper4", {
        slidesPerView: 1,
        mousewheelControl: true,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1300: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      });
      
    </script>


  </body>
</html>