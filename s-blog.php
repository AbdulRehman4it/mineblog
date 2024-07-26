<?php
      require_once('./db.php'); 
     require_once('./inc/head.php');
     ?>
  <body>
  <?php
     require_once('./inc/nav.php');
     ?>

<?php
// Check if the blog_id parameter is set in the URL
if (isset($_GET['id'])) {

  $id = $_GET['id'];
        $cat_query = "SELECT * FROM blogs WHERE id = '$id'";
        $result = mysqli_query($conn, $cat_query);
        // $cat_row = mysqli_fetch_array($cat_run);
        // $cat_name = $cat_row['first_title']; 
        // echo $cat_name;

    // // Retrieve the blog_id from the URL
    // $specific_id = $_GET['cat_id'];

    // // Proceed with fetching data for the specific ID
    // $query = "SELECT * FROM blogs WHERE first_title = '$cat_name'"; // Modify the query to fetch data for the specific ID
    // $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch data for the specific ID
            $row = mysqli_fetch_assoc($result);

            // Retrieve date, title, and category
            $date = date('M d, Y', strtotime($row['date']));
            $title = $row['first_title'] . ' ' . $row['second_title'] . ' ' . $row['third_title'];
            $category = $row['categories'];
            $aurthor= $row['author'];
            $id = $row['id'];
            // $blog_data = isset($row['blog_data']) ? $row['blog_data'] : ''; // Check if blog_data is not null

            ?>



    <section class="py-[5%] px-[15%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>
    <section>
      <div class="flex flex-col lg:flex-row items-start gap-10 p-2 lg:p-0">
         <div class="basis-1/2 overflow-hidden realtive ">
          
            <div class="swiper mySwiper0 pb-10">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div
                      class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                    >
                      <div class="pb-8">
                        <p class="text-lg nimbusl-regular text-[#ffffff]">
                          Source : Fashion Collection
                        </p>
                      </div>
                    </div>
                  
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                    >
                      <div class="pb-8">
                        <p class="text-2xl nimbusl-regular text-[#ffffff]">
                          Source : Fashion Collection
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                    >
                      <div class="pb-8">
                        <p class="text-2xl nimbusl-regular text-[#ffffff]">
                          Source : Fashion Collection
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div
                      class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                    >
                      <div class="pb-8">
                        <p class="text-2xl nimbusl-regular text-[#ffffff]">
                          Source : Fashion Collection
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              
        </div>
        <div class="basis-1/2 pr-[5%]">
          <div
            class="text-base lg:text-base nimbusl-bold text-[#AEAEAE] flex items-center gap-10 border-b border-[#A4A4A4]"
          >
            <p><?php echo $date; ?></p>
            <ul class="list-disc flex gap-10">
              <li>By <?php echo $aurthor; ?></li>
              <li> <?php echo $category; ?> Collection</li>
            </ul>
          </div>
          <h1 class="text-black text-3xl lg:text-4xl nimbusl-bold py-4">
          <?php echo $row['first_title'];?> <span class="ogg"><?php echo $row['second_title'];?> <i><?php echo $row['third_title'];?></i> </span>
          </h1>
          <p class="text-base lg:text-xl nimbusl-regular text-[#A4A4A4] leading-[25px] lg:leading-[37px]">
          <?php echo $row['blog_data']; ?>
          </p>
        </div>
      </div>
      <div class="flex flex-col-reverse lg:flex-row items-sart gap-10 pt-20 px-3 lg:px-0">
          <div class="basis-full lg:basis-1/2 pl-[5%]">
            
            
            <p class="text-base lg:text-xl nimbusl-regular text-[#A4A4A4] leading-[25px] lg:leading-[37px]">
            <?php echo $row['blog_data2']; ?>
            </p>
           <img src="./assets/img/google-add1.png" class="w-full h-[430px]" alt="">
          </div>
          <div class="w-full lg:basis-1/2 overflow-hidden relative">
            
              <div class="swiper mySwiper0 pb-10">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div
                        class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                      >
                        <div class="pb-8">
                          <p class="text-lg nimbusl-regular text-[#ffffff]">
                            Source : Fashion Collection
                          </p>
                        </div>
                      </div>
                    
                    </div>
                    <div class="swiper-slide">
                      <div
                        class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                      >
                        <div class="pb-8">
                          <p class="text-2xl nimbusl-regular text-[#ffffff]">
                            Source : Fashion Collection
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div
                        class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                      >
                        <div class="pb-8">
                          <p class="text-2xl nimbusl-regular text-[#ffffff]">
                            Source : Fashion Collection
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div
                        class="bg-[url('./assets/img/blog-hero.png')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
                      >
                        <div class="pb-8">
                          <p class="text-2xl nimbusl-regular text-[#ffffff]">
                            Source : Fashion Collection
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
          </div>
       
      </div>
    </section>
    <section>
      <div class="px-[5%] flex flex-wrap gap-3 lg:gap-7 py-8 border-b">
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Fashion
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Elegance
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Lifestyle
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Style
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Fitness
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Relationships
          </button></a
        >
        <a href=""
          ><button class="text-lg border px-6 py-1 text-[#A4A4A4]">
            Career
          </button></a
        >
      </div>
      <div class="flex justify-center py-10">
        <a href=""
          ><button
            class="bg-black text-xl text-white flex gap-2 pl-8 pr-20 py-3"
          >
          <img src="./assets/img/copy-link.png" alt="">
            
            
            Copy link
          </button></a
        >
      </div>
    </section>




    <?php
        } else {
            echo "<p>No related blogs found.</p>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No blog ID specified.";
}
?>



    <section class="p-[5%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>
  <!--slider  -->
  <?php
    $query = "SELECT * FROM blogs";
    if (isset($cat_name)) {
        $query .= " WHERE categories = '$cat_name'";
    }
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
    ?>


    <section class="bg-black p-[5%]">
      <h2 class="text-3xl lg:text-3xl nimbusl-bold text-white uppercase pb-5">
        Related Blogs
      </h2>
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper pb-16">
        <?php
                       while ($row = mysqli_fetch_assoc($result)) {
                      ?>  
          <div class="swiper-slide bg-white p-3 lg:p-8">
          <a href="blog_page.php?blog_id=<?php echo $row['id']; ?>">
            <div
              class="bg-[url('./assets/img/<?php echo $row['image']; ?>')] h-[500px] bg-cover bg-no-repeat flex items-end"
            >
              <div class="p-5">
                

                <a href="./blog.php?cat_id=<?php echo $row['categories_id'];?>">
        <h1 class="text-white text-xl lg:text-2xl ogg">
        <?php echo $row['first_title'];?> <span class="ogg"><?php echo $row['second_title'];?>  <i><?php echo $row['third_title'];?></i></span>
        </h1>
        </a>





                
              </div>
            </div>
                       </a>
          </div>

          <?php
                            }
                            ?>
                    

         
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <?php
        } else {
           
            echo "<p>No related blogs found.</p>";
        }
    } else {
     
        echo "Error: " . mysqli_error($conn);
    }
    ?>

   



    <section class="bg-black px-5 lg:px-[20%] pb-[5%] mt-10 lg:mt-0">
      <div class="text-center">
        <h2 class="text-white nimbusl-bold text-3xl lg:text-5xl uppercase pt-5">
          join our community
        </h2>
        <p
          class="text-xl nimbusl-regular captalize text-white leading-[36px] pb-20 pt-10"
        >
          Join our exclusive community and elevate your lifestyle with AMDmode:
          where elegance meets intelligence and <br />
          sophistication transcends convention.
        </p>
        <div class="flex items-center relative">
          <input
            type="text"
            class="bg-transparent border-b w-full p-3 focus-visible:outline-0 text-white"
            placeholder="Enter Your Email"
          />
          <button
            class="bg-white text-lg text-black px-10 py-3 absolute right-2 bottom-3"
          >
            Subscribe
          </button>
        </div>
      </div>
    </section>
    <section class="py-[5%] px-[15%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>

<?php
     require_once('./inc/footer.php');
     ?>