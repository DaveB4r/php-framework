<h1>Welcome</h1>
<ul>
  <?php foreach($journals->fetchAll(PDO::FETCH_ASSOC) as $journal) :?>
    <li><?= $journal['name'] ?>(<?= $journal['published_year'] ?>)</li>
  <?php endforeach; ?>
</ul>