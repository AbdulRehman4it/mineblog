<?php
      require_once('./db.php'); 
     require_once('./inc/head.php');
     ?>
  <body>
  <?php
     require_once('./inc/nav.php');
     ?>



    <section class="p-[5%]">
    <script async="async" data-cfasync="false" src="//pl23899056.highratecpm.com/2bccf0a629211c719bfdbb92935210c6/invoke.js"></script>
    <div id="container-2bccf0a629211c719bfdbb92935210c6"></div>
    </section>

  
  
  
    <!-- ======================SLIDER DIOR START HERE=============== -->
<?php
// Check if the blog_id parameter is set in the URL
if (isset($_GET['cat_id'])) {

  $cat_id = $_GET['cat_id'];
        $cat_query = "SELECT * FROM categories WHERE id = $cat_id";
        $cat_run = mysqli_query($conn, $cat_query);
        $cat_row = mysqli_fetch_array($cat_run);
        $cat_name = $cat_row['category']; 

    // // Retrieve the blog_id from the URL
    // $specific_id = $_GET['cat_id'];

    // Proceed with fetching data for the specific ID
    $query = "SELECT * FROM blogs WHERE categories = '$cat_name'"; // Modify the query to fetch data for the specific ID
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch data for the specific ID
            $row = mysqli_fetch_assoc($result);

            // Retrieve date, title, and category
            $date = date('M d, Y', strtotime($row['date']));
            $title = $row['first_title'] . ' ' . $row['second_title'] . ' ' . $row['third_title'];
            $category = $row['categories'];
            
            // $blog_data = isset($row['blog_data']) ? $row['blog_data'] : ''; // Check if blog_data is not null

            ?>


<?php
                       while ($row = mysqli_fetch_assoc($result)) {
                      ?> 

    <section>
      <!-- Swiper -->
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
        <?php
                        // Loop through image columns
                        for ($i = 0; $i <= 5; $i++) {
                            $image_column = ($i == 0) ? 'image' : 'image' . $i;
                            // Check if the image column exists and is not empty
                            if (!empty($row[$image_column])) {
                                ?>
          <div class="swiper-slide">
            <div
              class="bg-[url('./assets/img/<?php echo $row[$image_column]; ?>')] h-[70vh] bg-cover bg-no-repeat flex items-end justify-center"
            >
              <div class="pb-8">
                <p class="text-lg nimbusl-regular text-[#ffffff]">
                  Source : <?php echo $category; ?> Collection
                </p>
              </div>
            </div>
           
          </div>
          <?php
                            }
                        }
                        ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="p-[5%]">
              <div
                class="text-base nimbusl-bold text-[#AEAEAE] flex items-center gap-10 border-b border-[#A4A4A4]"
              >
                <p><?php echo $date; ?></p>
                <ul class="list-disc">
                  <li><?php echo $category; ?></li>
                </ul>
              </div>
              <h1 class="text-black text-3xl nimbusl-bold py-3">
              <?php echo $row['first_title'];?> <span class="ogg"><?php echo $row['second_title'];?> <i><?php echo $row['third_title'];?></i> </span>
              </h1>
              <p class="text-base leading-[24px] text-[#A4A4A4] nimbusl-regular line-clamp-2">
              <?php echo $row['blog_data']; ?>
              </p>
              <a href="./s-blog.php?id=<?php echo $row['id'];?>">
              <div class="mt-10">
                <span id="blog<?php echo $row['id'];?>"
                  class="px-16 py-3 text-lg text-white nimbusl-regular bg-black mt-8"
                >
                  Read More<span>
              </div>
              </a>
              
            </div>
    </section>

    <?php
                            }
                            ?>


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
    <section class="py-[5%] px-[15%]">
    <script async="async" data-cfasync="false" src="//pl23899056.highratecpm.com/2bccf0a629211c719bfdbb92935210c6/invoke.js"></script>
    <div id="container-2bccf0a629211c719bfdbb92935210c6"></div>
    </section>
   
   
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