<!-- Navbar -->
<nav class="bg-black py-4">
    <div class="flex justify-between lg:justify-center items-center">
       <a href="./index.php"><img src="./assets/img/logo.png" class="w-[140px] lg:w-[390px]" alt=""></a> 
        <div class="block lg:hidden">
            <button id="menue-toggle">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33 7.5C33 6.67158 32.3284 6 31.5 6H12C11.1716 6 10.5 6.67158 10.5 7.5C10.5 8.32842 11.1716 9 12 9H31.5C32.3284 9 33 8.32842 33 7.5Z" fill="white"></path>
                    <path d="M33 18C33 17.1716 32.3284 16.5 31.5 16.5H4.5C3.67155 16.5 3 17.1716 3 18C3 18.8284 3.67155 19.5 4.5 19.5H31.5C32.3284 19.5 33 18.8284 33 18Z" fill="white"></path>
                    <path d="M31.5 27C32.3284 27 33 27.6716 33 28.5C33 29.3284 32.3284 30 31.5 30H19.5C18.6716 30 18 29.3284 18 28.5C18 27.6716 18.6716 27 19.5 27H31.5Z" fill="white"></path>
                    </svg>                  
                    
            </button>
        </div>
    </div>
    <div class="lg:flex px-[5%] hidden">
        <div class="basis-1/5"></div>
        <div class="basis-3/5">
            <ul class="text-[26px] text-[#A4A4A4] nimbusl-regular flex items-center justify-between">
             <!-- fetch category data using query -->
             <?php  
                      $query =" SELECT * FROM categories";
                      $run = mysqli_query($conn, $query);
                      if(mysqli_num_rows($run)  >  0){
                        while ($row = mysqli_fetch_array($run)) {
                          $category = ucfirst($row['category']);
                          $id = $row['id'];
                          echo  "<li>
                          <a href='./index.php?cat=".$id."' class='uppercase  pc:text-[26px] md:text-xl  pc:leading-9 md:leading-7 nimbus'>$category</a></li>";
                        }
                      }else{
                        echo   "<li><a class='dropdown-item' href='#'> No Categories Yet</a></li>";
                      }
                      
                      ?>
            </ul>
        </div>
        <div class="basis-1/5 flex justify-end  pl-4">
            <input type="text" id="search" class="w-full hidden block bg-transparent border-b text-white focus-visible:outline-0" placeholder="search here ">
            <svg id="search-toggle" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <mask id="mask0_0_803" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
                <rect width="30" height="30" fill="url(#pattern0)"/>
                </mask>
                <g mask="url(#mask0_0_803)">
                <rect width="30" height="30" fill="white"/>
                </g>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_0_803" transform="scale(0.00195312)"/>
                </pattern>
                <image id="image0_0_803" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                </defs>
                </svg>
                
        </div>
    </div>
    <div id="menue" class="hidden flex justify-center py-5 lg:hidden absolute bg-black w-full" >
        <ul class="text-[26px] text-[#A4A4A4] nimbusl-regular flex flex-col gap-5 text-center justify-center items-center justify-between">
        <?php  
                      $query =" SELECT * FROM categories";
                      $run = mysqli_query($conn, $query);
                      if(mysqli_num_rows($run)  >  0){
                        while ($row = mysqli_fetch_array($run)) {
                          $category = ucfirst($row['category']);
                          $id = $row['id'];
                          echo  "<li>
                          <a href='./index.php?cat=".$id."' class='uppercase  pc:text-[26px] md:text-xl  pc:leading-9 md:leading-7 nimbus'>$category</a></li>";
                        }
                      }else{
                        echo   "<li><a class='dropdown-item' href='#'> No Categories Yet</a></li>";
                      }
                      
                      ?>
        </ul> 
    </div>
</nav>