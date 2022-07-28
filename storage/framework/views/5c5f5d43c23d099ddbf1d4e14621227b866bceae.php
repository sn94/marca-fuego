<tr>
<td class="header">
<a href="<?php echo e($url); ?>" style="display: inline-block;">
<?php if(trim($slot) === 'Laravel'): ?>
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
<?php else: ?>


<?php

$publicLogo = public_path('image/logo.png');
$filelogo = file_get_contents( $publicLogo );
$b64 = base64_encode( $filelogo);
?>
<img style=" display: block ;margin: 0 auto; width: 200px; height: auto;" src="<?php echo e('data:image/png;base64,'.$b64); ?>" alt="">


<?php echo e($slot); ?>

</div>


 
<?php endif; ?>
</a>
</td>
</tr>
<?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/vendor/mail/html/header.blade.php ENDPATH**/ ?>