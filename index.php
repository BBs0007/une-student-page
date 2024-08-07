<!DOCTYPE html>
<html lang="en">

<head> 

    <!-- Basic Page Needs -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body>

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
        <header uk-sticky> 
            <div class="header_inner">
                <div class="left-side">
    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="dashboard.html">
                            <img src="assets/images/logo.png" alt="">
                            <img src="assets/images/logo-light.png" class="logo_inverse" alt="">
                            <img src="assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>
                    <!-- icon menu for mobile -->
                    <div class="triger" uk-toggle="target: #wrapper ; cls: is-active"> 
                    </div>
    
                </div>
                <div class="right-side">
     
                    <!-- Header search box  -->
                    <div class="header_search"><i class="uil-search-alt"></i> 
                        <input value="" type="text" class="form-control" placeholder=" Quick search for anything.." autocomplete="off">
                        <div uk-drop="mode: click;offset:10" class="header_search_dropdown">
                               
                            <h4 class="search_title"> Recently </h4>
                            <ul>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li> 
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Coffee  Addicts </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Mountain Riders </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Property Rent And Sale  </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li>
                            </ul>
    
                        </div>
                    </div>
                     
                    <div>

                        <!-- search icon for mobile -->
                        <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
 
        
                        <!-- notification -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="mail-outline" class="is-icon"></ion-icon>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown"> 
                            <div class="drop_headline">
                                <h4>Notifications </h4>
                                <div class="btn_action">
                                    <div class="btn_action">
                                        <a href="#">
                                            <ion-icon name="settings-outline" uk-tooltip="title: Notifications settings ; pos: left"></ion-icon>
                                        </a>
                                        <a href="#">
                                            <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
        
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p> <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                <span class="text-link">Javascript Introduction </span>
                                            </p>
                                            <span class="time-ago"> 2 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Stella Johnson</strong> Replay Your Comments in
                                                <span class="text-link">Programming for Games</span>
                                            </p>
                                            <span class="time-ago"> 9 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Alex Dolgove</strong> Added New Review In Course
                                                <span class="text-link">Full Stack PHP Developer</span>
                                            </p>
                                            <span class="time-ago"> 12 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                <span class="text-link">Css Flex Box </span>
                                            </p>
                                            <span class="time-ago"> Yesterday </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                        <!-- messages -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="notifications-outline" class="is-icon"></ion-icon>
                            <span> 2 </span>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown">
                            <div class="drop_headline">
                                <h4>Messages </h4>
                                <div class="btn_action">
                                    <a href="#">
                                        <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#">
                                        <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> 6:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time">12:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time"> Wed</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> Sun </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time"> Fri </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time">1 Week ago</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                        <!-- profile -->
                        <a href="#" class="flex items-center space-x-2">
                            <img src="assets/images/avatars/placeholder.png" class="header_widgets_avatar mr-3" alt=""> 
                            <span class="sm:inline hidden">  User admin </span>
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                            <ul>   
                                <li>
                                    <a href="#" class="user">
                                        <div class="user_avatar">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user_name">
                                            <div> Stella Johnson </div>
                                            <span> @Johnson </span>
                                        </div>
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" class="is-link">
                                        <ion-icon name="rocket-outline" class="is-icon"></ion-icon> <span>  Upgrade Membership  </span>
                                    </a>
                                </li> 
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                         My Account 
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="card-outline" class="is-icon"></ion-icon>
                                        Subscriptions
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="color-wand-outline" class="is-icon"></ion-icon>
                                        My Billing 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                                        Account Settings  
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" id="night-mode" class="btn-night-mode" onclick="UIkit.notification({ message: 'Hmm...  <strong> Night mode </strong> feature is not available yet. ' , pos: 'bottom-right'  })">
                                        <ion-icon name="moon-outline" class="is-icon"></ion-icon>
                                         Night mode
                                        <span class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </span>
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                        Log Out 
                                    </a>
                                </li>
                            </ul>
                        </div> 

                    </div>
    
                </div>
            </div>
        </header>

        <!-- Main Contents -->
        <div class="main_content">
            
 
            <div class="container">

                <div class="md:space-y-8 space-y-4">

                    <div class="grid gap-3 md:grid-cols-4 grid-cols-2 mt-2">

                        <div class="bg-white p-5 shadow space-y-4 rounded-md">
                            <div class="flex items-start justify-between">
                                <ion-icon name="flag" class="text-2xl text-white bg-blue-500 rounded-full p-1.5" role="img" aria-label="flag"></ion-icon>
                                <div class="text-3xl font-bold"> 45 </div>
                            </div>
                            <div> Completed</div>
                        </div>
                        <div class="bg-white p-5 shadow space-y-4 rounded-md">
                            <div class="flex items-start justify-between">
                                <ion-icon name="heart" class="text-2xl text-white bg-red-500 rounded-full p-1.5" role="img" aria-label="heart"></ion-icon>
                                <div class="text-3xl font-bold"> 43 </div>
                            </div>
                            <div> Wishlist  </div>
                        </div>
                        <div class="bg-white p-5 shadow space-y-4 rounded-md">
                            <div class="flex items-start justify-between">
                                <ion-icon name="medal" class="text-2xl text-white bg-yellow-500 rounded-full p-1.5" role="img" aria-label="medal"></ion-icon>
                                <div class="text-3xl font-bold"> 15 </div>
                            </div>
                            <div> Certification</div>
                        </div>
                        <div class="bg-white p-5 shadow space-y-4 rounded-md">
                            <div class="flex items-start justify-between">
                                <ion-icon name="cart" class="text-2xl text-white bg-green-500 rounded-full p-1.5" role="img" aria-label="cart"></ion-icon>
                                <div class="text-3xl font-bold"> 35 </div>
                            </div>
                            <div> Purchased</div>
                        </div>
        
                    </div>
    
                    <div class="lg:flex lg:space-x-4">

                        <!-- Resume courses --> 
                        <div class="shadow bg-white rounded-md lg:w-8/12">
    
                            <div class="border-b flex items-center justify-between md:p-5 p-3">
                                <div>
                                    <h2 class="text-lg font-semibold"> Courses in progess  </h2>
                                </div>
                                <a href="#" class="text-blue-500"> See all </a>
                            </div>
    
                            <div class="lg:max-h-96" data-simplebar>
    
                                <ul class="divide-y px-5">
    
                                    <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
    
                                        <a href="#">
                                            <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12"> 
                                                <img src="assets/images/courses/img-7.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            </div>
                                        </a>
                                        <div class="flex flex-1 items-end justify-between space-x-5">
                                            <div class="flex-1">
                                                <a href="#" class="md:text-base font-semibold line-clamp-1"> Learn and Understand AngularJS to become a professional  developer </a>
                                                <div class="mt-1.5">
                                                    <div class="mb-1.5 text-gray-400 text-sm"> 8/16   <span class="ml-1">  Complete </span>  </div>
                                                    <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                                </div>
                                            </div>
                                            <a href="#" class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                                Resume
                                            </a>
                                        </div>
    
                                    </li> 
                                    <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
    
                                        <a href="#">
                                            <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12"> 
                                                <img src="assets/images/courses/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            </div>
                                        </a>
                                        <div class="flex flex-1 items-end justify-between space-x-5">
                                            <div class="flex-1">
                                                <a href="#" class="md:text-base font-semibold line-clamp-1"> Build Responsive Real World Websites </a>
                                                <div class="mt-1.5">
                                                    <div class="mb-1.5 text-gray-400 text-sm"> 8/16   <span class="ml-1">  Complete </span>  </div>
                                                    <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                                </div>
                                            </div>
                                            <a href="#" class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                                Resume
                                            </a>
                                        </div>
    
                                    </li> 
                                    <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
    
                                        <a href="#">
                                            <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12"> 
                                                <img src="assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            </div>
                                        </a>
                                        <div class="flex flex-1 items-end justify-between space-x-5">
                                            <div class="flex-1">
                                                <a href="#" class="md:text-base font-semibold line-clamp-1">    Learn C sharp for Beginners Crash Course  </a>
                                                <div class="mt-1.5">
                                                    <div class="mb-1.5 text-gray-400 text-sm"> 7/12   <span class="ml-1">  Complete </span>  </div>
                                                    <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1"> <div class="h-full w-3/4 bg-blue-600"></div></div>
                                                </div>
                                            </div>
                                            <a href="#" class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                                Resume
                                            </a>
                                        </div>
    
                                    </li> 
                                    <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
    
                                        <a href="#">
                                            <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12"> 
                                                <img src="assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            </div>
                                        </a>
                                        <div class="flex flex-1 items-end justify-between space-x-5">
                                            <div class="flex-1">
                                                <a href="#" class="md:text-base font-semibold line-clamp-1"> The Complete JavaScript For Beginners </a>
                                                <div class="mt-1.5">
                                                    <div class="mb-1.5 text-gray-400 text-sm"> 1/14   <span class="ml-1">  Complete </span>  </div>
                                                    <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                                </div>
                                            </div>
                                            <a href="#" class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                                Resume
                                            </a>
                                        </div>
    
                                    </li> 
                                    <li class="flex items-start md:space-x-6 space-x-3 md:py-4 py-3">
    
                                        <a href="#">
                                            <div class="h-12 md:h-16 md:w-24 overflow-hidden relative rounded -md w-12"> 
                                                <img src="assets/images/courses/img-6.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                            </div>
                                        </a>
                                        <div class="flex flex-1 items-end justify-between space-x-5">
                                            <div class="flex-1">
                                                <a href="#" class="md:text-base font-semibold line-clamp-1"> Responsive Web Design Essentials HTML5 CSS3 and Bootstrap  </a>
                                                <div class="mt-1.5">
                                                    <div class="mb-1.5 text-gray-400 text-sm"> 1/14   <span class="ml-1">  Complete </span>  </div>
                                                    <div class="relative bg-gray-200 rounded-md overflow-hidden w-full h-1"> <div class="h-full w-1/2 bg-blue-600"></div></div>
                                                </div>
                                            </div>
                                            <a href="#" class="sm:flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold hidden">
                                                Resume
                                            </a>
                                        </div>
    
                                    </li> 

                                </ul>
                    
                            </div>
                    
                        </div>
                    
                        <!-- Top Instructors -->
                        <div class="bg-white rounded-md self-start shadow-md lg:w-4/12 mt-5 lg:mt-0">
                            
                            <div class="border-b flex items-center justify-between  p-4">
                                <h2 class="text-lg font-semibold">Top Instructors</h2>
                            </div>
                            <div class="p-5 space-y-3.5">
                        
                                <div class="flex items-center space-x-4">
                                    <a href="#" iv="" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-1.jpg" class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="font-semibold capitalize"> Stella Johnson </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 28 Courses</div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-2.jpg" class="absolute w-full h-full inset-0 " alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="font-semibold capitalize"> Alex Dolgove </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 23 Courses </div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-3.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="font-semibold capitalize"> John Michael </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 19 Courses</div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-4.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="font-semibold capitalize"> Dennis Han </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 17 Courses</div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-5.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="font-semibold capitalize"> Martin Gray </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 14 Courses</div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <a href="#" class="w-10 h-10 flex-shrink-0 overflow-hidden rounded-full relative">
                                        <img src="assets/images/avatars/avatar-2.jpg" class="absolute w-full h-full inset-0" alt="">
                                    </a>
                                    <div class="flex-1">
                                        <a href="#" class="text-base  font-semibold capitalize"> Erica Jones </a>
                                        <div class="text-sm text-gray-500 mt-0.5"> 12 Courses</div>
                                    </div>
                                    <a href="#" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold">
                                        Follow
                                    </a>
                                </div>
                        
                            </div>
                            <a href="#" class="block border-t font-semibold py-3 mt-2 text-blue-600 text-center"> See all </a>
                        </div>

                    </div>


                </div>
                
            </div>
           
            <!-- footer -->
            <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
                    <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                </div>
            </div>

        </div>
 

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner" data-simplebar>
                
                <div class="-mb-1 border-b flex items-center pb-5 pt-4 px-2 space-x-4 cursor-pointer">
                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="h-12 rounded-full w-12">
                    <div class="flex-1">
                        <div class="font-semibold mb-0.5 text-base"> Jesse Stevens </div>
                        <div class="text-sm"> info@mydomain.com</div>
                    </div>
                    <i class="icon-feather-chevron-down text-xl"></i>
                </div>
                <div uk-dropdown="offset:-10;mode: click" class="-ml-1 m-3 bg-white shadow-xl rounded-md p-4 border border-gray-100">
                    <div class="w-60 font-medium">
                        <a href="instructor/dashboard.html" class="px-3 py-2 rounded block hover:bg-gray-100"> Switch to Instuctor </a>
                        <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> My Subscriptions</a>
                        <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> Account setting </a>
                        <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> Sign out </a>
                    </div>
                </div>

                <ul class="border-transparent">
                    <li><a href="dashboard.html">
                            <ion-icon name="home-outline" class="side-icon"></ion-icon>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li><a href="my-courses.html">
                            <ion-icon name="play-circle-outline" class="side-icon"></ion-icon>
                            <span> My Courses</span>
                        </a> 
                    </li>
                    <li><a href="messages.html">
                            <ion-icon name="chatbox-ellipses-outline" class="side-icon"></ion-icon>
                            <span> Message</span><span class="nav-tag">2</span>
                        </a>
                    </li>
                    <li><a href="suggestions.html">
                            <ion-icon name="albums-outline" class="side-icon"></ion-icon>
                            <span> Suggestions</span>
                        </a>
                    </li>
                    <li><a href="billing-history.html">
                            <ion-icon name="reader-outline" class="side-icon"></ion-icon>
                            <span> Billing</span>
                        </a>
                    </li>
                    <li><a href="profile.html">
                            <ion-icon name="person-outline" class="side-icon"></ion-icon>
                            <span> Profile</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <ion-icon name="settings-outline" class="side-icon"></ion-icon>
                            <span> Setting</span>
                        </a>
                        <ul>
                            <li><a href="setting.html"> General setting </a></li>
                            <li><a href="setting.html"> Notifications </a></li>
                            <li><a href="setting.html"> Social Login </a></li> 
                            <li><a href="setting.html"> Setup payment </a></li> 
                        </ul>
                    </li>
                </ul>
                
                <ul class="side_links" data-sub-title="">
                    <li><a href="setting.html">
                            <ion-icon name="person-outline" class="side-icon"></ion-icon>
                            <span> Manage profile </span>
                        </a>
                    </li>
                    <li><a href="form-login.html">
                            <ion-icon name="log-out-outline" class="side-icon"></ion-icon>
                            <span> logout </span>
                        </a>
                    </li>
                </ul>
 
            </div>

            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
        </div>
        
    </div>

 
   <!-- Javascript -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
 
</body>

</html>

