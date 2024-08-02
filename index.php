<?php
      require_once('./db.php'); 
     require_once('./inc/head.php');
     ?>
  <body>


  <?php
     require_once('./inc/nav.php');
     ?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1761214904388955"
     crossorigin="anonymous"></script>
<!-- bloging rectangle -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1761214904388955"
     data-ad-slot="5751460752"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php
    if (isset($_GET['cat'])) {
        $cat_id = $_GET['cat'];
        $cat_query = "SELECT * FROM categories WHERE id = $cat_id";
        $cat_run = mysqli_query($conn, $cat_query);
        $cat_row = mysqli_fetch_array($cat_run);
        $cat_name = $cat_row['category']; 
      }
    ?>
   


 <!-- hero section start -->
 <?php
   $query = "SELECT * FROM blogs";
   if (isset($cat_name)) {
       $query .= " WHERE categories = '$cat_name'";
   }
   else{
   $query .= " ORDER BY rand() LIMIT 2";
  }
   $run = mysqli_query($conn, $query);

   if ($run && mysqli_num_rows($run) > 0) {
       $row = mysqli_fetch_array($run);
       // Display the first blog
       ?>

<div class="">
<section
      class="bg-[url('./assets/img/her-bg.png')] h-[70vh] bg-center lg:bg-top bg-cover bg-no-repeat flex items-end"
    >
      <div class="pl-[5%] pb-8">
        <div
          class="text-base nimbusl-bold text-[#AEAEAE] flex items-center gap-10"
        >

        <?php 
                                $id = $row['id'];
                                $timestamp = strtotime($row['date']); 
                                $date = getdate($timestamp); 
                                // $day = $date['mday'];
                                $month = $date['month'];
                                $year = $date['year'];
                            ?>
          <p> <?php echo $month;?>, <?php echo $year;?></p>
          <ul class="list-disc">
            <li><?php echo ucfirst($row['categories']);?></li>
          </ul>
        </div>
        <a href="./blog.php?cat_id=<?php echo $row['categories_id'];?>">
        <h1 class="text-white text-3xl lg:text-4xl nimbusl-bold">
        <?php echo $row['first_title'];?> <span class="ogg"><?php echo $row['second_title'];?>  <i><?php echo $row['third_title'];?></i></span>
        </h1>
        </a>

      </div>
    </section>

</div>
   
    <?php
    } else {
        echo "<h2 class='text-back'>No Blogs Available</h2>";
    }
    ?>

    <section class="p-[5%] pt-16 lg:pt-[10%]">
    <script async="async" data-cfasync="false" src="//pl23899056.highratecpm.com/2bccf0a629211c719bfdbb92935210c6/invoke.js"></script>
    <div id="container-2bccf0a629211c719bfdbb92935210c6"></div>
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
      <h2 class="text-3xl nimbusl-bold text-white uppercase pb-5">
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
        <h1 class="text-white text-xl  ogg">
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
     <!-- slider -->
     <?php
    // Fetch the remaining blogs
    $query = "SELECT * FROM blogs";
    if (isset($cat_name)) {
        $query .= " WHERE categories='$cat_name'";
    }
    else{
      $query .= " ORDER BY rand() LIMIT 3";
    }
    $run = mysqli_query($conn, $query);

    if ($run && mysqli_num_rows($run) > 1) { // Check if there are more than one blogs
        // Skip the first blog
        mysqli_data_seek($run, 1);
        
        // Display the remaining blogs
        while ($row = mysqli_fetch_array($run)) {
            // Your code to display the remaining blogs goes here
            ?>


    <section
      class="bg-[url('./assets/img/<?php echo $row['image']; ?>')] h-[70vh] bg-center bg-cover bg-no-repeat flex items-end mt-20"
    >
      <div class="pl-[5%] pb-8">
        <div
          class="text-base nimbusl-bold text-[#AEAEAE] flex items-center gap-10"
        >
        <?php 
                            $timestamp = strtotime($row['date']); 
                            $date = getdate($timestamp); 
                            // $day = $date['mday'];
                            $month = $date['month'];
                            $year = $date['year'];
                        ?>
          <p> <?php echo $month;?>, <?php echo $year;?></p>
          <ul class="list-disc">
            <li><?php echo ucfirst($row['categories']);?></li>
          </ul>
        </div>
        <h1 class="text-white text-3xl lg:text-4xl nimbusl-bold">
        <?php echo $row['first_title'];?> <?php echo $row['second_title'];?> <span class="ogg"><i><?php echo $row['third_title'];?></i> </span>
        </h1>
      </div>
    </section>
    <?php
        }
    } else {
        echo "<h2 class='text-back'>No More Blogs Available</h2>";
    }

    ?>
   

    <section class="py-[5%] px-[15%] flex justify-center items-center">
    <script type="text/javascript">
	atOptions = {
		'key' : 'd252e076ca975686e9e6a1c55d7804d4',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//www.topcreativeformat.com/d252e076ca975686e9e6a1c55d7804d4/invoke.js"></script>
    <div id="container-d252e076ca975686e9e6a1c55d7804d4"></div>
    </section>



    <?php
     require_once('./inc/footer.php');
     ?>