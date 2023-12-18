<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>
<section id="homepage">
   
    <div class="control_buttons">
        <div class="row">
            <div class="col-md-4"> 
                <button id="button_1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                  <span>Start</span>
                </button>
            </div>

            <div class="col-md-4"> 
                <button id="button_2">
                  <p>Start!</p>
                </button>
            </div>

            <div class="col-md-4"> 
                <button id="button_3">
                  <div class="original">START</div>
                  <div class="letters">

                    <span>S</span>
                    <span>T</span>
                    <span>A</span>
                    <span>R</span>
                    <span>T</span>
                  </div>
                </button>
            </div>

            <div class="col-md-4"> 
                <button id="button_4">
                    <span>Not allowed!</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-miterlimit="2" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd"><path fill-rule="nonzero" d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"></path></svg>
                    </span>
                </button>
            </div>

            <div class="col-md-4"> 
                <button id="button_5">
                    <span class="text">Button</span>
                    <span aria-hidden="" class="marquee">Button</span>
                </button>
            </div>
        </div>

    </div>

    <div class="help_menu_toggler">
        <i class="fa-duotone fa-seal-question fa-bounce fa-2xl" id="help_menu_toggler" style="--fa-primary-color: #ffea00; --fa-secondary-color: #ffea00;"></i>
    </div>

</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>