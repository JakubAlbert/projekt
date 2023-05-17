
<?php require('inc/config.php'); ?>
<section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>
                            
                                <form role="form" action="inc/appointment/insert.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Meno" required>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Priezvisko" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Emailová adresa" required>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <input type="telephone" name="phone_number" id="phone_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Telefón: 123-456-7890">
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <input type="date" name="book_date" id="book_date" value="" class="form-control">
                                            
                                        </div>

                                        <div class="col-20">
                                            <textarea class="form-control" rows="5" id="leave_message" name="leave_message" placeholder="Správa"></textarea>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button name="appointment" type="submit" class="form-control" id="appointment">Book Now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            </form>
            <h3 style="padding-left: 20px;">Appointments:</h3>
            
        <?php
            $appointment = $Appointment->get_appointment();
            echo '<table class="admin-table">';
                foreach($appointment as $a){
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>First Name:</strong> '.$a->first_name.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>Last Name:</strong> '.$a->last_name.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>Email:</strong> '.$a->email.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>Phone Number:</strong> '.$a->phone_number.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>Book Date:</strong> '.$a->book_date.'</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td style="padding-left: 40px;"><strong>Leave Message:</strong> '.$a->leave_message.'</td>';
                    echo '</tr>';
                    echo '</tr>';
                    echo '<td style="padding-left: 40px;">';
                    echo '<form action="inc/appointment/delete.php" method="post">';
                    echo '<button type="submit" name="delete_appointment" value="' . $a->ID . '">Vymazať</button>';
                    echo '</form>';
                    echo '</td>';
                
                    echo '</tr>';
                    
                    
                    
                   

                    echo '<table>';
                     echo '<h4 style="padding-left: 20px; margin-top: 20px; ">Change details:</h4>';
                        echo '<tr>';
                        echo '<td colspan="4" style="padding-left: 40px;" >';
                        echo '<form action="inc/appointment/edit.php" method="post">';
                        echo '<input type="hidden" name="form_id" value="' . $a->ID . '">';
                        echo '<input type="text" name="first_name" placeholder="First name"><br>';
                        echo '<input type="text" name="last_name" placeholder="Last name"><br>';
                        echo '<input type="text" name="email" placeholder="E-mail"><br>';
                        echo '<input type="text" name="phone_number" placeholder="Phone number"><br>';
                        echo '<input type="date" name="book_date" placeholder="Date"><br>';
                        echo '<textarea name="leave_message" placeholder="Your message"></textarea><br>';
                        echo '<input type="submit" name="update_appointment" style="margin-bottom: 20px;"value="Zmeň text">';
                        echo '<hr style="width: 100%; border: 1px solid blacks;">';
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                        

                    }
                    
                    echo '</table>';
                    
                    
        ?>
        </main>