<?php
  if ( ! empty( $_GET['edit-id'] ) && $id = absint( $_GET['edit-id'] ) ) {

    global $wpdb;
    $table = $wpdb->prefix.'peoples';
    $result= $wpdb->get_results(" SELECT * FROM {$table} WHERE ID =$id ");

  }

?>

<div class="alfa-add-people-form">

    <h2>Add New People</h2>
    <form action="" method="POST">
        <input type="hidden" name="update-contact" value="<?php echo isset($_GET['edit-id']) ? $result[0]->ID : ''; ?>">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your Name.." value="<?php echo isset($_GET['edit-id']) ? $result[0]->name : ''; ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" value="<?php echo isset($_GET['edit-id']) ? $result[0]->email : ''; ?>">
    
        <?php
            $attributes = array( 'id' => 'alfa-add-people' );
            submit_button( __( 'Add People', 'alfacm' ), 'primary', 'alfa-add-people', true, $attributes );
        ?>

    </form>
</div>