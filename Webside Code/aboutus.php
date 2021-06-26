<!-- html 5 declaration:-->
<!DOCTYPE html> 
<!--Declare the language of the Web page-->
<html lang="en">

<!--Importing Head module: -->
<head>
  <?php require __DIR__ . "/app/views/head.php"; ?>
  <!--Set title--> 
  <title>Contact Us</title>
</head>

<body class="aboutus">
  <!--Set class for body to use in css-->

  <!--Importing Header module: -->
  <?php require __DIR__ . "/app/views/header.php"; ?>
  <?php require __DIR__ . "/app/views/admin-link.php"; ?>


  <main>
    <!-- main content of the page are put in main tag -->

    <article class="about">
      <p class="text-justify">
        <span class="font-weight-bold">Foto Project</span> offers a low-cost, bespoke approach to stock-photography and editing.
        Our photographers have over two decades of combined experience in providing visual
        accompaniment across several fields of publishing (Orbit Books, Tor Publications) and
        journalism (Lonely Planet, BBC Good Food, Hikers’ Journal, BBC History Extra).
        Behind the scenes, our curation of the annual Best-Of blog for the culinary recipe
        website Epicurious won nomination medals for the Sony World Photography Award in 2017,
        2019 and 2020.Membership for our ready-to-use 4K photography libraries can be tailored
        according to your requirements, and can be cancelled at any time. If you have more
        specific ideas for your book cover, website or other publication, let us know. We
        can’t wait to get started.
      </p>
    </article>
  </main>

  <!--Importing Footer module: -->
  <?php require __DIR__ . "/app/views/footer.php"; ?>

</body>

</html>