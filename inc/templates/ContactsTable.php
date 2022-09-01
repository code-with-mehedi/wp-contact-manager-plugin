<div class="alfa-contacts-tabel">

  <h3>Contacts</h3>

  <table>

			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact Number</th>
					<th>Actions</th>
					<th>Add Contact</th>

				</tr>
			</thead>
			<tbody>
        <?php foreach($allcontacts as $contact): ?>
          <tr>
            <td><?php echo $contact->ID; ?></td>
            <td><?php echo $contact->name; ?></td>
            <td><?php echo $contact->email; ?></td>
            <td>+8801621620427</td>
            <td><a href="<?php echo admin_url('admin.php?page=add_people&edit-id='.$contact->ID) ?>">Edit</a> <a href="<?php echo admin_url('admin.php?page=contacts_manager&delete-id='.$contact->ID) ?>">Delete</a></td>
            <td><a href="<?php echo admin_url('admin.php?page=add_contact&contact-id='.$contact->ID) ?>">Add Contact</a></td>
          </tr>
        <?php endforeach; ?>  
			</tbody>

		</table>
</div>