<?php require('partial/head.php') ?>

<?php require('partial/nav.php') ?>

<?php require('partial/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p > Welcome to Notes</p>
    <ul>
        <?php foreach($notes as $note) :?>
        <li>
            <a href="/note?id=<?=$note['user_id']?>" class ="text-blue-500 hover:underline"> 
              <?= htmlspecialchars($note['body']) ?> 
            </a>
        </li>

        <?php endforeach; ?>
    </ul>

    <p>
  <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
</p>

  </div>
</main>
<style>

</style>
<?php require('partial/footer.php') ?>