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
        <?php
            $appointment = $Appointment->get_appointment();
            echo '<table class="admin-table">';
                foreach($appointment as $a){
                    echo '<tr>';
                    echo '<td>'.$a->first_name;'</td>';
                    echo '<td>'.$a->last_name;'</td>';
                    echo '<td>'.$a->email;'</td>';
                    echo '<td>'.$a->phone_number;'</td>';
                    echo '<td>'.$a->book_date;'</td>';
                    echo '<td>'.$a->leave_message;'</td>';
                    echo '<td colspan="4">
                    <form action="inc/appointment/edit.php" method="post">
                        <input type="hidden" name="form_id" value="'.$a->ID.'"'.'>
                        <input type ="text" name="first_name" placeholder="Text otázky"><br>
                        <input type ="text" name="last_name" placeholder = "Text odpovede"><br>
                        <input type ="submit" name="update_appointment" value="Zmeň text">
                    </form>
                </td>';
                    
                    echo '<td>
                            <form action="inc/appointment/delete.php" method="post">
                                <button type = "submit" name="delete_appointment" value="'.$a->ID.'"'.'>Vymazať</button>
                            </form>';
                echo '</tr>';
                }
                echo '</table>';
        ?>
        </main>