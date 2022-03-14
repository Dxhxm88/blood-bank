<?php require_once 'header.php'; ?>

<div class="container">
    <div class="jumbotron" style="background-color: maroon;">
        <h1 class="display-4 text-white">Help & FAQs</h1>
    </div>

    <div class="media">
        <img src="https://cdn.pixabay.com/photo/2020/09/25/13/49/blood-test-5601437_960_720.jpg" class="mr-3 w-50" alt="...">
        <div class="media-body">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Is donating blood safe?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Donating blood is safe. Sterile, disposable needles and supplies are used once and then properly disposed. You cannot contract any infectious disease by donating blood.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What happen to my blood after donation?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Following your donation, your transformative gift is typed, tested, processed, stored and distributed to patients who need it in the hospitals we serve. You’ll feel proud knowing you’ve saved up to three lives. When you do good for others, you do good for yourself! If you'd like to see what happens to your blood donation in person, schedule a behind-the-scenes tour of your local donation center.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed text-decoration-none text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How often can I donate whole blood?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Every 56 days. Other types of donation have different intervals. To prevent anemia, we track frequent donors to make sure they don’t give more than the maximum allowable blood volume in a rolling 12-month period. Once this limit is reached, we’ll ask donors to wait before donating again.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php require_once 'footer.php'; ?>