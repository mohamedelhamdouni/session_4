<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>market</title>


  <link rel="stylesheet" href="css/tyle.css">
 
  



  <script src="javascript/logic.js" defer></script>
</head>
<body>

    <header id="head-of-page">


        <div id="icon-logo">
            <img src="images/icon_site_web.svg" alt="icon image " title="icon image shop">
        </div>

        <div id="icon-title">
           <p> <span class="m-shop">M</span> Shop</p>
        </div>

        <nav id="nav-bar">
            <a class="nav-header" href="#About">About</a>
            <a class="nav-header" href="">Homme</a>
            <a class="nav-header" href="#Contact">Contact</a>
            <a class="nav-header" href="login.html">Sing UP</a>
            <a id="login" class="nav-header" href="login.html">Log in</a>



    



        </nav>
<div  id="menu-icon-mobile">


<button id="show-nav">
    

                        <div  class="menu-icon">
                               <span></span>
                               <span></span>
                               <span></span>
                       </div>
</button>



</div>

        <div id="mobile-nav" class="mobile-nav">
            <button id="remove-nav">
                <img src="images/remove.png" alt="">
            </button>

            <a href="#About">About</a>
            <a href="">Homme</a>
            <a href="#Contact">Contact</a>
            <a  href="login.html">Sing UP</a>
            <a href="login.html">Log in</a>

        </div>
    </header>


    <main>
       

               <section id="section-1">
                <div id="content-section">
                    <p id="title-article"> <span class="m-shop">M</span> Shop</p>
                 <p>A platform marketplace connects buyers and sellers directly without owning physical inventory, allowing operators to scale rapidly with low overhead and generate diverse revenue streams. For sellers, it provides instant access to a massive built-in audience along with ready-to-use tools for payment processing, logistics, and order management. Meanwhile, buyers enjoy a convenient, one-stop shopping experience featuring competitive pricing, vast product variety, transparent reviews, and secure transaction protection.</p>
                 <button id="discover">discover</button>
                 
                </div>

                <div id="imag-section">

                    <img  src="images/image_article.webp" alt="">
                </div>
               </section>

<div id="categry-title">
        <h1 id="cateh1">some categories</h1>
</div>




               <section id="cards">
            <?php foreach($products as $product):?>

                
                
                <div class="items">
                    <img class="imgcard" src="<?php echo($product["image"]) ?>" alt="">


                    <div class="info-category">
                        <h3 class="title_card"><?php echo($product["title"]) ?></h3>
                      <span class="category"> <?php echo($product["category"]) ?> </span>
                      <p> <?php echo($product["price"]) ?>$</p>
                      <p class="desc"> <?php echo substr($product["description"], 0, 80) . "..."; ?></p>
              
                      <p><span class="timeproduct"> <?php echo date("d/m/Y", strtotime($product["date"])); ?> </span></p>
                    </div>

                </div>

 
                  <?php endforeach;?>




               </section>




    </main>

<div id="sheetrapor" class="sheetrapor">

    <div id="card" class="card">
    <h3>rapport card</h3>
    <input id="inputtext" type="text" placeholder="porblem title ">
    <textarea id="texta" placeholder=" problem Description"></textarea>
    <button id="sendBtn">Send</button>
     <button id="closeBtn">Close</button>
</div>
</div>
    



    <footer>
        <div id="footer-info">
            <div id="About">
                <h1> About</h1>
                <p>market place</p>
                <p>date devlopped </p>
                <p>02/03/2025</p>
                <p>this site for shopping </p>
            <p>    browsing product</p>
                
            </div>
            <div id="Contact">
                <h1>Contact & help</h1>
                <p> <img class="imag-contact" src="images/phone.png" alt="">tel: 0622022637</p>
               <img class="imag-contact" src="images/gmail.png" alt=""> <a href="mailto:hamdounim91@gmail.com">hamdounim91@gmail.com</a> 
               <p>click bellow and give us your problem</p>
               <button id="rapor-btn">rapport</button>

            </div>
          <nav class="na-footer">
            <h1>navigatin</h1>

           
            <a class="item-nav-footer" href="">homme</a>
            <a class="item-nav-footer" href="login.html">Sing up</a>
            <a class="item-nav-footer" href="login.html">Log in</a>
            

          </nav>

        </div>




        <div id="copyright">
            <p>© 2026 About Marketplace. All rights reserved. | Privacy Policy | Terms & Conditions | Contact Us</p>


        </div>


    </footer>
<script>




</script>
</body>
</html>

