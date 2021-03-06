<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['state_id'])) {
  redirect_to('../states/index.php');
}
$state_id = $_GET['state_id'];

$errors = array();
$territory = array(
  'name' => '',
  'position' => ''
);
if(is_post_request()) {
  foreach($territory as $key => $values) {
    if(isset($_POST[$key])) { $territory[$key] = $_POST[$key]; }
  }
  $territory['state_id'] = $state_id;
  $result = insert_territory($territory);
  if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . $new_id);
  } else {
    $errors = $result;
  }
}

?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id=<?php echo $state_id;?>">Back to State Details</a><br />

  <h1>New Territory</h1>

  <?php echo display_errors($errors);?>

  <form action="new.php?state_id=<?php echo $state_id;?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo $territory['name']; ?>" /><br />
    Position:<br />
    <input type="text" name="position" value="<?php echo $territory['position']; ?>" /><br />
    <br />
    <button type="submit">Submit</button>
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
