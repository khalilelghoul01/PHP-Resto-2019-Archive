<?php
include("includes/DBconfig.php");

function getmenu() {
	global $con;
	$menu= "SELECT * FROM menu ORDER by 1";
	$run_menu = mysqli_query($con, $menu) or die( mysqli_error($con));;

	$check = mysqli_num_rows($run_menu);
	while($row_menu = mysqli_fetch_array($run_menu)){
		$food_id = $row_menu['food_id'];
		$food_token = $row_menu['food_token'];
		$food_title = $row_menu['food_title'];
		$food_description = $row_menu['food_description'];
		$food_image = $row_menu['food_img'];
		$food_price = $row_menu['food_price'];
		$food_p_token = $row_menu['price_token'];

		echo"<div class='max-w-6xl mx-auto'>
					   <div class='flex items-center justify-center min-h-screen'>
					      <div class='max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3'>
					         <div class='bg-white shadow-xl rounded-lg overflow-hidden'>
					            <div class='bg-cover bg-center h-56 p-4' style='background-image: url($food_image)'>
					               <div class='flex justify-end'>
					                  <svg class='h-6 w-6 text-white fill-current' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>
					                     <path d='M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z'></path>
					                  </svg>
					               </div>
					            </div>
					            <div class='p-4'>
					               <p class='uppercase tracking-wide text-sm font-bold text-gray-700'>$food_title</p>
					               <p class='text-3xl text-gray-900'>$food_price</p>
					               <p class='text-gray-700'>$food_description</p>
					            </div>
					            <div class='px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100'>
					               <div class='text-xs uppercase font-bold text-gray-600 tracking-wide'>Realtor</div>
					               <div class='flex items-center pt-2'>
					                  <div class='bg-cover bg-center w-10 h-10 rounded-full mr-3' style='background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)'>
					                  </div>
					                  <div>
					                     <p class='font-bold text-gray-900'>$food_token</p>
					                     <p class='text-sm text-gray-700'>$food_p_token</p>
					                  </div>
					               </div>
					            </div>
					         </div>
					      </div>
					   </div>
					</div>";
	}
}

?>