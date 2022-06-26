<?php
    $title = get_field("title");
    $text = get_field("text");
    $btn_txt = get_field("btn_txt");
    $btn_url = get_field("btn_url");
?>
<div class="row">
    <div class="col-10 col-lg-4 mb-5">
        <h2><?php echo $title ?></h2>
        <p><?php echo $text ?></p>
        <a class="btn btn-primary" href="<?php echo $btn_url ?>"><?php echo $btn_txt ?></a>
    </div>
    <div class="col-lg-8">
        <div class="row align-items-center">

            <div class="col-3">
                <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student1.jpg">
            </div>

            <div class="col-6">

                <div class="row align-items-end mb-4">
                    <div class="col-9">    
                        <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student3.jpg">
                    </div>

                    <div class="col-3">
                        <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student6.jpg">
                    </div>
                </div>

                <div class="row align-items-start">
                    <div class="col-3"> 
                        <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student5.jpg">
                    </div>

                    <div class="col-9"> 
                        <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student4.jpg">
                    </div>

                </div>

            </div>

            <div class="col-3">
                <img class="rounded img-fluid w-100" src="/app/themes/julien/blocs/assets/student2.jpg">
            </div>
        </div>
    </div>
</div>