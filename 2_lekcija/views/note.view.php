<?php require('partial/head.php') ?>

<?php require('partial/nav.php') ?>

<?php require('partial/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>
        <a href="/notes" class="text-blue-500 hover:underline">Go back</a>
    </p>
    <p > 
        <?= $note['body'] ?> 
    </p>


  </div>
</main>
<style>

</style>
<?php require('partial/footer.php') ?>