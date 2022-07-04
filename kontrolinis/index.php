<?php
?>


<form method="POST" action="save.php">
    <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="adress" class="col-md-4 col-form-label text-md-end">Surname</label>
        <div class="col-md-6">
            <input type="text" name="surname" class="form-control" placeholder="surname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="adress" class="col-md-4 col-form-label text-md-end">Email</label>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="phonenumber" class="col-md-4 col-form-label text-md-end">Phone</label>
        <div class="col-md-6">
            <input type="number" name="phone" class="form-control" placeholder="phone">
        </div>
    </div>
    <div class="row mb-3">
        <label for="phonenumber" class="col-md-4 col-form-label text-md-end">Subject</label>
        <div class="col-md-6">
            <input type="text" name="subject" class="form-control" placeholder="subject">
        </div>
    </div>
    <div class="row mb-3">
        <label for="phonenumber" class="col-md-4 col-form-label text-md-end">Message</label>
        <div class="col-md-6">
            <input type="text" name="message" class="form-control" placeholder="message">
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <input type="submit" class="btn btn-primary" value="submit">
        </div>
    </div>
</form>