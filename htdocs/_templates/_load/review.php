<?php

$review = false;

if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['star']) and isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $star = $_POST['star'];
    $message = $_POST['message'];
    $passing = Datas::review($name, $email, $star, $message);
    $review = true;
}

if ($review) {
    $path = getConfig('root_path');
    if ($passing) {
        echo "<script>alert('Form Submited Successful!'); window.location.href = '$path';</script>";
    } else {
        echo "<script>alert('Form Submitation Failed!');</script>";
    }
} else {
?>

<div class="containers">
    <form class="form-container" method="post" autocomplete="off">
        <div class="headline"><span>Review</span></div>
        <div class="form-line">
            <input type="text" name="name" class="form-input" required>
            <label>Name *</label>
            <div class="check-label"></div>
            <div class="error-label">Field is required!</div>
        </div>
        <div class="form-line">
            <input type="email" name="email" class="form-input" required>
            <label>Email *</label>
            <div class="check-label"></div>
            <div class="error-label">Field is required!</div>
        </div>
        <div class="form-line">
            <input type="number" class="form-input" name="star" min="1" max="5" required>
            <label>Star Rating 1 to 5 *</label>
            <div class="check-label"></div>
            <div class="error-label">Field is required!</div>
        </div>
        <div class="form-line">
            <textarea class="form-input" name="message" required></textarea>
            <label>Message *</label>
            <div class="check-label"></div>
            <div class="error-label">Field is required!</div>
        </div>

        <input type="submit" class="form-button" value="Submit">
    </form>
</div>

<?php } ?>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    // Review Form Validation
    $(document).ready(function(){
        $('.form-input').on('keyup paste cut focusout', function(){
            var $this = $(this);
            var $parent = $this.parents('.form-line');
            var input_value = $.trim($this.val());
            var required = $this.is(':required');

            if (input_value.length > 0) {
                $parent.find('label').addClass('top');
                $parent.removeClass('error').addClass('success');
            } else {
                $parent.find('label').removeClass('top');
                $parent.removeClass('success');
                if (required) {
                    $parent.addClass('error');
                }
            }
        });
    });
</script>