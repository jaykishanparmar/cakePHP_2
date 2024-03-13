<section class="page-section" id="registration">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">User List</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Address</th>
                            <th scope="col">State</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    if (!empty($data)) :
                        foreach ($data as $user) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $user['User']['first_name']; ?></td>
                                    <td><?php echo $user['User']['last_name']; ?></td>
                                    <td><?php echo $user['User']['number']; ?></td>
                                    <td><?php echo $user['User']['email']; ?></td>
                                    <td><?php echo $user['User']['is_admin'] == 1 ? "Admin" : "User"; ?></td>
                                    <td><?php echo $user['User']['address']; ?></td>
                                    <td><?php echo $user['User']['state']; ?></td>
                                    <td>
                                        <?php
                                        if ($this->Session->read('Auth.User.is_admin') == 1) :
                                            echo $this->Html->link('Delete', '/users/delete/' . $user['User']['id'], array('class' => ''));
                                        endif;
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                    <?php endforeach;
                    endif; ?>
                </table>
            </div>
        </div>
    </div>
</section>