<?php
if (!empty($error)) {
   foreach ($error as $errors) {
   ?>
   <div class="post_error">
   <h3 align="center"><?php echo $errors; ?></h3>
   </div>
   <?php
   }
}