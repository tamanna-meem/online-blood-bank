<?php if (isset($_POST['name'])); {?>
<table style="width: 224px; text-align: center;" border="1" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Status</th>
    </tr>
    <tr>
        <td><?= $_POST['name'] ?></td>
        <td><?= $_POST['is_coder'] ?></td>
    </tr>
</table>
<?php }?>
<br />
<br />
<fieldset style="width: 200px;">
    <legend>Form</legend>
    <form method="post">
        <label for="">Name</label> <input type="text" name="name" /> <br />
        <label for="coder"> <input type="checkbox" name="is_coder" value="coder" id="coder" /> I am a coder </label> <br />
        <br />
        <input type="submit" />
    </form>
</fieldset>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
