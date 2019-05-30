<?php
$title = 'Contact';
require_once 'template/header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<pre>"; print_r($_POST); echo "</pre>";
}

?>

<h1>Contact us </h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Your name</label>
        <input type="text" name="name" class="form-control" placeholder="Your names">
    </div>

    <div class="form-group">
        <label for="name">Your email</label>
        <input type="email" name="email" class="form-control" placeholder="Your email">
    </div>

    <div class="form-group">
        <label for="document">Your name</label>
        <input type="file" name="document">
    </div>

    <div class="form-group">
        <label for="document">Your massage</label>
        <textarea  name="massage" class="form-control" placeholder="Massage"></textarea>
    </div>
<button class="btn btn-primary">Send</button>
</form>

<?php
require_once 'template/footer.php';
?>