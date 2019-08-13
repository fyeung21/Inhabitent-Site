<!-- This file is used to markup the public-facing widget. -->

<?php if (strlen(trim($phone_number)) > 0) : ?>
    <p>
        <span class="contact-detail"></span><a class="contact-link" href="#"><?php echo $phone_number; ?></a>
    </p>
<?php endif; ?>

<?php if (strlen(trim($email)) > 0) : ?>
    <p>
        <span class="contact-detail"></span><a class="contact-link" href="#"><?php echo $email; ?></a>
    </p>
<?php endif; ?>

<?php if (strlen(trim($address)) > 0) : ?>
    <p>
        <span class="contact-detail"></span><?php echo $address; ?>
    </p>
<?php endif; ?>