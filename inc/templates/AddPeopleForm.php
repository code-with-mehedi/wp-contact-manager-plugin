

<div class="alfa-add-people-form">

    <h2>Add New People</h2>
    <form action="" method="POST">

        <label for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your Name..">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email">
    
        <?php
            $other_attributes = array( 'id' => 'alfa-add-people' );
            submit_button( __( 'Add People', 'alfacm' ), 'primary', 'alfa-add-people', true, $other_attributes );
        ?>

    </form>
</div>