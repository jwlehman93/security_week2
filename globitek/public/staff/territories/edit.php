<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$territory_id = $_GET['id'];
$territories_result = find_territory_by_id($territory_id);
// No loop, only one result
$territory = db_fetch_assoc($territories_result);
$errors = array();

if(is_post_request()) {
  foreach($territory as $key => $value) {
    if(isset($_POST[$key])) {$territory[$key] = $_POST[$key];}
  }

  $result = update_territory($territory);
  if($result === true) {
    redirect_to('show.php?id=' . $territory['id']);
  } else {
    $errors = $result;
  }
}

?>
<?php $page_title = 'Staff: Edit Territory ' . $territory['name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id=<?php echo $territory['state_id']?>">Back to State Details</a><br />

  <h1>Edit Territory: <?php echo $territory['name']; ?></h1>

  <?php echo display_errors($errors); ?>  

  <form action="edit.php?id=<?php echo $territory_id;?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo $territory['name']; ?>" /><br />
    Position:<br />
    <input type="text" name="position" value="<?php echo $territory['position']; ?>" /><br />
    <br />
    <button type="submit">Submit</button>
  </form>
  <br />
  <a href="show.php?id=<?php echo $territory_id;?>">Cancel</a>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
