<form id="contact" action="inc/kontakt/insert.php" method="post">
            <input type="text" name ="meno" placeholder="Vaše meno" id ="meno"  required><br>
            <input type="email" name ="email" placeholder="Váš email" id="email" required><br>
            <textarea name="sprava" placeholder="Vaša správa" id="sprava"></textarea><br>
            <input type="checkbox" name="" id="" required><label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
            <input type="submit" value="Odoslať", name="insert_kontakt">
</form>
<div id="error" class="text-red">