<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open(); ?>

<label for="title">Title</label> <br>
<input type="text" name="title" /> <br>

<label for="text">Text</label> <br>
<textarea name="text" id="" cols="30" rows="10"></textarea> <br/>
<input type="submit" name="submit" value="Create news item"/>
</form>
