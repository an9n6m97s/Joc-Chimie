<!-- Developer Modal -->
<div class="modal fade" id="creditsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color: #31353d; color: #ffffff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Developer Credits</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Adaugă aici conținutul pentru credits -->
        <h6>Contribuitori la proiect</h6>
        <table class="table table-dark table-rounded"> <!-- Adaugă clasa table-rounded pentru a aplica margini rotunjite -->
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nume</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Lupșă Lucian-Mihai</td>
              <td><a href="mailto:office@netrun.ro">office@netrun.ro</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
          </tbody>
        </table>

        <h6>Designeri</h6>
        <table class="table table-dark table-rounded">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nume</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
          </tbody>
        </table>

        <h6>HR</h6>
        <table class="table table-dark table-rounded">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nume</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Nume</td>
              <td><a href="mailto:@gmail.com">@gmail.com</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Închide</button>
      </div>
    </div>
  </div>
</div>

<!-- Support Modal -->

<div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #31353d; color: #ffffff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Adaugă aici conținutul pentru support -->
            <div class="modal-body">
                <h6>Întâmpini probleme?</h6>
                <p>Trimite-ne un email la <a href="mailto:office@netrun.ro">office@netrun.ro</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Închide</button>
            </div>
        </div>
    </div>
</div>

<!-- Help Hints Modal -->
<div class="modal" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #31353d; color: #ffffff;">
            <div class="modal-header">
                <h5 class="modal-title" id="helpModalLabel">Hints</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                        <p>Remaining hints: 3</p>
                        <p>Do you want to use a hint?</p>
                    </div>
                    <div class="col-md-3">
                      <button id="help_modal_accept_button">
                        <span class="back"></span>
                        <span class="front"></span>
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
