<?php require_once 'header.php'; ?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Feedback</h1>
    </div>

    <div class="media">
        <img src="https://cdn.pixabay.com/photo/2018/04/12/04/26/blood-pressure-3312513_960_720.png" class="mr-3 w-50" alt="...">
        <div class="media-body">
            <form>
                <h2 class="w3-center">Feedback</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Feedback</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" require></textarea>
                </div>
                <button type="submit" onclick="alert('Feedback has delivered')" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>

<?php require_once 'footer.php'; ?>