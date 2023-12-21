<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MHMS</title>
  <link rel="shortcut icon" href="./assets/images/Untitled-3.png">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<style>


/* styles for desktop devices */
@media only screen and (min-width: 992px) {
  body {
    font-size: 16px;
    width: 100%;
    margin: auto;
  }
}

/* styles for tablet devices */
@media only screen and (min-width: 768px) and (max-width: 991px) {
  body {
    font-size: 14px;
    width: 100%;
    margin: auto;
  }
}

/* styles for mobile devices */
@media only screen and (max-width: 767px) {
  body {
    font-size: 12px;
    width: 100%;
    margin: 0;
  }
}








  
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&family=Tilt+Neon&display=swap");

@property --gradient-angle {
  syntax: "<angle>";
  initial-value: 0deg;
  inherits: false;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}

html {
  scroll-behavior: smooth;
}

img {
  width: 100%;
  pointer-events: none;
  user-select: none;
}

/* SECTION - HOME */

.home {
  display: grid;
  grid-template-columns: 45% 50%;
  place-items: center;
  gap: 50px;
  background: rgb(67, 69, 112);
  background: radial-gradient(
    circle,
    rgba(67, 69, 112, 1) 3%,
    rgba(35, 36, 57, 1) 60%
  );
  overflow: hidden;
  padding: 130px 80px;
}

.description {
  color: #fff;
  padding: 0 50px;
}

.description > h1 {
  font-family: "Tilt Neon", sans-serif;
  font-size: clamp(2.3rem, 5vw, 4rem);
  line-height: 1;
  margin-bottom: 30px;
}

.gradient-text {
  font-family: "Tilt Neon", sans-serif;
  background-image: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  color: transparent;
  background-size: contain;
  background-clip: text;
  -webkit-background-clip: text;
}

.description > p {
  font-family: "Nunito", sans-serif;
  font-size: 1.2rem;
  line-height: 1.5;
  margin-bottom: 30px;
}

#form {
  position: relative;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
}

input {
  padding-inline-end: 10px;
  padding-inline-start: 10px;
  background-color: transparent;
  outline: transparent;
  border: 0;
  border-bottom: 2px solid rgba(255, 255, 255, 0.3);
  margin-right: 10px;
  transition: all 0.3s ease-in;
  -webkit-transition: all 0.3s ease-in;
}

input::placeholder {
  color: rgb(117, 152, 242);
  opacity: 0.5;
  font-weight: 500;
}

input[type="email"] {
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
  font-size: 1rem;
}

input[type="email"]:focus {
  border: transparent;
  outline: 2px dotted rgb(117, 152, 242);
  outline-offset: -3px;
}

.btn {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3px;
  max-width: max-content;
  background: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  background-size: 200%;
  background-position: left;
  color: #fff;
  font-size: 1.2rem;
  font-weight: 500;
  border: 0;
  padding: 12px 16px;
  border-radius: 5px;
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  cursor: pointer;
  transition: all 0.3s ease-in;
}

.btn:is(:hover, :focus-visible) {
  background-position: right;
}

.users-color-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(3, 1fr);
  gap: 20px;
}

.item {
  max-width: 200px;
  aspect-ratio: 1/1;
  box-shadow: 0 8px 8px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  animation: fadeIn 0.5s linear 1 forwards;
  animation-delay: calc(0.2s * var(--i));
  opacity: 0;
}

.item:nth-child(1) {
  background-color: #67d7e1;
  border-radius: 50% 50% 0 50%;
}

.item:nth-child(2) {
  border-radius: 50% 50% 0 0;
}

.item:nth-child(3) {
  background-color: #6cc164;
  border-radius: 50%;
}

.item:nth-child(4) {
  border-radius: 0 0 0 50%;
}

.item:nth-child(5) {
  border-radius: 0 50% 50% 0;
}

.item:nth-child(6) {
  background-color: #8071a8;
  border-radius: 0 50% 50% 50%;
}

.item:nth-child(7) {
  border-radius: 50% 50% 0 50%;
}

.item:nth-child(8) {
  background-color: #fe7519;
  border-radius: 50% 0 0 50%;
}

.item:nth-child(9) {
  background-color: #f5bec3;
  border-radius: 0 50% 50% 0;
}

.item:nth-child(10) {
  border-radius: 50%;
}

.item:nth-child(11) {
  background-color: #fcd659;
  border-radius: 50% 0 50% 50%;
}

.item:nth-child(12) {
  border-radius: 50% 0 0 0;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: scale(0);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* SECTION - CARD CONTAINER */

.card-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 30px;
  width: 100%;
  min-height: 100vh;
  background: rgb(67, 69, 112);
  background: radial-gradient(
    circle,
    rgba(67, 69, 112, 1) 3%,
    rgba(35, 36, 57, 1) 60%
  );
  overflow: hidden;
  padding: 90px 50px;
}

.card {
  max-width: 300px;
  aspect-ratio: 3/5;
  border-radius: 15px;
  margin: 20px;
  overflow: hidden;
  border-top: 1px solid rgba(255, 255, 255, 0.7);
  border-left: 1px solid rgba(255, 255, 255, 0.7);
  box-shadow: 0 8px 10px rgba(0, 0, 0, 0.5),
    inset 0px 2px 2px rgba(255, 255, 255, 0.2);
  cursor: grab;
}

.content {
  position: relative;
  display: grid;
  place-items: center;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(10, 1fr);
  padding: 20px;
  background: rgba(104, 104, 104, 0.5);
  user-select: none;
}

.content::before,
.content::after {
  content: "";
  position: absolute;
  inset: 0;
  z-index: -1;
  border-radius: inherit;
  background: conic-gradient(
    from var(--gradient-angle),
    rgb(109, 186, 22),
    rgb(30, 119, 95),
    rgb(55, 141, 167),
    rgb(59, 91, 174),
    rgb(144, 118, 236),
    rgb(59, 91, 174),
    rgb(55, 141, 167),
    rgb(30, 119, 95),
    rgb(109, 186, 22)
  );
  animation: rotation 8s linear infinite;
}

.content::after {
  filter: blur(30px);
}

@keyframes rotation {
  0% {
    --gradient-angle: 0deg;
  }
  100% {
    --gradient-angle: 360deg;
  }
}

.content img {
  aspect-ratio: 3/2;
  border-radius: 10px;
  grid-row: 1 / 5;
  margin-bottom: 20px;
  user-select: none;
  object-fit: cover;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);
}

.content h1 {
  font-size: 1.2rem;
  color: #fff;
  text-align: center;
  grid-row: 5 / 6;
}

.content p {
  font-size: 1rem;
  font-weight: 400;
  color: #fff;
  grid-row: 6 / 9;
}

.btn-grad {
  background-image: linear-gradient(
    to right,
    #ece9e6 0%,
    #ffffff 51%,
    #ece9e6 100%
  );
  padding: 10px 16px;
  color: #000;
  box-shadow: 0 0 5px #eee;
  outline: 0;
  font-size: 1rem;
  font-weight: 400;
  grid-row: 9 / 10;
  cursor: pointer;
  transition: all 0.5s ease-in;
}

.btn-grad:is(:hover, :focus-visible) {
  text-decoration: none;
}

.control {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  list-style: none;
  gap: 14px;
}

.control li {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(to bottom, #559b9a, #3b3d8a);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5),
    inset 0px 4px 4px rgba(255, 255, 255, 0.2);
  padding: 16px;
  border-radius: 50%;
  cursor: pointer;
  transform: scale(1);
}

.control li::before {
  position: absolute;
  content: "";
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(to right, #559b9a, #3b3d8a);
  border-radius: 50%;
  z-index: -1;
  transition: all 0.5s ease-in;
  opacity: 0;
}

.control li:hover::before {
  opacity: 1;
}

.arrow {
  font-size: 1.5rem;
  color: #fff;
}

@media (max-width: 1215px) {
  .description > p {
    font-size: 1rem;
  }

  .btn {
    font-size: 1rem;
  }
}

@media (max-width: 1015px) {
  .home {
    grid-template-columns: 45% 50%;
    gap: 50px;
    padding: 140px 50px;
  }
  
  .description > p {
    font-size: 1rem;
  }

  .btn {
    padding: 8px 12px;
  }

  .btn-grad {
    padding: 8px 12px;
  }
}

@media (max-width: 865px) {
  .home {
    grid-template-columns: 45% 50%;
    gap: 60px;
    padding: 130px 70px;
  }
}

@media (max-width: 815px) {
  .home {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;
    grid-template-areas:
      "userscolorcontainer"
      "description";
    gap: 30px;
    padding: 90px 80px 70px;
  }

  .users-color-container {
    grid-area: userscolorcontainer;
  }

  .description {
    grid-area: description;
    padding: 0;
    text-align: center;
  }

  .description > p {
    font-size: 1.1rem;
  }

  #form {
    justify-content: center;
  }
}

@media (max-width: 815px) {
  .description > p {
    font-size: 1rem;
  }
}

@media (max-width: 460px) {
   .home {
    gap: 0;
    padding: 30px 40px;
  }
  
  #form {
    flex-direction: column;
    align-items: center;
    gap: 30px;
    margin-top: 20px;
  }
  
  input[type="email"]:focus {
    outline-offset: 6px;
  }

}
@import url("https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;800&display=swap");



a {
  text-decoration: none;
}

/* section {
  padding: 3rem 0;
  max-width: min(87.5rem, 90%);
  margin: 0 auto;
  text-align: center;
  width: 100%;
 */



  .pricing {
    &-cards {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.8em;
      margin-top: 5em;
    }

    &-card {
      flex: 0 1 18.75rem;
      background: #fff;
      text-align: center;
      padding: 2.5em 2em;
      border-radius: 0.625rem;
      position: relative;
      cursor: pointer;

      li {
        text-transform: capitalize;
        font-size: 1rem;
      }

      .ribbon {
        position: absolute;
        width: 2.5rem;
        height: 6.875rem;
        background: #b62828;
        top: -0.625rem;
        left: 1.563rem;
        transition: opacity 0.3s ease-in;
        visibility: hidden;
        opacity: 0;


        svg {
          width: 0.625rem;
          color: #1b1b1b;
        }

        &::before {
          content: "";
          position: absolute;
          top: 0;
          right: -0.563rem;
          border-left: 0.313rem solid #b62828;
          border-right: 0.313rem solid transparent;
          border-top: 0.313rem solid transparent;
          border-bottom: 0.313rem solid #b62828;
        }

        &::after {
          content: "";
          position: absolute;
          bottom: -0.063rem;
          left: 0;
          border-left: 1.25rem solid transparent;
          border-right: 1.25rem solid transparent;
          border-top: 1.25rem solid transparent;
          border-bottom: 1.25rem solid #1b1b1b;
        }
      }

      hr {
        display: block;
        width: 35%;
        margin: 0 auto;
        margin-top: 1.875rem;
        margin-bottom: 1.563rem;
        visibility: visible;
      }

      hr.first {
        background: #d6d4d3;
        height: 0.156rem;
        border: none;
      }

      hr.second {
        background: #1b1b1b;
        height: 0.25rem;
        border: none;
      }

      .card-price {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        font-weight: bold;
        color: #1b1b1b;
        margin: 1.563rem 0;
      }

      .card-price span {
        color: #1b1b1b;
        font-size: 1.1rem;
        margin-right: 0.625rem;
      }

      .card-btn {
        background: #d6d4d3;
        color: #1b1b1b;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 0.9rem;
        padding: 0.5rem 1.875rem;
        display: inline-block;
        transition: opacity 0.3s ease-in;
        visibility: hidden;
        opacity: 0;
      }

      &.active {
        background: #1b1b1b;
        color: #a3a3a3;

       

        .ribbon {
          opacity: 1;
          visibility: visible;
        }

        &:hover .card-btn {
          background: #fff;
        }

        hr {
          opacity: 0;
          margin: 0;
          visibility: hidden;
        }


        .card-price span {
          color: #d6d4d3;
        }

        .card-price {
          color: #fff;
        }

        .card-btn {
          background: #d6d4d3;
          color: #1b1b1b;
          opacity: 1;
          margin-top: 2.813rem;
          visibility: visible;
        }
      }
    }
  }





</style>
</head>
<body>






<?php include 'text.php';?>

  



  
    <section class="home">
      <div class="description">
        <h1 class="title">
          <span class="gradient-text"><b>Company Information</b></span> </h1>
        <p class="paragraph">
          We are Morrebs ICT Solutions Limited, a dynamic tech company where technology meets innovation in a seamless dance of progress. 
        </p>
        <form id="form" autocomplete="off">
          
       <a  class="btn" aria-label="submit" style="width: 100%;" href="https://morrebsict.com/"> 
            <span>Visit Our Website</span>
            <ion-icon name="arrow-forward-outline"></ion-icon>
          
          </a>
        </form>
      </div>

      <div class="users-color-container">
        <span class="item" style="--i: 1"></span>
        <img
          class="item"
          src="data:image/jpeg;base64,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"
          style="--i: 2"
          alt="" />
        <span class="item" style="--i: 3"></span>
        <img
          class="item"
          src="data:image/jpeg;base64,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"
          style="--i: 4"
          alt="" />

        <img
          class="item"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt9t1lEzWGTTjhoCbQgZ3gjDNZsdP-ZOiALg&usqp=CAU"
          style="--i: 10"
          alt="" />
        <span class="item" style="--i: 11"></span>
        <img class="item" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0uFmnsH6Q0ONkt2qK5GuppilRKfLZ9Hl2j_FK9r4RF8qoVnCJjgfvsMj4GxVNYupdzsI&usqp=CAU" style="--i: 12" alt="" />
        <span class="item" style="--i: 5"></span>

        <span class="item" style="--i: 9"></span>
        <img class="item" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYqsjQycmhGvKsblOj8vFcIpKs2-iZAVwiVK2Yv53Go8ChnRg8LFnzOaXLGCota-cOTfg&usqp=CAU" style="--i: 8" alt="" />
        <span class="item" style="--i: 7"></span>
        <img class="item" src="data:image/jpeg;base64,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" style="--i: 6" alt="" />
      </div>
    </section>

    
  
          

        </div>

      </div>
    </center>
    </div>
    <section class="about" id="about">
      <div class="container">

 
        <center>  <img src="./assets/images/366562583_784544060337966_4350504834282458193_n-removebg-preview.png" alt="House interior" style="width: 100%; height: 78%; float: left;"></center>

        

        <div class="about-content" style="float: right;">

          <p class="section-subtitle">About Us</p>

          <h3 class="h3 section-title">Established in 2020 with a firm commitment to excellence, we are a team of ICT professionals driven by the passion to revolutionize industries through cutting-edge applications and tech solutions.</h3>

          <p class="about-text">
            At Morrebs, we pride ourselves on being at the forefront of technological advancements. Our dedicated team of tech enthusiasts and innovators work tirelessly to create bespoke solutions that cater to the unique needs of various industries. Whether it is healthcare, finance, education, entertainment or beyond, we believe in harnessing the power of technology to propel businesses into the future.
          </p>

         

          <p class="callout">
            Empowering Healthcare Facilities in Africa
          </p>


        </div>

      </div>
    </section>

 
    <section class="features">
      <div class="container">

        <p class="section-subtitle">Key Healthcare Management Features </p>

        <h2 class="h2 section-title">Our Core Values</h2>
        <p class="text" style="text-align: center;">

          Our core values revolve around Love, Excellence, Integrity, and Innovation. We believe in building lasting partnerships with our clients, working together to overcome challenges and achieve milestones. Every project we undertake is a testament to our commitment to quality, innovation, and reliability.
We are not just a tech company; we are architects of the future. Join us on this exciting journey as we continue to redefine industries, one innovative solution at a time.


What sets us apart is our unwavering dedication to delivering top-notch products. We understand that in today's fast-paced world, staying ahead is not just an option—it is a necessity. That is why our team is constantly pushing boundaries, exploring new horizons, and embracing the latest trends to ensure that our clients receive solutions that are not only current but also future-proof.
        </p>
        

      </div>
    </section>


    <style>

.form {
  width: 100%;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;

  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  border-radius: 14px;
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.containe {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.containe:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.containe .info {
  margin: 50px auto;
  text-align: center;
}
.containe .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.containe .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.containe .info span a {
  color: #000000;
  text-decoration: none;
}
.containe .info span .fa {
  color: #EF3B3A;
}



 /* Container for the grid */
 .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px;
        }

        /* Grid items */
        .grid-item {
            background-color: #FFFFFF;
            padding: 20px;
            text-align: center;
            border-radius:16px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        /* Media queries for responsiveness */
        @media (max-width: 300px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
            }
        }
      </style>
      <center>
        <h3 class="h3 section-title" style="padding-top: 40px;">Contact Us</h3>
        </center>
<div class="grid-container">
  
  <div class="grid-item">  <center>
        
      <div class="form" style="width: 300px; border-radius: 16px; margin-top: 15px;">
  
        <form class="login-form" method="post" action="fill.php">
          <input type="text" placeholder="Fullname">
          <input type="password" placeholder="Enter Your feedback">
          <input type="submit" name="submit" value="Submit" style="background-color: #1b1b1b; color: white;">
  
        </form>
   
    
    </div>
  </center>
  </div>
  <div class="grid-item" >
    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.5214848140693!2d8.872286081314074!3d9.846758244342224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1053759c8bcced01%3A0xc7b4659df352297e!2sMorrebs%20ICT%20Solutions%20Limited!5e0!3m2!1sen!2sng!4v1702292242195!5m2!1sen!2sng"   style="border:0; height:300px; border-radius: 16px; margin-top: 15px; width: auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>

  <!-- Add more grid items as needed -->
</div>

<!-- <section style="width:100%; height:800px; max-height: 700px;">
  <center>
  <h3 class="h3 section-title" style="padding-top: 100px;">Contact Us</h3>

  <div class="container" style="float: right; " >
    
    <center>
</center>
</div>
</center>
</section> -->


<footer class="footer">

  <div class="footer-top">
    <div class="container">

<center>
  
 <img src="./assets/images/MORS.png" alt="MHMS logo" style=" height:50px ; width: 200px;  ">
<br><br><br>
     <div class="footer-link-box" style="float: right;">

        <ul class="" style="  text-align: left;" >

          <li>
            <p class="footer-list-title"><a href="https//:morrebsict.com"><b>Quick Links</b></a></p>
          </li>

          <li>
            <a href="#" class="footer-link">Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Solutions</a>
          </li>


          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>
          <li>
            <a href="#" class="">My Account</a>
          </li>
           <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>
        </ul>

         <div class="footer-link-box">

        <ul class="footer-list" style="text-align: left;">

          <li>
            <p class="footer-list-title"><a href="https//:morrebsict.com">Address</a></p>
          </li>

          <li>
            <a href="#" class="footer-link"><b>Head Office:</b></a>
          </li>

          <li>
            <a href="#" class="footer-link">Suite 10, Upper Floor, Rianbow Plaza,
              Zaramaganda-RayField Road, Jos, Plateau State, Nigeria</a>
          </li>


          <li>
            <a href="#" class="footer-link"><b>Branch Office:</b></a>
          </li>
          <li>
            <a href="#" class="footer-link">Memunat Ayodeji, No. 21, Crescent, Oregun, Ikeja, Lagos State.</a>
          </li>

        </ul>
        <ul class="footer-list" style="text-align: left;">

          <li>
            <p class="footer-list-title">Contact</p>
          </li>

          

          <li>
            <a href="#" class="footer-link">+2349076767595</a>
            <a href="#" class = "footer-link">+2349078111978</a>
          </li>

          <li>
            <a href="#" class="footer-link">hi@morrispital.com</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>
          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

         

        </ul>

        

      </div>

    </div>
  </center>
  </div>
     

    <div class="footer-bottom" style="width: 100%;">
      <center>
     <div class="">

       <p class="copyright" style="color: white;">
          <a href="https//:morrebsict.com" style="color: white;">&copy; 2022 morrebsict</a>. All Rights Reserved
       </p>

     </div>
   </center>
   </div>


  </footer>




  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
<script>


</script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>

</html>