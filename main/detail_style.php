<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/detail_style.css" rel="stylesheet">
    <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
    <!-- <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
    </script> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

      <?php
          include 'header.php';
      ?>

  

      <h1>Titre du style</h1>
      <hr style="height:2px;border-width:0;background-color:rgb(146, 180, 245);margin: 20px 50px 0px 50px; ">

      <div id="info">
        <p id="txt_info">Petite phrase devrivant le style precisé <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dolores earum minima odio porro reprehenderit, cupiditate tenetur assumenda et non numquam quasi inventore pariatur nesciunt odit veritatis, maiores aspernatur mollitia?

        </p>
      </div>
    

     <div class="container">
        <div class="wrap">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <a href="#img1">
                        <img src="https://images.unsplash.com/photo-1574270981993-f1df213562b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="01" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img1">
                        <img src="https://images.unsplash.com/photo-1574270981993-f1df213562b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#_" class="btn-close">&times;</a>
                    </div>
                </figure>

                <figure class="gallery__item gallery__item--2">
                    <a href="#img2">
                        <img src="https://images.unsplash.com/photo-1573743338941-39db12ef9b64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="02" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img2">
                        <img src="https://images.unsplash.com/photo-1573743338941-39db12ef9b64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#_" class="btn-close">&times;</a>
                    </div>
                </figure>

                <figure class="gallery__item gallery__item--3">
                    <a href="#img3">
                        <img src="https://images.unsplash.com/photo-1572295727871-7638149ea3d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="03" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img3">
                        <img src="https://images.unsplash.com/photo-1572295727871-7638149ea3d7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#_" class="btn-close">&times;</a>
                    </div>
                </figure>

                <figure class="gallery__item gallery__item--4">
                    <a href="#img4">
                        <img src="https://images.unsplash.com/photo-1571680719972-f18bb57077cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="04" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img4">
                        <img src="https://images.unsplash.com/photo-1571680719972-f18bb57077cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#_" class="btn-close">&times;</a>
                    </div>
                </figure>

                <figure class="gallery__item gallery__item--5">
                    <a href="#img5">
                        <img src="https://images.unsplash.com/photo-1571586100127-cdaef780fc61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="05" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img5">
                        <img src="https://images.unsplash.com/photo-1571586100127-cdaef780fc61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#_" class="btn-close">&times;</a>
                    </div>
                </figure>

                <figure class="gallery__item gallery__item--6">
                    <a href="#img6">
                        <img src="https://images.unsplash.com/photo-1568473648251-3a0c3aa56192?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="06" class="gallery__img">
                    </a>
                    <div class="lightbox" id="img6">
                        <img src="https://images.unsplash.com/photo-1568473648251-3a0c3aa56192?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <a href="#" class="btn-close">&times;</a>
                    </div>
                </figure>
            </div>
        </div>
    </div>

    <br>

      <section class="team-v2">
        <div class="container max-width-adaptive-lg">
          <div class="text-component text-center max-width-xs margin-x-auto margin-bottom-lg">
            <h1>Meet Our Team.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dicta officiis aperiam? Fuga incidunt tempora qui.</p>
          </div>
      
          <div class="grid gap-md">
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="profil.php" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Tatoueur</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://d3bzyjrsc4233l.cloudfront.net/news/Harold.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://img.resized.co/breaking-news/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL2ltYWdlcy5icmVha2luZ25ld3MuaWVcXFwvcHJvZFxcXC91cGxvYWRzXFxcLzIwMjFcXFwvMDNcXFwvMzExMzU3MjVcXFwvaGlkZXRoZXBhaW5oYXJvbGQuanBnXCIsXCJ3aWR0aFwiOjEyMDAsXCJoZWlnaHRcIjo2MjcsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3d3dy5icmVha2luZ25ld3MuaWVcXFwvaW1hZ2VzXFxcL25vLWltYWdlLnBuZ1wiLFwib3B0aW9uc1wiOltdfSIsImhhc2giOiI1NWJhMjBjZjAyMTZkNjA2NDBiZDM2NjczZTlmMTljMGY1YWUwNzEyIn0=/internet-s-hide-the-pain-harold-accidentally-used-by-swedish-covid-19-vaccine-website.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
            <div class="user-cell col-4@md col-3@xl">
              <div class="user-cell__body">
                <figure aria-hidden="true">
                  <img class="user-cell__img" src="https://img.resized.co/breaking-news/eyJkYXRhIjoie1widXJsXCI6XCJodHRwczpcXFwvXFxcL2ltYWdlcy5icmVha2luZ25ld3MuaWVcXFwvcHJvZFxcXC91cGxvYWRzXFxcLzIwMjFcXFwvMDNcXFwvMzExMzU3MjVcXFwvaGlkZXRoZXBhaW5oYXJvbGQuanBnXCIsXCJ3aWR0aFwiOjEyMDAsXCJoZWlnaHRcIjo2MjcsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3d3dy5icmVha2luZ25ld3MuaWVcXFwvaW1hZ2VzXFxcL25vLWltYWdlLnBuZ1wiLFwib3B0aW9uc1wiOltdfSIsImhhc2giOiI1NWJhMjBjZjAyMTZkNjA2NDBiZDM2NjczZTlmMTljMGY1YWUwNzEyIn0=/internet-s-hide-the-pain-harold-accidentally-used-by-swedish-covid-19-vaccine-website.jpg" alt="User profile image">
                </figure>
        
                <div class="user-cell__content text-component line-height-sm v-space-xxs">
                  <p><a href="#0" class="color-contrast-high"><strong>User Name</strong></a></p>
                  <p class="color-contrast-medium">Web Design</p>
                </div>
              </div>
      
              <div class="user-cell__cta">
                <a href='#0' class='user-cell__social-icon'><svg class='icon' viewBox='0 0 32 32'><title>Follow user on Twitter</title><g><path d='M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z'></path></g></svg></a>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>