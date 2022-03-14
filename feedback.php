<?php require_once 'header.php'; ?>

<div class="container">
    <div class="jumbotron" style="background-color: maroon;">
        <h1 class="display-4 text-white">Feedback</h1>
    </div>

    <div class="media">
        <img src="https://cdn.pixabay.com/photo/2018/04/12/04/26/blood-pressure-3312513_960_720.png" class="mr-3 w-50" alt="...">
        <div class="media-body">
            <form action="https://formspree.io/f/xpzbrvea" method="POST">
                <h2 class="w3-center">Feedback</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" require>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Feedback</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" require></textarea>
                </div>
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php require_once 'footer.php'; ?>