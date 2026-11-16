<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="title">
            <h3>portfolio </h3>
        </div>
        <nav >
            <a class="nav_item" href="">about</a>
            <a class="nav_item" href="">bout </a>
            <a class="nav_item" href="">article</a>


        </nav>

    </header>


   <main>



   <div class="listproject">
   <?php foreach($projects as $project): ?>
<?php $category_style="" ;?>

<?php if($project["category"]=="Web"){
     $category_style="web" ;
}elseif($project["category"]=="JavaScript"){
 $category_style="javascript" ;
}else{
    $category_style="desktop" ;
}
?>

<?php

$string_technologe="";
foreach($project["technologies"] as $tec): ?>


   <?php  $string_technologe .= $tec . " ";?>



<?php endforeach; ?>




    <div class="card_project"  >

   <img src=" <?php echo($project["image"]) ?> " alt="">

   <div class="detalis">
    <h1> <?php echo($project["title"])?> </h1>

    <p class="description"><?php echo($project["description"])?></p>

 <p class="technologies">technologies : <?php echo($string_technologe) ?></p>

 <div class="footer_card">
    <div class="category" >
        <span class=" <?php echo($category_style) ?> "><?php echo($project["category"]) ?></span>
    </div>
    <div class="status">
         <span class=" <?php echo($project["status"]=="Terminé")? "termine": "encoure" ?> "  ><?php echo($project["status"]) ?></span>

    </div>
 </div>

   </div>



   </div>


<?php endforeach; ?>
</div>
   </main>
    
</body>
</html>